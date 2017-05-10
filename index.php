<?php require_once('helper/functions.php')?>
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
    <script>
    var $SURGE_CUSTOMIZE_CONFIG = {};
    $SURGE_CUSTOMIZE_CONFIG["page_base_url"] = "<?php echo get_page_base_url();?>";
    </script>
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
                                <?php require_once('helper/page-part/part-rule-domain.php')?>
                                <h2>基于 HTTP 的规则</h2>
                                <?php require_once('helper/page-part/part-rule-http.php')?>
                                <h2>基于 IP 的规则</h2>
                                <?php require_once('helper/page-part/part-rule-ip.php')?>
                                <h2>其他规则</h2>
                                <?php require_once('helper/page-part/part-rule-other.php')?>
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
    <?php require_once('helper/page-part/modal-example.php') ?>
    <?php require_once('helper/page-part/modal-convert-tool.php') ?>

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
