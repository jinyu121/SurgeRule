<?php
function print_info($name, $short_name, $is_advance, $on_style, $off_style){

}

function is_https() {
    return ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443);
}

function get_page_base_url(){
    $url='http'.(is_https()?'s':'').'://'.$_SERVER['SERVER_NAME'].$_SERVER["SCRIPT_NAME"];
    return dirname($url).'/';
}
