<?php
$urls = [
    'http://caller.hbosw.com/news/1.html',
    'http://caller.hbosw.com/news/2.html',
    'http://caller.hbosw.com/news/3.html',
    'http://caller.hbosw.com/news/4.html',
    'http://caller.hbosw.com/news/5.html',
    'http://caller.hbosw.com/news/6.html',
    'http://caller.hbosw.com/news/7.html',
    'http://caller.hbosw.com/news/8.html',
    'http://caller.hbosw.com/news/9.html',
    'http://caller.hbosw.com/news/10.html',
    'http://caller.hbosw.com/news/11.html',
    'http://caller.hbosw.com/news/12.html',
    'http://caller.hbosw.com/news/13.html',
    'http://caller.hbosw.com/news/14.html',
    'http://caller.hbosw.com/news/15.html',
    'http://caller.hbosw.com/news/16.html',
    'http://caller.hbosw.com/news/17.html',
    'http://caller.hbosw.com/news/18.html',
    'http://caller.hbosw.com/news/19.html',
    'http://caller.hbosw.com/news/20.html',
    'http://caller.hbosw.com/news/21.html',
    'http://caller.hbosw.com/news/22.html',
    'http://caller.hbosw.com/news/23.html',
    'http://caller.hbosw.com/news/24.html',
    'http://caller.hbosw.com/news/25.html',
    'http://caller.hbosw.com/news/26.html',
    'http://caller.hbosw.com/news/27.html',
    'http://caller.hbosw.com/news/28.html',
    'http://caller.hbosw.com/news/29.html',
    'http://caller.hbosw.com/news/30.html',
    'http://caller.hbosw.com/news/31.html',
    'http://caller.hbosw.com/news/32.html',
    'http://caller.hbosw.com/news/33.html',
    'http://caller.hbosw.com/news/34.html',
    'http://caller.hbosw.com/news/35.html',
    'http://caller.hbosw.com/news/36.html',
    'http://caller.hbosw.com/news/37.html',
    'http://caller.hbosw.com/news/38.html',
    'http://caller.hbosw.com/news/39.html',
    'http://caller.hbosw.com/news/40.html',
    'http://caller.hbosw.com/news/41.html',
    'http://caller.hbosw.com/news/42.html',
    'http://caller.hbosw.com/news/43.html',
    'http://caller.hbosw.com/news/44.html',
    'http://caller.hbosw.com/news/45.html',
    'http://caller.hbosw.com/news/46.html',
    'http://caller.hbosw.com/news/47.html',
    'http://caller.hbosw.com/news/48.html',
    'http://caller.hbosw.com/news/49.html',
    'http://caller.hbosw.com/news/50.html',
    'http://caller.hbosw.com/news/51.html',
    'http://caller.hbosw.com/news/52.html',
    'http://caller.hbosw.com/news/53.html',
    'http://caller.hbosw.com/news/54.html',
    'http://caller.hbosw.com/news/55.html',
    'http://caller.hbosw.com/news/56.html',
    'http://caller.hbosw.com/news/57.html',
];
$api = 'http://data.zz.baidu.com/urls?site=caller.hbosw.com&token=lG8LxnzYDCd0Dd3m';
$ch = curl_init();
$options = [
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
];
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;