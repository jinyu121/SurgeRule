# SurgeRule

## 关于本规则集

本规则集意在尽量清晰、精简，并有较强的可定制性。

本规则分为 「基于域名的规则」、「基于 IP 的规则」和「其他规则」三部分。

参考： [Surge 使用手册](https://www.gitbook.com/book/blankwonder/surge-manual)

## 使用方法

### Python 版

1. 将 `customize.example.json` 复制为 `customize.json`
1. 根据需要，定制 `customize.json`
1. 运行 `python3 Customize.py` ，得到 `Surge_Customize.conf`

### PHP 版

1. 将 `customize.example.json` 复制为 `customize.json`
1. 根据需要，定制 `customize.json`
1. 将 `customize.json` 使用Base64进行编码
1. 访问 `Customize.php/?conf=BASE64编码结果` ，得到`Surge_Customize.conf`

### 更新规则

1. 推荐使用 Git 获取最新版本
1. Python 版： 运行 `python Customize.py` ，得到 `Surge_Customize.conf`
1. PHP 版： 可以自动更新

## 一起来完善本规则集

依靠个人的力量很难建立一个完整的规则集。欢迎参与规则集的构建！

我们需要：

1. 补充新的规则，并去除重复和无用的规则
1. 添加去广告规则

期待您的PR！

## 声明

THE PROGRAM IS DISTRIBUTED IN THE HOPE THAT IT WILL BE USEFUL, BUT WITHOUT ANY WARRANTY. IT IS PROVIDED "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE. THE ENTIRE RISK AS TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU. SHOULD THE PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING, REPAIR OR CORRECTION.

IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW THE AUTHOR WILL BE LIABLE TO YOU FOR DAMAGES, INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER PROGRAMS), EVEN IF THE AUTHOR HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.
