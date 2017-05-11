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
