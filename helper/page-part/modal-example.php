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
