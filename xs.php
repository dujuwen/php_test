<?php

function getContent($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    return curl_exec($ch);
}

$url = 'http://www.qb5200.tw/xiaoshuo/30/30768/15309917.html';
if (isset($_GET['u'])) {
    $url = 'http://www.qb5200.tw/' . $_GET['u'];
}

$re = mb_convert_encoding(getContent($url), 'UTF-8', 'GBK');
preg_match_all('#<title>.*title>#', $re, $ms1);
preg_match_all('#<div id="content" class="showtxt">.*div>#', $re, $ms);
preg_match_all('#xiaoshuo/.*\.html.*下一章#', $re, $ms2);
if (count($ms) > 0) {
    $data = '';
    if (count($ms1)) {
        $data = $ms1[0][0] ?? '';
    }
    $data .= <<<EOF
<style>
    div {
        font-size:30px;
    }
</style>
EOF;

    if (is_array($ms[0])) {
        $data .= array_pop($ms[0]);
    } else {
        $data .= $ms[0];
    }

    $next = '';
    if (count($ms2) > 0) {
        if (is_array($ms2[0])) {
            $next = array_pop($ms2[0]);
            $next = str_replace('">下一章', '', $next);
            $next = '<a href="?u='. $next .'" style="margin-left:30px;">下一章</a>';
        }
    }
    echo $data . $next;
} else {
    echo '没有内容!';
}