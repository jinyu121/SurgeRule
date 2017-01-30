# -*- coding: utf-8 -*-
import os
import base64


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
    main("dev", "extensions", True)
    # main("extensions", "dev", False)
    print("Success")
