<?php
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
function read_rules($category, $rule_set, $rule_files) {
    $rules = "";
    // 路径过滤集
    $bad_list = [" ", "../", ";", ":"];
    foreach ($rule_files as $rule_file) {
        $filename = implode("/", array(
            dirname(__FILE__) ,
            "enhance",
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
            $file_data = file_get_contents($filename);
            // 合并
            $rules = $rules . "\n// " . $rule_file . "\n" . $file_data;
        }
        catch(Exception $e) {
        }
    }
    return $rules;
}
// 读文件
$data = file_get_contents("Surge.conf");
// 节点信息
if (count($conf->{'config'}->{'node'}) >= 2) {
    $data = preg_replace('/\[Proxy\][\s\S]+?\[Rule\]/', "\n" . implode("\n", $conf->{'config'}->{'node'}) . "\n", $data);
}
// 规则信息
foreach ($conf->{'config'}->{'category'} as $category) {
    foreach ($conf->{$category} as $rule_set => $rule_set_content) {
        $data = str_replace(strtoupper($category) . "_" . strtoupper($rule_set) . "_RULES_HERE", read_rules($category, $rule_set, $rule_set_content) , $data);
    }
}
// 输出
echo "#!MANAGED-CONFIG " . "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s://" : "://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "\n";
echo "// 更新时间： " . date("Y-m-d H:m:s", time()) . "\n";
echo $data;
echo "\n// Powered By jinyu121";
echo "\n// Made With Love";
