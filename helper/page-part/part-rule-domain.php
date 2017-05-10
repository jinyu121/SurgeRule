<h3>增强规则</h3>
<div class="row">
    <?php
        $data = [
            ['big_company','常见大公司','',false,'','',''],
            ['cdn','公共CDN','',false,'','',''],
            ['news','新闻','',false,'','',''],
            ['sns','社交网络','',false,'','',''],
            ['net_disk','网盘、文件分享','',false,'','',''],
            ['bbs','BBS','',false,'','',''],
            ['blog','博客','',false,'','',''],
            ['design','设计狮','',false,'','',''],
            ['developer','程序猿','',false,'','',''],
            ['download','下载站','',false,'','',''],
            ['education','教育','',false,'','',''],
            ['government','政府机构','',false,'','',''],
            ['image','图床、图片分享','',false,'','',''],
            ['music','音乐、播客','',false,'','',''],
            ['read_and_write','阅读与写作','',false,'','',''],
            ['shopping','购物','',false,'','',''],
            ['tools','工具','',false,'','',''],
            ['url','链接服务','',false,'','',''],
            ['video','视频分享','',false,'','',''],
            ['xxx','XXX','',false,'','',''],
            ['unknow','其他','杂项网站',false,'','',''],
            ['gfwlist','激进规则','某 List 中的黑名单网址',false,'danger','success','danger']
        ];
        print_data('domain-enhance', $data);
    ?>
</div>
<h3>去广告和隐私保护规则</h3>
<div class="row">
    <?php
        $data = [
            ['ad_company','广告公司','',false,'','',''],
            ['analysis','统计公司','',false,'','',''],
            ['shopping','购物网站','',false,'','',''],
            ['sns','社交网络','',false,'','',''],
            ['tool','工具网站','',false,'','',''],
            ['video','视频网站','',false,'','',''],
            ['aggressive_qq_qzone','屏蔽 QQ 空间','',false,'','success',''],
            ['aggressive_qq_ipad_aikan','屏蔽 QQ 爱看','',false,'','success','']
        ];
        print_data('domain-adblock', $data);
    ?>
</div>
