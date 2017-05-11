$(function() {
    // TextArea 多行文本转字符串数组
    function textarea_to_array(item) {
        return $(item).val().split("\n");
    }
    // TextArea 字符串数组转多行文本
    function array_to_textarea(item) {
        return item.join("\n");
    }
    // 规则生成和下载
    function make_rule() {
        cfg = {
            "config": {
                "managed": true,
                "node": [],
                "category": [
                    "http",
                    "domain",
                    "ip",
                    "other"
                ]
            },
            "domain": {
                "enhance": [],
                "adblock": []
            },
            "http": {
                "enhance": [],
                "adblock": []
            },
            "ip": {
                "enhance": [],
                "adblock": []
            },
            "other": {
                "hosts": [],
                "rewrite": []
            }
        }
        // 读取节点信息
        cfg.config.node = textarea_to_array("#node_info");
        // 读取配置信息
        cfg.config.category.forEach(function(category) {
            Object.keys(cfg[category]).forEach(function(rule_set) {
                obj = $(":checkbox:checked[name ^= " + category + "-" + rule_set + "]");
                obj.each(function(ith) {
                    name = obj[ith].name.replace(category + "-" + rule_set + "-", "");
                    cfg[category][rule_set].push(name);
                })
            });
        });
        // 读取其他信息
        cfg.config.managed = $(":checkbox[name = 'config-managed']").prop("checked");
        // 编码
        cfg_b64 = Base64.encode($.toJSON(cfg));
        $("#customize_code").val(cfg_b64);
        $("#customize_code_json").val(JSON.stringify(cfg, null, 4));
        // 下载
        var download_url = $SURGE_CUSTOMIZE_CONFIG["page_base_url"] + "Customize.php/?conf=" + cfg_b64;
        // 使用 URL Scheme 直接导入 Surge
        window.location = "surge:///install-config?url=" + encodeURIComponent(download_url);
        // 打开浏览器显示生成的内容
        setTimeout(function() {
            open(download_url);
        }, 500);
        return false;
    };
    // 规则解析
    function parse_rule() {
        // 读取
        cfg_b64 = $("#customize_code").val();
        str_conf_pos = cfg_b64.indexOf("?conf=");
        if (str_conf_pos != -1) {
            cfg_b64 = cfg_b64.substring(str_conf_pos + 6);
        }
        // 解析
        try {
            // 解码
            cfg = $.parseJSON(Base64.decode(cfg_b64));
            // 解析节点信息
            $("#node_info").val(array_to_textarea(cfg.config.node));
            // 解析规则选取
            // 初始化：全部不选中
            $(":checkbox").bootstrapSwitch("destroy");
            $(":checkbox").prop("checked", false);
            cfg.config.category.forEach(function(category) {
                Object.keys(cfg[category]).forEach(function(rule_set) {
                    cfg[category][rule_set].forEach(function(rule_name) {
                        checkbox_name = category + "-" + rule_set + "-" + rule_name;
                        $(":checkbox[name = '" + checkbox_name + "']").prop("checked", true);
                    });
                });
            });
            // 其他配置
            $(":checkbox[name = 'config-managed']").prop("checked", cfg.config.managed);
            // 显示逻辑
            $(":checkbox").bootstrapSwitch({
                size: 'mini'
            });
            $("#customize_code_json").val(JSON.stringify(cfg, null, 4));
            $("#config-parse-result-success").slideDown().slideUp(1500);
            $("#main_tab a[href='#home']").tab('show');
        } catch (e) {
            $("#config-parse-result-error").slideDown().slideUp(2000);
        }
        return false;
    }

    function convert_node() {
        // 读取
        var txt_input = textarea_to_array("#node_info_tool_input");
        // 定义
        var txt_output = new Array();
        var group = {};
        var last_group_name = "DEFAULT_GROUP";
        // 对于每一行
        txt_input.forEach(function(line) {
            var line_split = line.split(',');
            if (line_split.length <= 2) { // 如果是标题行
                var group_name = line_split[0].trim();
                if (group_name != "") {
                    if (group_name != last_group_name) {
                        last_group_name = group_name;
                    }
                }
            } else { // 否则是配置行
                if (!(last_group_name in group)) {
                    group[last_group_name] = [];
                }
                group[last_group_name].push(line);
            }
        });
        // 转换成我们想要的格式
        var result_proxy = [
            "[Proxy]",
            "💊 Direct = direct"
        ];
        var result_group = [
            "[Proxy Group]"
        ];
        var temp_group = {};
        // 对于每一个分组
        for (var key in group) {
            var val = group[key];
            var this_group = [];
            temp_group[key] = []
            if (1 == val.length) {
                var line_name = key;
                temp_group[key].push(line_name)
                this_group.push(line_name);
                result_proxy.push(line_name + " = custom," + val[0]);
            } else {
                for (var i = 0; i < val.length; i++) {
                    var line_name = key + " " + (i + 1);
                    temp_group[key].push(line_name)
                    this_group.push(line_name);
                    result_proxy.push(line_name + " = custom," + val[i]);
                }
            }
        }
        // 全自动选择分组
        var line = "";
        line = "🚀 Proxy = select, 💊 Direct";
        for (var key in temp_group) {
            line = line + ", " + key + " Auto";
        }
        line = line + ", ⚖ Select"
        result_group.push(line);
        // 几个保留分组
        result_group.push("🌐 Proxy = select, 💊 Direct, 🚀 Proxy");
        result_group.push("🇨🇳 Proxy = select, 💊 Direct, 🚀 Proxy");
        result_group.push("🍎 Proxy = select, 💊 Direct, 🚀 Proxy");
        // 手动选择分组
        for (var key in temp_group) {
            line = key + " Auto = url-test," + temp_group[key].join(",") + ", url = http://www.gstatic.com/generate_204";
            result_group.push(line);
        }
        // 纯手动选择分组
        line = "⚖ Select = select";
        for (var key in temp_group) {
            line = line + "," + temp_group[key].join(",");
        }
        result_group.push(line);
        var result = array_to_textarea(result_proxy) + "\n\n" + array_to_textarea(result_group);
        $("#node_info_tool_output").val(result);
        if ($("#node_info_tool_autofill").is(":checked")) {
            $("#node_info").val(result);
        }
    }
    // 初始化：Tooltip
    $('[data-toggle="tooltip"]').tooltip();
    // 初始化：全部选中
    $(":checkbox").prop("checked", true);
    // 初始化：排除激进规则
    $(":checkbox[advanced]").prop("checked", false);
    $("#config-parse-result-success").hide();
    $("#config-parse-result-error").hide();
    // 显示
    $(":checkbox").bootstrapSwitch({
        size: 'mini'
    });
    // 提交事件
    $("#doit").click(make_rule);
    // 提交事件
    $("#parseit").click(parse_rule);
    // 节点格式转换
    $("#node_info_tool_doit").click(convert_node);
});
