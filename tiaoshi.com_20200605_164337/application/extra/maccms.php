<?php
return array (
  'db' => 
  array (
    'type' => 'mysql',
    'path' => '',
    'server' => '127.0.0.1',
    'port' => '3306',
    'name' => 'maccms8',
    'user' => 'root',
    'pass' => 'root',
    'tablepre' => 'mac_',
    'backup_path' => './application/data/backup/database/',
    'part_size' => 20971520,
    'compress' => 1,
    'compress_level' => 4,
  ),
  'site' => 
  array (
    'site_name' => '调试版',
    'site_url' => 'http://163.44.167.135:7788',
    'site_wapurl' => '/template/RX03/',
    'site_keywords' => '蜜色-绅士与女神常访问',
    'site_description' => '蜜色-绅士与女神常访问',
    'site_icp' => '',
    'site_qq' => '123456',
    'site_email' => '123456@test.cn',
    'install_dir' => '/',
    'site_logo' => 'static/images/logo.jpg',
    'site_waplogo' => '/template/RX03/html/style/images/favicon.png',
    'template_dir' => 'RX03',
    'html_dir' => 'new1685',
    'mob_status' => '0',
    'mob_template_dir' => 'RX03',
    'mob_html_dir' => 'new1685',
    'site_tj' => '',
    'site_status' => '1',
    'site_close_tip' => '站点暂时关闭，请稍后访问',
    'ads_dir' => 'ads',
    'mob_ads_dir' => 'ads',
  ),
  'app' => 
  array (
    'pathinfo_depr' => '/',
    'suffix' => 'html',
    'popedom_filter' => '0',
    'cache_type' => 'file',
    'cache_host' => '127.0.0.1',
    'cache_port' => '11211',
    'cache_username' => '',
    'cache_password' => '',
    'cache_flag' => 'slwf4w5',
    'cache_core' => '0',
    'cache_time' => '3600',
    'cache_page' => '0',
    'cache_time_page' => '3600',
    'compress' => '0',
    'search' => '1',
    'search_timespan' => '3',
    'search_vod_rule' => 'vod_tag|vod_actor',
    'copyright_status' => '1',
    'copyright_notice' => '该视频由于版权限制，暂不提供播放。',
    'collect_timespan' => '3',
    'pagesize' => '20',
    'makesize' => '30',
    'admin_login_verify' => '1',
    'editor' => 'ueditor',
    'player_sort' => '1',
    'encrypt' => '0',
    'search_hot' => '热门1,热门2,热门3,热门4,热门5,热门测试',
    'art_extend_class' => '段子手,私房话,八卦精,爱生活,汽车迷,科技咖,美食家,辣妈帮',
    'vod_extend_class' => '爱情,动作,喜剧,战争,科幻,剧情,武侠,冒险,枪战,恐怖,微电影,其它',
    'vod_extend_state' => '正片,预告片,花絮',
    'vod_extend_version' => '高清版,剧场版,抢先版,OVA,TV,影院版',
    'vod_extend_area' => '大陆,香港,台湾,美国,韩国,日本,泰国,新加坡,马来西亚,印度,英国,法国,加拿大,西班牙,俄罗斯,其它',
    'vod_extend_lang' => '国语,英语,粤语,闽南语,韩语,日语,法语,德语,其它',
    'vod_extend_year' => '2018,2017,2016,2015,2014,2013,2012,2011,2010,2009,2008,2007,2006,2005,2004,2003,2002,2001,2000',
    'vod_extend_weekday' => '一,二,三,四,五,六,日',
    'actor_extend_area' => '大陆,香港,台湾,美国,韩国,日本,泰国,新加坡,马来西亚,印度,英国,法国,加拿大,西班牙,俄罗斯,其它',
    'filter_words' => 'www,http,com,net',
    'extra_var' => 'aa$$$我是你妹;',
    'search_art_rule' => NULL,
  ),
  'user' => 
  array (
    'status' => '1',
    'reg_open' => '1',
    'reg_status' => '1',
    'reg_phone_sms' => '0',
    'reg_email_sms' => '0',
    'reg_verify' => '0',
    'login_verify' => '0',
    'reg_points' => '5',
    'reg_num' => '2',
    'invite_reg_points' => '45',
    'invite_visit_points' => '0',
    'invite_visit_num' => '0',
    'reward_status' => '1',
    'reward_ratio' => '30',
    'reward_ratio_2' => '20',
    'reward_ratio_3' => '10',
    'cash_status' => '0',
    'cash_ratio' => '20',
    'cash_min' => '1',
    'trysee' => '0.5',
    'vod_points_type' => '0',
    'art_points_type' => '1',
    'portrait_status' => '0',
    'portrait_size' => '100x100',
    'filter_words' => 'admin,',
  ),
  'gbook' => 
  array (
    'status' => '1',
    'audit' => '1',
    'login' => '1',
    'verify' => '1',
    'pagesize' => '20',
    'timespan' => '3',
  ),
  'comment' => 
  array (
    'status' => '1',
    'audit' => '0',
    'login' => '0',
    'verify' => '1',
    'pagesize' => '20',
    'timespan' => '3',
  ),
  'upload' => 
  array (
    'thumb' => '0',
    'thumb_size' => '300x300',
    'thumb_type' => '1',
    'watermark' => '0',
    'watermark_location' => '7',
    'watermark_content' => 'maccms.com',
    'watermark_size' => '40',
    'watermark_color' => '#FF0000',
    'protocol' => 'http',
    'mode' => 'local',
    'remoteurl' => 'http://img.maccms.com/',
    'api' => 
    array (
      'ftp' => 
      array (
        'host' => '',
        'port' => '21',
        'user' => 'test',
        'pwd' => 'test',
        'path' => '/',
        'url' => '',
      ),
      'qiniu' => 
      array (
        'bucket' => '',
        'accesskey' => '',
        'secretkey' => '',
        'url' => '',
      ),
      'upyun' => 
      array (
        'bucket' => '',
        'username' => '',
        'pwd' => '',
        'url' => '',
      ),
      'weibo' => 
      array (
        'user' => '',
        'pwd' => '',
        'size' => 'large',
        'cookie' => '',
        'time' => '1546239694',
      ),
    ),
  ),
  'interface' => 
  array (
    'status' => '1',
    'pass' => 'ip4556asd4a654wd5a',
    'vodtype' => '动作=动作片',
    'arttype' => '头条=头条',
  ),
  'pay' => 
  array (
    'min' => '1',
    'scale' => '20',
    'card' => 
    array (
      'url' => '',
    ),
    'zhapay' => 
    array (
      'appid' => '',
      'appkey' => '',
      'type' => '',
      'act' => '',
    ),
    'weipay' => 
    array (
      'kaiguan' => '1',
      'appid' => '10895',
      'appkey' => 'dbcc00fd7d099a3cbbe9d890f3d1bc6a56520214',
      'url' => 'http://pay.gxxrfdc.com/apisubmit',
      'tongdao' => 'zalipay',
    ),
    'yiqianpay' => 
    array (
      'kaiguan' => '1',
      'appid' => '190729893',
      'appkey' => 'bybq17cbtox2orvdr1g1d59ybmp0y4fc',
      'act' => 'https://www.suzhanwang.cn/Pay_Index.html',
    ),
    'dby' => 
    array (
      'appid' => '1030',
    ),
    'wherewx' => 
    array (
      'kaiguan' => '1',
      'appid' => '1034',
      'appkey' => '1034',
      'act' => '1034',
    ),
    'codepay' => 
    array (
      'appid' => '',
      'appkey' => '',
      'type' => '',
      'act' => '',
    ),
    'juhe' => 
    array (
      'appid' => '8457',
      'appkey' => '2e6c726991ddaf003e0c2ec843767371',
      'url' => 'https://www.allroundpay.com/Api/pay',
      'tongdao' => 'icbc',
    ),
    'moboopay' => 
    array (
      'kaiguan' => '0',
      'appid' => '15714',
      'appkey' => '204b80c509e744048c6bcd5833eba217',
      'act' => 'http://pay.scdijie.net:1212/pay.aspx',
    ),
    'whereali' => 
    array (
      'kaiguan' => '1',
      'appid' => '1030',
      'appkey' => '1030',
      'act' => '1030',
    ),
  ),
  'collect' => 
  array (
    'vod' => 
    array (
      'status' => '1',
      'hits_start' => '1',
      'hits_end' => '1000',
      'updown_start' => '1',
      'updown_end' => '1000',
      'score' => '1',
      'pic' => '0',
      'tag' => '0',
      'class_filter' => '1',
      'psernd' => '1',
      'psesyn' => '1',
      'inrule' => ',f,g',
      'uprule' => ',a',
      'filter' => '色戒,色即是空',
      'thesaurus' => '',
      'words' => '',
    ),
    'art' => 
    array (
      'status' => '1',
      'hits_start' => '1',
      'hits_end' => '1000',
      'updown_start' => '1',
      'updown_end' => '1000',
      'score' => '1',
      'pic' => '0',
      'tag' => '0',
      'psernd' => '1',
      'psesyn' => '1',
      'inrule' => ',b',
      'uprule' => ',a,d',
      'filter' => '无奈的人',
      'thesaurus' => '',
      'words' => '',
    ),
    'actor' => 
    array (
      'status' => '0',
      'hits_start' => '1',
      'hits_end' => '999',
      'updown_start' => '1',
      'updown_end' => '999',
      'score' => '0',
      'pic' => '0',
      'psernd' => '0',
      'psesyn' => '0',
      'uprule' => ',a,b,c',
      'filter' => '无奈的人',
      'thesaurus' => '',
      'words' => '',
      'inrule' => ',a',
    ),
    'role' => 
    array (
      'status' => '0',
      'hits_start' => '1',
      'hits_end' => '999',
      'updown_start' => '1',
      'updown_end' => '999',
      'score' => '0',
      'pic' => '0',
      'psernd' => '0',
      'psesyn' => '0',
      'uprule' => 
      array (
        0 => 'a',
        1 => 'b',
        2 => 'c',
      ),
      'filter' => '',
      'thesaurus' => '',
      'words' => '',
    ),
  ),
  'api' => 
  array (
    'vod' => 
    array (
      'status' => 0,
      'charge' => '0',
      'pagesize' => '20',
      'imgurl' => 'http://img.maccms.com/',
      'typefilter' => '',
      'datafilter' => ' vod_status=1',
      'cachetime' => '',
      'from' => '',
      'auth' => 'maccms.com#163.com',
    ),
    'art' => 
    array (
      'status' => 0,
      'charge' => '0',
      'pagesize' => '20',
      'imgurl' => 'http://img2.maccms.com/',
      'typefilter' => '',
      'datafilter' => 'art_status=1',
      'cachetime' => '',
      'auth' => 'qq.com#baidu.com',
    ),
    'actor' => 
    array (
      'status' => '1',
      'charge' => '0',
      'pagesize' => '20',
      'imgurl' => 'http://img2.maccms.com/',
      'datafilter' => 'actor_status=1',
      'cachetime' => '',
      'auth' => '',
    ),
  ),
  'connect' => 
  array (
    'qq' => 
    array (
      'status' => '0',
      'key' => '',
      'secret' => '',
    ),
    'weixin' => 
    array (
      'status' => '0',
      'key' => '',
      'secret' => '',
    ),
  ),
  'weixin' => 
  array (
    'status' => '0',
    'duijie' => 'http://baidu.com',
    'sousuo' => '',
    'token' => '',
    'guanzhu' => '',
    'wuziyuan' => '',
    'wuziyuanlink' => '',
    'bofang' => '0',
    'msgtype' => '0',
    'gjc1' => '关键词1',
    'gjcm1' => '长城',
    'gjci1' => 'http://img.aolusb.com/im/201610/2016101222371965996.jpg',
    'gjcl1' => 'http://www.loldytt.com/Dongzuodianying/CC/',
    'gjc2' => '关键词2',
    'gjcm2' => '生化危机6',
    'gjci2' => 'http://img.aolusb.com/im/201702/20172711214866248.jpg',
    'gjcl2' => 'http://www.loldytt.com/Kehuandianying/SHWJ6ZZ/',
    'gjc3' => '关键词3',
    'gjcm3' => '湄公河行动',
    'gjci3' => 'http://img.aolusb.com/im/201608/201681719561972362.jpg',
    'gjcl3' => 'http://www.loldytt.com/Dongzuodianying/GHXD/',
    'gjc4' => '关键词4',
    'gjcm4' => '王牌逗王牌',
    'gjci4' => 'http://img.aolusb.com/im/201601/201612723554344882.jpg',
    'gjcl4' => 'http://www.loldytt.com/Xijudianying/WPDWP/',
  ),
  'view' => 
  array (
    'index' => '0',
    'map' => '0',
    'search' => '0',
    'rss' => '0',
    'label' => '0',
    'vod_type' => '0',
    'vod_show' => '0',
    'art_type' => '0',
    'art_show' => '0',
    'topic_index' => '0',
    'topic_detail' => '0',
    'vod_detail' => '0',
    'vod_play' => '0',
    'vod_down' => '0',
    'art_detail' => '0',
  ),
  'path' => 
  array (
    'topic_index' => 'topic/index',
    'topic_detail' => 'topic/{id}/index',
    'vod_type' => 'vodtypehtml/{id}/index',
    'vod_detail' => 'vodhtml/{id}/index',
    'vod_play' => 'vodplayhtml/{id}/index',
    'vod_down' => 'voddownhtml/{id}/index',
    'art_type' => 'arttypehtml/{id}/index',
    'art_detail' => 'arthtml/{id}/index',
    'page_sp' => '_',
    'suffix' => 'html',
  ),
  'rewrite' => 
  array (
    'suffix_hide' => '0',
    'route_status' => '0',
    'status' => '0',
    'vod_id' => '0',
    'art_id' => '0',
    'type_id' => '0',
    'topic_id' => '0',
    'actor_id' => '0',
    'role_id' => '0',
    'route' => 'map   => map/index
rss   => rss/index
 
index-<page?>   => index/index
 
gbook-<page?>   => gbook/index
gbook$   => gbook/index
 
topic-<page?>   => topic/index
topic$  => topic/index
topicdetail-<id>   => topic/detail
 
actor-<page?>   => actor/index
actor$ => actor/index
actordetail-<id>   => actor/detail
actorshow/<area?>-<blood?>-<by?>-<letter?>-<level?>-<order?>-<page?>-<sex?>-<starsign?>   => actor/show
 
role-<page?>   => role/index
role$ => role/index
roledetail-<id>   => role/detail
roleshow/<by?>-<letter?>-<level?>-<order?>-<page?>-<rid?>   => role/show
 
 
vodtype/<id>-<page?>   => vod/type
vodtype/<id>   => vod/type
voddetail/<id>   => vod/detail
vodrss-<id>   => vod/rss
vodplay/<id>-<sid>-<nid>   => vod/play
voddown/<id>-<sid>-<nid>   => vod/down
vodshow/<id>-<area?>-<by?>-<class?>-<lang?>-<letter?>-<level?>-<order?>-<page?>-<state?>-<tag?>-<year?>   => vod/show
vodsearch/<wd?>-<actor?>-<area?>-<by?>-<class?>-<director?>-<lang?>-<letter?>-<level?>-<order?>-<page?>-<state?>-<tag?>-<year?>   => vod/search
 
 
arttype/<id>-<page?>   => art/type
arttype/<id>   => art/type
artshow-<id>   => art/show
artdetail-<id>-<page?>   => art/detail
artdetail-<id>   => art/detail
artrss-<id>-<page>   => art/rss
artshow/<id>-<by?>-<class?>-<level?>-<letter?>-<order?>-<page?>-<tag?>   => art/show
artsearch/<wd?>-<by?>-<class?>-<level?>-<letter?>-<order?>-<page?>-<tag?>   => art/search
 
label-<file> => label/index',
  ),
  'email' => 
  array (
    'host' => 'smtp.qq.com',
    'port' => '587',
    'username' => '123456@qq.com',
    'password' => '',
    'nick' => '苹果CMS',
    'test' => '123456@qq.com',
  ),
  'play' => 
  array (
    'width' => '100%',
    'height' => '100%',
    'widthmob' => '100%',
    'heightmob' => '100%',
    'widthpop' => '0',
    'heightpop' => '600',
    'second' => '2',
    'prestrain' => '//union.maccms.com/html/prestrain.html',
    'buffer' => '//union.maccms.com/html/buffer.html',
    'parse' => '//api.maccms.com/parse/?url=',
    'autofull' => '0',
    'showtop' => '1',
    'showlist' => '1',
    'flag' => '0',
    'colors' => '000000,F6F6F6,F6F6F6,333333,666666,FFFFF,FF0000,2c2c2c,ffffff,a3a3a3,2c2c2c,adadad,adadad,48486c,fcfcfc',
  ),
  'sms' => 
  array (
    'type' => '',
    'appid' => '',
    'appkey' => '',
    'sign' => '',
    'tpl_code_reg' => '',
    'tpl_code_bind' => '',
    'tpl_code_findpass' => '',
  ),
  'extra' => 
  array (
    'aa' => '我是你妹;',
  ),
);