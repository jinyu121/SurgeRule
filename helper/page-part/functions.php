<?php
function print_info($name, $label, $hover, $is_advance, $on_style, $off_style, $font_style)
{
    $html_template = '<div class="col-sm-3 col-xs-6">
        <div class="checkbox" %s>
            <label %s><input type="checkbox" name="%s" %s %s %s/> %s</label>
        </div>
    </div>';
    echo(sprintf($html_template,
                (empty($hover)?'':'data-toggle="tooltip" data-placement="bottom" title="'.$hover.'"'),
                (empty($font_style)?'':'class="text-'.$font_style.'"'),
                $name,
                (empty($is_advance)?'advanced="advanced"':''),
                (empty($on_style)?'':'data-on-color="'.$on_style.'"'),
                (empty($off_style)?'':'data-off-color="'.$off_style.'"'),
                $label));
}
function print_data($pre, $data)
{
    foreach ($data as $value) {
        print_info($pre.$value[0], $value[1], $value[2], $value[3], $value[4], $value[5], $value[6]);
    }
}
function is_https()
{
    return ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443);
}

function get_page_base_url()
{
    $url='http'.(is_https()?'s':'').'://'.$_SERVER['SERVER_NAME'].$_SERVER["SCRIPT_NAME"];
    return dirname($url).'/';
}
