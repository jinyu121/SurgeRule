# -*- coding: utf-8 -*-
import os
from configparser import ConfigParser


def read_rules(folder, rule_set):
    rules = ""
    for file in rule_set:
        try:
            with open(os.path.join(folder, file.lower().strip() + ".conf"), 'rt') as f:
                rules += "\n//=== {} === \n{}\n".format(file.lower(), f.read())
        except:
            pass
    return rules


def main():
    cfg = ConfigParser()

    if os.path.exists('customize.txt'):
        cfg_file_path = 'customize.txt'
    else:
        cfg_file_path = 'customize.example.txt'
    cfg.read(cfg_file_path)

    categories = cfg.get('Surge', 'RuleCategory').split(',')

    with open("Surge.conf", 'rt') as f:
        data = f.read()
        for category in categories:
            try:
                category = category.strip()
                rule_files = cfg.get('Surge', category.capitalize()).split(',')
                data = data.replace('{}_RULES_HERE'.format(category.upper()),
                                    read_rules(category.capitalize(), rule_files))
            except:
                pass

    with open("Surge_Customize.conf", 'w') as f:
        f.write(data)


if "__main__" == __name__:
    print("Building Customize Rules...")
    main()
    print("Success")
