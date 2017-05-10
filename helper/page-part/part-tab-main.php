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
                <?php require_once('helper/page-part/part-rule-domain.php'); ?>
                <h2>基于 HTTP 的规则</h2>
                <?php require_once('helper/page-part/part-rule-http.php'); ?>
                <h2>基于 IP 的规则</h2>
                <?php require_once('helper/page-part/part-rule-ip.php'); ?>
                <h2>其他规则</h2>
                <?php require_once('helper/page-part/part-rule-other.php'); ?>
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
