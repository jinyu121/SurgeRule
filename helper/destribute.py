# -*- coding: utf-8 -*-
import os
import re
import time
import base64
import requests


def gfwlist():
    try:
        request_result = requests.get("https://github.com/gfwlist/gfwlist/raw/master/gfwlist.txt")
        data = base64.b64decode(request_result.text).decode("utf-8")

        pattern_comment = re.compile(r"^![\s\S]+?$", re.MULTILINE)
        data = re.sub(pattern_comment, "", data)

        pattern_ip = re.compile(r"\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}", re.MULTILINE)
        result_ip = pattern_ip.findall(data)
        data = re.sub(pattern_ip, "", data)

        pattern_reg = re.compile(r"^/[\s\S]+?$", re.MULTILINE)
        data = re.sub(pattern_reg, "", data)

        pattern_http = re.compile(r"http[s]?://", re.MULTILINE)
        data = re.sub(pattern_http, "", data)

        pattern_parameter = re.compile(r"\S*?[*?:=%,]\S*?$", re.MULTILINE)
        data = re.sub(pattern_parameter, "", data)

        pattern_parameter2 = re.compile(r"/[\S]*?$", re.MULTILINE)
        data = re.sub(pattern_parameter2, "", data)

        pattern_whitelist = re.compile(r"^@@\|{1,2}(\S+)$", re.MULTILINE)
        result_whitelist = pattern_whitelist.findall(data)
        data = re.sub(pattern_whitelist, "", data)

        pattern_blacklist = re.compile(r"^[|.]*(\S+?)$", re.MULTILINE)
        result_blacklist = pattern_blacklist.findall(data)

        localtime = time.strftime("%Y-%m-%d %H:%M:%S", time.localtime())

        with open("../dev/ip/enhance/gfwlist.conf", "w") as f:
            print("// GFWList 更新时间：", localtime, file=f)
            for line in result_ip:
                print("IP-CIDR,", line, "/32,🚀 Proxy,no-resolve", file=f, sep="")

        with open("../dev/domain/enhance/gfwlist.conf", "w") as f:
            print("// GFWList 更新时间：", localtime, file=f)
            for line in result_whitelist:
                print("DOMAIN-SUFFIX,", line, ",💊 Direct", file=f, sep="")
            for line in result_blacklist:
                print("DOMAIN-SUFFIX,", line, ",🚀 Proxy", file=f, sep="")

        print("GFWList Success")
    except:
        print("GFWList Fail")


def main(folder_from, folder_to, is_encode):
    if not os.path.exists(folder_to):
        os.mkdir(folder_to)
    for f in os.listdir(folder_from):
        if os.path.isdir(os.path.join(folder_from, f)):
            main(os.path.join(folder_from, f), os.path.join(folder_to, f), is_encode)
        else:
            with open(os.path.join(folder_from, f), 'rb') as file_in:
                with open(os.path.join(folder_to, f), 'wb') as file_out:
                    if is_encode:
                        base64.encode(input=file_in, output=file_out)
                    else:
                        base64.decode(input=file_in, output=file_out)


def encode():
    gfwlist()
    main("../dev", "../extensions", True)


def decode():
    main("../extensions", "../dev", False)


if "__main__" == __name__:
    encode()
    # decode()
    print("Success")
