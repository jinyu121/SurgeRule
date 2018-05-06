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
                <div id="rule-domain-enhance" class="row"></div>
                <h3>去广告和隐私保护规则</h3>
                <div id="rule-domain-adblock" class="row"></div>

                <h2>基于 HTTP 的规则</h2>
                <h3>增强规则</h3>
                <div id="rule-http-enhance" class="row"></div>
                <h3>去广告和隐私保护规则</h3>
                <div id="rule-http-adblock" class="row"></div>

                <h2>基于 IP 的规则</h2>
                <h3>增强规则</h3>
                <div id="rule-ip-enhance" class="row"></div>
                <h3>去广告和隐私保护规则</h3>
                <div id="rule-ip-adblock" class="row"></div>

                <h2>其他规则</h2>
                <h3>URL重写</h3>
                <div id="rule-other-rewrite" class="row"></div>
                <h3>互联网合作卡</h3>
                <div id="rule-other-enhance" class="row"></div>

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
                    庆祝一下！你的定制版 Surge 规则即将大功告成。只要点击下面的按钮就可以导入到 Surge 了。
                </p>
                <button id="doit" class="btn btn-primary btn-block btn-lg">导入到 Surge</button>
                <p class="help-block">
                    如果没有自动导入，您可能需要复制整个 URL ，并在 Surge 中选择 <code>Download Configuration from URL</code> 。
                </p>
            </div>
        </form>
    </div>
</div>

<!-- 数据 -->
<script>
var selection_data={
    'domain':{
        'enhance':[
            {'name':'big_company','label':'常见大公司'},
            {'name':'cdn','label':'公共CDN'},
            {'name':'news','label':'新闻'},
            {'name':'sns','label':'社交网络'},
            {'name':'bbs','label':'BBS','advanced':true},
            {'name':'blog','label':'博客','advanced':true},
            {'name':'design','label':'设计狮','advanced':true},
            {'name':'developer','label':'程序猿','advanced':true},
            {'name':'download','label':'下载站','advanced':true},
            {'name':'education','label':'教育','advanced':true},
            {'name':'government','label':'政府机构','advanced':true},
            {'name':'image','label':'图床、图片分享','advanced':true},
            {'name':'music','label':'音乐、播客','advanced':true},
            {'name':'net_disk','label':'网盘、文件分享','advanced':true},
            {'name':'read_and_write','label':'阅读与写作','advanced':true},
            {'name':'shopping','label':'购物','advanced':true},
            {'name':'tools','label':'工具','advanced':true},
            {'name':'url','label':'链接服务','advanced':true},
            {'name':'video','label':'视频分享','advanced':true},
            {'name':'xxx','label':'XXX','advanced':true},
            {'name':'unknow','label':'其他',hover:'杂项网站','advanced':true},
            {'name':'gfwlist','label':'激进规则',hover:'某 List 中的黑名单网址','advanced':true,'style_on':'danger','style_off':'success','style_font':'success'}
        ],
        'adblock':[
            {'name':'ad_company','label':'广告公司','advanced':true},
            {'name':'analysis','label':'统计公司','advanced':true},
            {'name':'shopping','label':'购物网站','advanced':true},
            {'name':'sns','label':'社交网络','advanced':true},
            {'name':'tool','label':'工具网站','advanced':true},
            {'name':'video','label':'视频网站','advanced':true},
            {'name':'aggressive_qq_qzone','label':'屏蔽 QQ 空间','advanced':true,'style_off':'success'},
            {'name':'aggressive_qq_ipad_aikan','label':'屏蔽 QQ 爱看','advanced':true,'style_off':'success'}
        ]
    },
    'http':{
        'enhance':[
            {'name':'ua_apple','label':'[UA] 🍎 专用','advanced':true},
            {'name':'ua_china_apps','label':'[UA] 国内APP','advanced':true},
            {'name':'ua_apps','label':'[UA] 常用APP','advanced':true},
            {'name':'process_china_apps','label':'[MAC] 国内APP','advanced':true},
            {'name':'process_apps','label':'[MAC] 常用APP','advanced':true}
        ],
        'adblock':[
            {'name':'other','label':'[URL] 其他','advanced':true}
        ]
    },
    'ip':{
        'enhance':[
            {'name':'telegram','label':'Telegram','advanced':true},
            {'name':'gfwlist','label':'激进规则',hover:'某 List 中的黑名单IP','advanced':true,'style_on':'danger','style_off':'success','style_font':'success'},
        ],
        'adblock':[
            {'name':'china_telecom','label':'10000','advanced':true},
            {'name':'china_unicom','label':'10010','advanced':true},
            {'name':'china_mobile','label':'10086','advanced':true}
        ]
    },
    'other':{
        'rewrite':[
            {'name':'qq','label':'QQ 跳转','advanced':true},
            {'name':'jd','label':'京东跳转','advanced':true},
            {'name':'nopic','label':'全局无图省流量','advanced':true,'style_off':'success'}
        ],
        'enhance':[
            {'name':'tencent','label':'腾讯系','advanced':true}
        ]
    }
}
</script>
