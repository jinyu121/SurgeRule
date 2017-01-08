# -*- coding: utf-8 -*-
import os
import re
from configparser import ConfigParser


def read_rules(category, rule_set, rule_files):
    rules = ""
    for file in rule_files:
        if len(file) > 0:
            filename = os.path.join('enhance',
                                    category.strip().lower(),
                                    rule_set.strip().lower(),
                                    file.lower().strip() + ".conf")
            try:
                with open(filename, 'rt') as f:
                    rules += "\n// {}\n {}\n".format(file.capitalize(), f.read().strip())
                print("Success: {}".format(filename))
            except:
                print("Error occurs while reading {}".format(filename))
    return rules


def main():
    cfg = ConfigParser()

    cfg_file_path = 'Customize.example.ini'
    if os.path.exists('Customize.ini'):
        cfg_file_path = 'Customize.ini'

    cfg.read(cfg_file_path)

    categories = cfg.sections()

    with open("Surge.conf", 'rt') as f:
        data = f.read()

        for category in categories:
            for rule_set in cfg[category]:
                rule_files = cfg.get(category, rule_set).split(',')
                data = data.replace('{}_{}_RULES_HERE'.format(category.upper(),
                                                              rule_set.upper()),
                                    read_rules(category, rule_set, rule_files))
    try:
        node_info_path = "NodeInfo.example.conf"
        if os.path.exists("NodeInfo.conf"):
            node_info_path = "NodeInfo.conf"
        with open(node_info_path, 'rt') as f:
            node_data = f.read()
        if len(node_data) > 10:
            data = re.sub(r'\[Proxy\][\s\S]+?\[Rule\]',
                          "\n" + node_data.strip() + "\n\n[Rule]",
                          data)
    except:
        pass

    with open("Surge_Customize.conf", 'w') as f:
        f.write(data)


if "__main__" == __name__:
    print("Building Customize Rules...")
    main()
    print("Success")
