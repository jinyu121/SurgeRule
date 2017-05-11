<h3>增强规则</h3>
<div class="row">
    <?php
        $data = [
            ['telegram','Telegram','',false,'','',''],
            ['gfwlist','激进规则','某 List 中的黑名单IP',false,'danger','success','danger']
        ];
        print_data('ip-enhance', $data);
    ?>
</div>
<h3>去广告和隐私保护规则</h3>
<div class="row">
    <?php
        $data = [
            ['china_telecom','10000','',false,'','',''],
            ['china_unicom','10010','',false,'','',''],
            ['china_mobile','10086','',false,'','','']
        ];
        print_data('ip-adblock', $data);
    ?>
</div>
