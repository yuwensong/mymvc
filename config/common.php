<?php
$config['version'] = '1.0';
$config['name'] = 'RSF';
$config['company'] = 'RECO';

$config['source'] = 'http://source.corp.reco.cn';
$config['static'] = 'http://static.corp.reco.cn';
$config['file_url'] = 'http://file.corp.reco.cn';
$config['base_url'] = 'corp.reco.cn';
$config['checkcode'] = 'http://corp.reco.cn/ajax/checkcode/';
$config['cache'] = 1;
$config['cache_js'] = 1;
$config['cache_js_server'] = 'http://192.168.1.2:3000';

$config['redis'] = '192.168.1.2:6379';

$config['uploadimage'] = 'http://upload.corp.reco.cn/uploadimage';
$config['uploadape'] = 'http://upload.corp.reco.cn/uploadape';
$config['uploadlrc'] = 'http://upload.corp.reco.cn/uploadlrc';
$config['uploadurl'] = 'http://upload.corp.reco.cn/uploadurl';
$config['uploadmp3'] = 'http://upload.corp.reco.cn/uploadmp3';



$config['file_url'] = 'http://file.corp.reco.cn';
$config['download_url'] = 'http://file.corp.reco.cn/download/';
$config['cut_image'] = 'http://upload.corp.reco.cn/cutimage';

$config['hls_url'] = 'http://hls.corp.reco.cn'; 
$config['fm_url'] = 'http://fm.corp.reco.cn';


/* 域名配置开始 */
$config['domain'] = 'corp.reco.cn';
$config['region_cfg'][1] = array(
    'domain'=>'corp.reco.cn',
    'lang'=>'zh-s'
);
$config['region_cfg'][2] = array(
    'domain'=>'hk.corp.reco.cn',
    'lang'=>'zh-t'
);
$config['region_cfg'][3] = array(
    'domain'=>'tw.corp.reco.cn',
    'lang'=>'zh-t'
);
$config['sns_domain'] = 't.corp.reco.cn';
/* \域名配置结束 */





$config['sitemap_path'] = '/var/www/filse/';

$config['fm_domain'] = 'corp.reco.fm';
$config['fm_login_api'] = 'http://corp.reco.fm/ajax/login/';
$config['fm_logout_api'] = 'http://corp.reco.fm/ajax/login/?action=logout';

$config['third_auto_login_api'] = array(
    'fm_login_api'=>$config['fm_login_api']
);

$config['third_auto_logout_api'] = array(
    'fm_login_api'=>$config['fm_logout_api']
);


