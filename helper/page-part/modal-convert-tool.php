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
SunGroup
1.2.3.4,443,aes-256-cfb,password,https://example.com/SSEncrypt.module
2.2.3.4,443,aes-256-cfb,password,https://example.com/SSEncrypt.module
MoonGroup
3.2.3.4,443,aes-256-cfb,password,https://example.com/SSEncrypt.module
4.2.3.4,443,aes-256-cfb,password,https://example.com/SSEncrypt.module
StarGroup
5.2.3.4,443,aes-256-cfb,password,https://example.com/SSEncrypt.module
6.2.3.4,443,aes-256-cfb,password,https://example.com/SSEncrypt.module
SunGroup
7.2.3.4,443,aes-256-cfb,password,https://example.com/SSEncrypt.module
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
