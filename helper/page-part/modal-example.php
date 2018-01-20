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
Direct = direct
Sun1 = custom,1.2.3.4,443,aes-256-cfb,password,https://github.com/jinyu121/SurgeRule/raw/master/helper/SSEncrypt.module, ota=true
Sun2 = custom,1.2.3.4,443,aes-256-cfb,password,https://github.com/jinyu121/SurgeRule/raw/master/helper/SSEncrypt.module, ota=true
Moon1 = custom,1.2.3.4,443,aes-256-cfb,password,https://github.com/jinyu121/SurgeRule/raw/master/helper/SSEncrypt.module, ota=true
Moon2 = custom,1.2.3.4,443,aes-256-cfb,password,https://github.com/jinyu121/SurgeRule/raw/master/helper/SSEncrypt.module, ota=true
[Proxy Group]
AutoProxy = select, Direct, SunAuto, MoonAuto, ⚖ Select
AppleProxy = select, Direct, AutoProxy
CNProxy = select, Direct, AutoProxy
AppleProxy = select, Direct, AutoProxy
SunAuto = url-test, Sun1, Sun2, url = http://www.gstatic.com/generate_204
MoonAuto = url-test, Moon1, Moon2, url = http://www.gstatic.com/generate_204
⚖ Select = select, Sun1, Sun2, Moon1, Moon2
                        </textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h4>精简配置</h4>
                        <textarea class="form-control" rows="5">
[Proxy]
Direct = direct
SunLine = custom,1.2.3.4,443,aes-256-cfb,password,https://github.com/jinyu121/SurgeRule/raw/master/helper/SSEncrypt.module, ota=true
[Proxy Group]
AutoProxy = select, SunLine
AppleProxy = select, SunLine
CNProxy = select, SunLine
AppleProxy = select, SunLine
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
                            <li>直连规则： <code>Direct = direct</code></li>
                            <li>一般代理： <code>AutoProxy</code></li>
                            <li>兜底全局代理： <code>AppleProxy</code></li>
                            <li>国内网站访问规则： <code>CNProxy</code></li>
                            <li>苹果服务专用规则： <code>AppleProxy</code></li>
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
