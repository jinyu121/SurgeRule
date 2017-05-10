<h3>增强规则</h3>
<div class="row">
    <?php
        $data = [
            ['ua_apple','[UA] 🍎 专用','',false,'','',''],
            ['ua_china_apps','[UA] 国内APP','',false,'','',''],
            ['ua_apps','[UA] 常用APP','',false,'','',''],
            ['process_china_apps','[MAC] 国内APP','',false,'','',''],
            ['process_apps','[MAC] 常用APP','',false,'','','']
        ];
        print_data('http-enhance',$data);
    ?>
</div>
<h3>去广告和隐私保护规则</h3>
<div class="row">
    <?php
        $data = [
            ['other','[URL] 其他','',false,'','','']
        ];
        print_data('http-adblock',$data);
    ?>
</div>
