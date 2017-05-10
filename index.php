<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <title>Surge Customize</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.bootcss.com/bootstrap-switch/3.3.2/css/bootstrap3/bootstrap-switch.min.css" rel="stylesheet"/>
    <style>
    body{
        margin-bottom:50px;
    }
    </style>
</head>
<body>
    <div class="jumbotron">
        <div class="container">
            <h1>定制并下载 Surge 规则</h1>
            <p>
                通过自定义节点信息并按需挑选规则，定制一份属于你自己的 Surge 规则吧。
            </p>
        </div>
    </div>
    <div class="container">
        <ul id="main_tab" class="nav nav-tabs nav-justified" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">定制规则</a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">解析定制代码</a></li>
        </ul>
        <div class="row">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <div class="col-sm-12">
                        <form>
                            <div class="section">
                                <h1 class="page-header"><span class="glyphicon glyphicon-tasks"></span> 节点信息</h1>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea id="node_info" class="form-control" rows="5"></textarea>
                                            <span class="help-block">填入你的节点信息。包括<code>[Proxy]</code>和<code>[Proxy Group]</code>段。<a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#node_info_example_model">查看示例</a> <a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target="#node_info_tool_model">配置工具</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section">
                                <h1 class="page-header"><span class="glyphicon glyphicon-list-alt"></span> 规则选取</h1>
                                <h2>基于域名的规则</h2>
                                <h3>增强规则</h3>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-enhance-big_company"/> 大公司</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-enhance-bbs" advanced="advanced"/> BBS</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-enhance-blog" advanced="advanced"/> 博客</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-enhance-cdn"/> 公共CDN</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-enhance-design" advanced="advanced"/> 设计狮</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-enhance-developer" advanced="advanced"/> 程序猿</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-enhance-download" advanced="advanced"/> 下载站</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-enhance-education" advanced="advanced"/> 教育</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-enhance-government" advanced="advanced"/> 政府机构</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-enhance-image" advanced="advanced"/> 图床、图片分享</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-enhance-music" advanced="advanced"/> 音乐、播客</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-enhance-net_disk" advanced="advanced"/> 网盘、文件分享</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-enhance-news"/> 新闻</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-enhance-read_and_write" advanced="advanced"/> 阅读与写作</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-enhance-shopping" advanced="advanced"/> 购物</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-enhance-sns" advanced="advanced"/> 社交网络</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-enhance-tools" advanced="advanced"/> 工具</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-enhance-url" advanced="advanced"/> 链接服务</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-enhance-video" advanced="advanced"/> 视频分享</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-enhance-xxx" advanced="advanced"/> XXX</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-enhance-unknow" advanced="advanced"/> 其他</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox" data-toggle="tooltip" data-placement="bottom" title="某 List 中的黑名单网址">
                                            <label class="text-danger"><input type="checkbox" name="domain-enhance-gfwlist" advanced="advanced" data-on-color="danger" data-off-color="success"/> 激进规则</label>
                                        </div>
                                    </div>
                                </div>
                                <h3>去广告和隐私保护规则</h3>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-adblock-ad_company"/> 广告公司</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-adblock-analysis"/> 统计公司</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-adblock-shopping"/> 购物网站</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-adblock-sns"/> 社交网络</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-adblock-tool"/> 工具网站</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-adblock-video"/> 视频网站</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-adblock-aggressive_qq_qzone" advanced="advanced" data-off-color="success"/> 屏蔽 QQ 空间</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="domain-adblock-aggressive_qq_ipad_aikan" advanced="advanced" data-off-color="success"/> 屏蔽 QQ 爱看</label>
                                        </div>
                                    </div>
                                </div>
                                <h2>基于 HTTP 的规则</h2>
                                <h3>增强规则</h3>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="http-enhance-ua_apple" /> [UA] 🍎 专用</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="http-enhance-ua_china_apps" /> [UA] 国内APP</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="http-enhance-ua_apps" advanced="advanced"/> [UA] 常用APP</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="http-enhance-process_china_apps" advanced="advanced"/> [MAC] 国内APP</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="http-enhance-process_apps" advanced="advanced"/> [MAC] 常用APP</label>
                                        </div>
                                    </div>
                                </div>
                                <h3>去广告和隐私保护规则</h3>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="http-adblock-other" advanced="advanced"/> [URL] 其他</label>
                                        </div>
                                    </div>
                                </div>
                                <h2>基于 IP 的规则</h2>
                                <h3>增强规则</h3>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="ip-enhance-telegram" advanced="advanced"/> Telegram</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox" data-toggle="tooltip" data-placement="bottom" title="某 List 中的黑名单IP">
                                            <label class="text-danger"><input type="checkbox" name="ip-enhance-gfwlist" advanced="advanced" data-on-color="danger"  data-off-color="success"/> 激进规则</label>
                                        </div>
                                    </div>
                                </div>
                                <h3>去广告和隐私保护规则</h3>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="ip-adblock-china_mobile" advanced="advanced"/> 10086</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="ip-adblock-china_unicom" advanced="advanced"/> 10010</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="ip-adblock-china_telecom" advanced="advanced"/> 10000</label>
                                        </div>
                                    </div>
                                </div>
                                <h2>其他规则</h2>
                                <h3>Hosts</h3>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6">
                                        暂无
                                    </div>
                                </div>
                                <h3>URL重写</h3>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="other-rewrite-qq"/> QQ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="other-rewrite-jd"/> 京东跳转</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="checkbox">
                                            <label><input type="checkbox" advanced="advanced" data-off-color="success" name="other-rewrite-nopic"/> 全局无图省流量</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section">
                                <h1 class="page-header"><span class="glyphicon glyphicon-wrench"></span> 其他选项</h1>
                                <h3>规则托管</h3>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="config-managed" advanced="advanced" data-on-color="success" data-off-color="success"/> 生成托管的规则 <span class="text-danger">【 托管的规则可以自动更新，但是不可手工编辑 】</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section">
                                <h1 class="page-header"><span class="glyphicon glyphicon-download-alt"></span> 下载</h1>
                                <p class="lead">
                                    庆祝一下！你的定制版 Surge 规则即将大功告成。只要点击下面的按钮就可以下载了。
                                </p>
                                <button id="doit" class="btn btn-primary btn-block btn-lg">下载</button>
                                <p class="help-block">
                                    生成 Surge 规则后，您可能需要复制整个 URL ，并在 Surge 中选择 <code>Download Configuration from URL</code> 。
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="settings">
                    <div class="col-sm-12">
                        <div id="config-parse-result-success" class="alert alert-success" role="alert">
                            <h4><span class="glyphicon glyphicon-ok"></span> 成功</h4>请切换到左边“定制规则”继续定制！
                        </div>
                        <div id="config-parse-result-error" class="alert alert-danger" role="alert">
                            <h4><span class="glyphicon glyphicon-alert"></span> 有错误</h4>此配置代码有错误，放弃吧！
                        </div>
                        <form>
                            <div class="section">
                                <h1 class="page-header"><span class="glyphicon glyphicon-equalizer"></span> 定制代码</h1>
                                <p>定制代码是规则文件的第一行<code>#!MANAGED-CONFIG ..........</code></p>
                                <p>定制代码中记录了上一次定制的各种选项，可以简化您的定制过程。如果您有定制代码，请在下方输入。</p>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea id="customize_code" class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button id="parseit" class="btn btn-primary btn-block btn-lg">解析定制代码</button>
                                <h1 class="page-header"><span class="glyphicon glyphicon-console"></span> JSON 文件</h1>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea id="customize_code_json" class="form-control" rows="10"></textarea>
                                            <span class="help-block">此 JSON 文件是定制代码的明文形式。</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 模态框 -->
    <div class="modal fade" id="node_info_example_model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">节点配置示例</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4>完整配置</h4>
                            <textarea class="form-control" rows="5">
[Proxy]
💊 Direct = direct
🌞 1 = custom,1.2.3.4,443,aes-256-cfb,password,https://github.com/jinyu121/SurgeRule/raw/master/helper/SSEncrypt.module, ota=true
🌞 2 = custom,1.2.3.4,443,aes-256-cfb,password,https://github.com/jinyu121/SurgeRule/raw/master/helper/SSEncrypt.module, ota=true
🌚 1 = custom,1.2.3.4,443,aes-256-cfb,password,https://github.com/jinyu121/SurgeRule/raw/master/helper/SSEncrypt.module, ota=true
🌚 2 = custom,1.2.3.4,443,aes-256-cfb,password,https://github.com/jinyu121/SurgeRule/raw/master/helper/SSEncrypt.module, ota=true
[Proxy Group]
🚀 Proxy = select, 💊 Direct, 🌞 Auto, 🌚 Auto, ⚖ Select
🌐 Proxy = select, 💊 Direct, 🚀 Proxy
🇨🇳 Proxy = select, 💊 Direct, 🚀 Proxy
🍎 Proxy = select, 💊 Direct, 🚀 Proxy
🌞 Auto = url-test, 🌞 1, 🌞 2, url = http://www.gstatic.com/generate_204
🌚 Auto = url-test, 🌚 1, 🌚 2, url = http://www.gstatic.com/generate_204
⚖ Select = select, 🌞 1, 🌞 2, 🌚 1, 🌚 2
                            </textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h4>精简配置</h4>
                            <textarea class="form-control" rows="5">
[Proxy]
💊 Direct = direct
🌞 Line = custom,1.2.3.4,443,aes-256-cfb,password,https://github.com/jinyu121/SurgeRule/raw/master/helper/SSEncrypt.module, ota=true
[Proxy Group]
🚀 Proxy = select, 🌞 Line
🌐 Proxy = select, 🌞 Line
🇨🇳 Proxy = select, 🌞 Line
🍎 Proxy = select, 🌞 Line
                            </textarea>
                        </div>
                    </div>
                    <h4>配置说明</h4>
                    <div class="row">
                        <div class="col-sm-12">
                            <p>
                                在<code>[Proxy]</code>或<code>[Proxy Group]</code>中，<b>必须</b>保留如下 Proxy 或 Group：
                            </p>
                            <ul>
                                <li>直连规则： <code>💊 Direct = direct</code></li>
                                <li>一般代理： <code>🚀 Proxy</code></li>
                                <li>兜底全局代理： <code>🌐 Proxy</code></li>
                                <li>国内网站访问规则： <code>🇨🇳 Proxy</code></li>
                                <li>苹果服务专用规则： <code>🍎 Proxy</code></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">关闭</button>
                    <p class="pull-left hidden-xs">
                        更详的细配置说明，请参阅官方英文版<a href="https://www.gitbook.com/book/blankwonder/surge-manual" target="_blank">《 Surge 使用手册 》</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="node_info_tool_model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">节点配置工具</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4>节点信息</h4>
                            <textarea id="node_info_tool_input" class="form-control" rows="5">
太阳分组
1.2.3.4,443,aes-256-cfb,password,https://example.com/SSEncrypt.module, ota=true
2.2.3.4,443,aes-256-cfb,password,https://example.com/SSEncrypt.module, ota=true
月亮分组
3.2.3.4,443,aes-256-cfb,password,https://example.com/SSEncrypt.module, ota=true
4.2.3.4,443,aes-256-cfb,password,https://example.com/SSEncrypt.module, ota=true
星星分组
5.2.3.4,443,aes-256-cfb,password,https://example.com/SSEncrypt.module, ota=true
6.2.3.4,443,aes-256-cfb,password,https://example.com/SSEncrypt.module, ota=true
太阳分组
7.2.3.4,443,aes-256-cfb,password,https://example.com/SSEncrypt.module, ota=true
                            </textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h4>转换后结果</h4>
                            <textarea id="node_info_tool_output" class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="node_info_tool_doit" type="button" class="btn btn-success">转换</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">关闭</button>
                    <div class="checkbox pull-left">
                        <label>
                            <input id="node_info_tool_autofill" type="checkbox"> 填入配置
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="https://github.com/jinyu121/SurgeRule">
        <img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png">
    </a>
    <script src="https://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery-json/2.6.0/jquery.json.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap-switch/3.3.2/js/bootstrap-switch.min.js"></script>
    <script src="helper/js/base64.min.js"></script>
    <script src="helper/js/main.js"></script>
</body>
</html>
