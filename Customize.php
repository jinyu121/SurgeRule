<?php
require_once('helper/page-part/functions.php');
// 设置Header
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=Surge_Customize.conf');
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate');
// 获取并解码参数
$conf_raw = $_GET["conf"];
$conf = str_replace(' ', '+', $conf_raw);
$conf = base64_decode($conf);
$conf = json_decode($conf);

// 读取文件
function read_file($filename){
    $data = file_get_contents($filename);
    return trim(base64_decode($data)) . "\n";
}

// 读取规则
function read_rules($category, $rule_set, $rule_files) {
    $rules = "";
    // 路径过滤集
    $bad_list = [" ", "../", ";", ":"];
    foreach ($rule_files as $rule_file) {
        $filename = implode("/", array(
            dirname(__FILE__) ,
            "extensions",
            $category,
            $rule_set,
            $rule_file
        )) . ".conf";
        try {
            // 路径检查
            foreach ($bad_list as $word) {
                if (strpos($filename, $word) !== false) {
                    throw new Exception("Path can not contain '" . $word . "'.");
                }
            }
            // 读取文件
            $file_data = read_file($filename);
            // 合并
            $rules = $rules . "// " . ucfirst($rule_file) . "\n" . $file_data;
        }
        catch(Exception $e) {
        }
    }
    return "\n" . $rules;
}

// 基础规则
$data = read_file("extensions/Base.conf");
// 节点信息
if (count($conf->{'config'}->{'node'}) >= 2) {
    $data = preg_replace('/\[Proxy\][\s\S]+?\[Rule\]/',
                          trim(implode("\n", $conf->{'config'}->{'node'})) . "\n[Rule]",
                          $data);
}
// 规则信息
foreach ($conf->{'config'}->{'category'} as $category) {
    foreach ($conf->{$category} as $rule_set => $rule_set_content) {
        $data = str_replace(strtoupper($category) . "_" . strtoupper($rule_set) . "_RULES_HERE",
                            read_rules($category, $rule_set, $rule_set_content) ,
                            $data);
    }
}
// 输出
if ($conf->{'config'}->{'managed'}){
    echo "#!MANAGED-CONFIG " . get_page_base_url() . $_SERVER['REQUEST_URI'] . "\n";
}
echo "// 更新时间： " . date("Y-m-d H:m:s", time()) . "\n";
echo $data;
echo "\n// Made With Love";
