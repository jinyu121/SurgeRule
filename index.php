<?php require_once('helper/page-part/functions.php'); ?>
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

    <!-- 主要内容 -->
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
                <!-- 定制页面 -->
                <?php require_once('helper/page-part/part-tab-main.php'); ?>
                <!-- 解析定制代码 -->
                <?php require_once('helper/page-part/part-tab-config.php'); ?>
            </div>
        </div>
    </div>

    <!-- 模态框 -->
    <?php require_once('helper/page-part/modal-example.php'); ?>
    <?php require_once('helper/page-part/modal-convert-tool.php'); ?>

    <!-- Footer -->
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
