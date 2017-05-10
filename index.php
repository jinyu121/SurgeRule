<?php require_once('helper/page-part/functions.php'); ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <?php require_once('helper/page-part/part-header.php'); ?>
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
    <?php require_once('helper/page-part/part-footer.php'); ?>
</body>
</html>
