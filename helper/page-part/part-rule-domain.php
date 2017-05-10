<h3>增强规则</h3>
<div class="row">
    <?php
        $data = [
            ['big_company','常见大公司','',false,'','',''],
            ['cdn','公共CDN','',false,'','',''],
            ['news','新闻','',false,'','',''],
            ['sns','社交网络','',false,'','',''],
            ['net_disk','网盘、文件分享','',false,'','',''],
            ['bbs','BBS','',true,'','',''],
            ['blog','博客','',true,'','',''],
            ['design','设计狮','',true,'','',''],
            ['developer','程序猿','',true,'','',''],
            ['download','下载站','',true,'','',''],
            ['education','教育','',true,'','',''],
            ['government','政府机构','',true,'','',''],
            ['image','图床、图片分享','',true,'','',''],
            ['music','音乐、播客','',true,'','',''],
            ['read_and_write','阅读与写作','',true,'','',''],
            ['shopping','购物','',true,'','',''],
            ['tools','工具','',true,'','',''],
            ['url','链接服务','',true,'','',''],
            ['video','视频分享','',true,'','',''],
            ['xxx','XXX','',true,'','',''],
            ['unknow','其他','杂项网站',true,'','',''],
            ['gfwlist','激进规则','某 List 中的黑名单网址',true,'danger','success','danger']
        ];
        print_data('domain-enhance',$data);
    ?>
</div>
<h3>去广告和隐私保护规则</h3>
<div class="row">
    <?php
        $data = [
            ['ad_company','广告公司','',true,'','',''],
            ['analysis','统计公司','',true,'','',''],
            ['shopping','购物网站','',true,'','',''],
            ['sns','社交网络','',true,'','',''],
            ['tool','工具网站','',true,'','',''],
            ['video','视频网站','',true,'','',''],
            ['aggressive_qq_qzone','屏蔽 QQ 空间','',true,'','success',''],
            ['aggressive_qq_ipad_aikan','屏蔽 QQ 爱看','',true,'','success','']
        ];
        print_data('domain-adblock',$data);
    ?>
</div>
