# -*- coding: utf-8 -*-
import os
import re
import time
import argparse
import base64
import requests


def gfwlist():
    try:
        print("GFWList Downloading...")

        request_result = requests.get("https://github.com/gfwlist/gfwlist/raw/master/gfwlist.txt")
        data = base64.b64decode(request_result.text).decode("utf-8")

        print("GFWList Parsing...")

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
                print("IP-CIDR,", line, "/32,ProxyStrategy,no-resolve", file=f, sep="")

        with open("../dev/domain/enhance/gfwlist.conf", "w") as f:
            print("// GFWList 更新时间：", localtime, file=f)
            for line in result_whitelist:
                print("DOMAIN-SUFFIX,", line, ",DIRECT", file=f, sep="")
            for line in result_blacklist:
                print("DOMAIN-SUFFIX,", line, ",ProxyStrategy", file=f, sep="")

        print("GFWList Build Success")
    except Exception as e:
        print("GFWList Build Fail")
        print(e)


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


if "__main__" == __name__:
    parser = argparse.ArgumentParser()
    parser.add_argument("-d", "--decode", help="Decode the rules", action="store_true")
    parser.add_argument("-nogfw", "--no_gfwlist", help="Do not update GFWList", action="store_true")
    args = parser.parse_args()

    if not args.decode:
        if not args.no_gfwlist:
            gfwlist()
        main("../dev", "../extensions", True)
        print("Encode Success")
    else:
        main("../extensions", "../dev", False)
        print("Decode Success")
    print("Done")
