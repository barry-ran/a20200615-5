<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:35:"template/RX03/new1685/vod/play.html";i:1590692659;s:66:"/www/wwwroot/tiaoshi.com/template/RX03/new1685/public/include.html";i:1576939674;s:63:"/www/wwwroot/tiaoshi.com/template/RX03/new1685/public/head.html";i:1577290900;s:63:"/www/wwwroot/tiaoshi.com/template/RX03/new1685/public/left.html";i:1576939699;s:63:"/www/wwwroot/tiaoshi.com/template/RX03/new1685/public/foot.html";i:1577472563;}*/ ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<title><?php echo $obj['vod_name']; ?> - 高清视频在线观看 - <?php echo $maccms['site_name']; ?></title>
		<meta name="description" content="<?php echo $obj['vod_name']; ?> - 高清视频在线观看 - <?php echo $maccms['site_name']; ?>" />
		<meta name="keywords" content="<?php echo $obj['vod_name']; ?> - 高清视频在线观看 - <?php echo $maccms['site_name']; ?>" />
		<meta name="author" content="<?php echo $maccms['site_name']; ?>" />
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="<?php echo $maccms['path_tpl']; ?>html/style/images/favicon.png" />
		<!-- Bootstrap core CSS-->
		<link href="<?php echo $maccms['path_tpl']; ?>html/style/css/bootstrap.min.css" rel="stylesheet" />
		<!-- Custom fonts for this template-->
		<link href="<?php echo $maccms['path_tpl']; ?>html/style/css/all.min.css" rel="stylesheet" type="text/css" />
		<!-- Custom styles for this template-->
		<link href="<?php echo $maccms['path_tpl']; ?>html/style/css/osahan.css" rel="stylesheet" />
		<!-- Owl Carousel -->
		<link rel="stylesheet" href="<?php echo $maccms['path_tpl']; ?>html/style/css/owl.carousel.css" />
		<link rel="stylesheet" href="<?php echo $maccms['path_tpl']; ?>html/style/css/owl.theme.css" />
      <link rel="stylesheet" href="/template/RX03/css/style.ikan.css" />
		<link href="<?php echo $maccms['path_tpl']; ?>html/style/css/sweetalert.css" rel="stylesheet" type="text/css" />
		<script src="<?php echo $maccms['path_tpl']; ?>html/style/js/sweetalert.min.js" type="text/javascript"></script>
		<script src="<?php echo $maccms['path_tpl']; ?>html/style/js/jquery.min.js"></script>
		<script src="<?php echo $maccms['path_tpl']; ?>html/style/js/jquery.lazyload.min.js"></script>
		<script src="<?php echo $maccms['path']; ?>static/js/jquery.autocomplete.js"></script>
<script src="<?php echo $maccms['site_wapurl']; ?>js/jquery.superslide.js"></script>
<link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
<script src="<?php echo $maccms['site_wapurl']; ?>js/jquery.base.js"></script>
<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","aid":"<?php echo $maccms['aid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
<script src="<?php echo $maccms['path']; ?>static/js/home.js"></script>
<style>.table.table-sm .div-pc {display: table-row-group;vertical-align: middle;border-color: inherit;}.table.table-sm ul {padding-left: 0;display: table-row;vertical-align: inherit;border-color: inherit;}.ui-slide-block li {float: left;border-bottom: 1px solid #dee2e6;list-style-type: none;width: 25%;padding: .3rem;overflow: hidden; text-overflow: ellipsis; white-space: nowrap;}.ui-slide-block-pc li,.ui-slide-block-pc-down li,.ui-slide-block-pc-down2 li{width: 120px;font-size: 14px;line-height: 25px !important;padding: .3rem;vertical-align: top;float: left;border-bottom: 1px solid #dee2e6;list-style-type: none;overflow: hidden; text-overflow: ellipsis; white-space: nowrap;}@media (max-width: 768px){body.sidebar-toggled #block-slide{display: block !important}.navbar-brand{width:8rem;margin-right: 0rem!important;}.table.table-sm ul{display:block;overflow:hidden;}}</style>

		<style>
			.sidebar .nav-item .dropdown-menu {
				top: -100% !important;
			}

			.shadow_border {
				border: 1px solid #000;
				padding: 60px;
				width: 100px;
				-webkit-border-radius: 8px;
				-moz-border-radius: 8px;
				border-radius: 8px;
				-webkit-box-shadow: #666 0px 0px 10px;
				-moz-box-shadow: #666 0px 0px 10px;
				box-shadow: #666 0px 0px 10px;
			}


			.shadow_font {
				text-shadow: #f00 3px 3px 3px;
			}

			.nav_new {
				position: fixed;

				z-index: 99;
				width: 100%;
			}

			.ui-fix-top {
				position: fixed;
				left: 0;
				right: 0;
				top: 0
			}

			.ui-wrapper {
				margin-top: 58px;
			}

			.ui-slide-block-pc,
			.ui-slide-block-pc-down2 {
				background: linear-gradient(123deg, #ff516b 0%, #8876ea 100%);
				display: none;
				/*position: sticky;*/
				position: fixed;
				z-index: 100;
				margin-left: 14.1rem;
				border-bottom: 5px solid #ffbfef;
				border-right: 5px solid #ffbfef;
				/*border-left:5px solid #ffbfef;*/
			}


			.ui-slide-block-pc td,
			.ui-slide-block-pc-down2 td {
				width: 120px;
				font-size: 14px;
				line-height: 25px !important;
			}

			.ui-slide-block-pc-down {
				background: linear-gradient(123deg, #69dccc 0%, #5b4baf 100%);
				display: none;
				/*position: sticky;*/
				position: fixed;
				z-index: 100;
				margin-left: 14.1rem;
				border-bottom: 5px solid #a8f7ee;
				border-right: 5px solid #a8f7ee;
				/*border-left:5px solid #ffbfef;*/
			}

			.ui-slide-block-pc-down td {
				width: 120px;
				font-size: 14px;
				line-height: 25px !important;
			}

			.ui-slide-block {
				background: linear-gradient(123deg, #ff516b 0%, #8876ea 100%);
				display: none;
				position: sticky;
				position: fixed;
				z-index: 100;
			}

			.no-border {
				border-top: 0px solid #dee2e6 !important;
			}
		</style>
		<style>
			/*弹出层*/
			.mac_pop_bg,
			.mac_pop_msg_bg {
				position: fixed;
				z-index: 129;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				background: rgba(0, 0, 0, .2);
			}

			.mac_pop,
			.mac_pop_msg {
				z-index: 99999;
				display: none;
				min-height: 20px;
				max-height: 750px;
				position: fixed;
				top: 0;
				left: 0;
				bottom: 0;
				right: 0;
				margin: auto;
				padding: 25px;
				z-index: 130;
				border-radius: 8px;
				background-color: #fff;
				box-shadow: 0 3px 18px rgba(0, 0, 0, .5);
			}

			.mac_pop .pop_top {
				height: 40px;
				width: 100%;
				border-bottom: 1px #E5E5E5 solid;
			}

			.mac_pop .pop_top h2 {
				float: left;
				display: block;
				margin: 0;
				font-size: 18px;
				font-weight: normal;
				font-family: "microsoft yahei";
			}

			.mac_pop span.pop_close {
				float: right;
				width: 23px;
				height: 23px;
				font-size: 0;
				text-indent: 9999;
				cursor: pointer;
				font-weight: bold;
				display: block;
				background: url("/static/images/home/background.png") -10px 0 no-repeat;
			}

			.mac_pop_msg .pop-msg {
				text-align: center;
				font-size: 14px;
			}

			.gbook_content {
				width: 100% !important;
				border: 1px #E5E5E5 solid;
				border-radius：: 2px;
				padding: 10px 10px 0;
			}

			.msg_code input {
				height: 30px;
				border: 1px solid #e5e5e5;
				border-radius: 3px;
			}

			.mac_verify_img {
				pointer-events: unset !important;
				height: 30px;
			}

			.remaining-w.fr {
				float: right;
			}

			.mac_login {
				padding: 30px;
				width: 400px;
				height: 350px;
				background: #fff;
				box-sizing: border-box;
				font-family: "microsoft yahei"
			}

			.mac_login {
				width: 100% !important
			}

			.mac_login .mac_login_form .login_form_group {
				margin-top: 20px
			}

			.mac_login .mac_login_form .login_form_group input {
				padding: 4px 10px 4px 36px;
				width: 100%;
				height: 38px;
				line-height: 38px;
				border: 1px solid #cacaca;
				box-sizing: border-box;
				display: block;
				border-color: #dcdfdf;
				border-radius: 2px;
			}

			.mac_login .mac_login_form .login_form_group input.mac_u_name {
				background: url(/static/images/home/u_name.png) no-repeat 7px 8px
			}

			.mac_login .mac_login_form .login_form_group input.mac_u_pwd {
				background: url(/static/images/home/u_pwd.png) 8px 8px no-repeat
			}

			.mac_login .mac_login_form .login_form_group .mac_verify_img {
				margin-top: -39px;
				height: 39px;
			}

			.mac_login .mac_login_form .login_form_link {
				margin-top: 10px;
				text-align: right
			}

			.mac_login .mac_login_form .login_form_link a {
				font-size: 12px;
				color: #333;
				margin-left: 15px
			}

			.mac_login .mac_login_form .login_form_link a {
				font-size: 12px;
				color: #333;
				margin-left: 15px
			}

			.mac_login .mac_login_form input.login_form_submit {
				background: #ff516b;
				background: -moz-linear-gradient(-45deg, #ff516b 0%, #826cfd 100%);
				background: -webkit-linear-gradient(-45deg, #ff516b 0%, #826cfd 100%);
				background: linear-gradient(135deg, #ff516b 0%, #826cfd 100%);
				;
				color: #fff;
				font-size: 14px;
				line-height: normal;
				border-radius: .1875rem;
				cursor: pointer;
				text-align: center;
				padding: 0
			}

			@media (max-width: 767px) {
				.mac_pop {
					width: 95% !important;
				}

				.remaining-w.fr {
					float: initial;
				}

				.mac_login {
					padding: 30px 0;
				}
			}

			.mac_pop_msg_bg {
				position: fixed;
				z-index: 129;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				background: rgba(0, 0, 0, .2);
			}

			.mac_pop_msg {
				z-index: 99999;
				display: none;
				min-height: 20px;
				max-height: 750px;
				position: fixed;
				top: 0;
				left: 0;
				bottom: 0;
				right: 0;
				margin: auto;
				padding: 25px;
				z-index: 130;
				border-radius: 8px;
				background-color: #fff;
				box-shadow: 0 3px 18px rgba(0, 0, 0, .5);
			}

			.mac_pop_msg .pop-msg {
				text-align: center;
				font-size: 14px;
			}

			.gbook_content {
				width: 100% !important;
				border: 2px solid hsla(0, 0%, 100%, .7);
				padding: 10px 10px 0;
			}

			.msg_code input {
				height: 30px;
				margin-top: 5px;
				border: 1px solid #fff;
				border-radius: 3px;
			}

			.mac_verify_img {
				pointer-events: unset !important;
				height: 30px;
				margin-top: 5px;
				float: right;
			}

			.mac_pop .mac_report .gbook_submit {
				color: #f3c669;
			}

			.mac_pop .mac_report .gbook_submit:hover {
				color: #f3c669;
				background: #f3c6691f;
			}

			.mac_block {
				display: block !important;
			}
		</style>
	</head>
	<body id="page-top" class="">
		<nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
  <button type="button" class="d-block d-sm-none btn btn-primary border-none btn-sm order-1 order-sm-0" id="sidebarToggle"><i
		 class="fa fa-bars"></i>导航</button>
  <button class="d-none d-sm-block btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle"> <i class="fa fa-bars"></i> </button>
  <a class="navbar-brand" href="/" style="margin-right: 1.3rem;"><img class="img-fluid" style="max-width: 90%;" alt="<?php echo $maccms['site_name']; ?>"  src="/<?php echo $maccms['site_logo']; ?>" /></a>
  <button type="button" class="d-none d-sm-block btn btn-primary border-none btn-sm order-1 order-sm-0" id="sidebarTogglePc"><i
		 class="fa fa-video-camera"></i> 在线视频分类</button>
  <!--<button type="button" style="margin-left: 20px" class="d-none d-sm-block btn btn-primary border-none btn-sm order-1 order-sm-0"
	 id="sidebarTogglePcDown"><i class="fa fa-image"></i> 套图专区分类</button>-->
  <button type="button" style="margin-left: 20px" class="d-none d-sm-block btn btn-primary border-none btn-sm order-1 order-sm-0"
	 id="sidebarTogglePcDown2"><i class="fa fa-book"></i> 小说专区分类</button>
  <!-- Navbar Search -->
  <form id="search" action="<?php echo mac_url('vod/search'); ?>" method="get" onSubmit="return qrsearch();" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 osahan-navbar-search">
    <div class="input-group">
      <input type="text" id="wd" name="wd" class="form-control" placeholder="输入关键字进行搜索…" />
      <div class="input-group-append">
        <button class="btn btn-light" type="submit"> <i class="fa fa-search"></i> </button>
      </div>
    </div>
  </form>
  <!-- Navbar -->
     <?php if($GLOBALS['user']['user_id']): ?>
   <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar"> 
    <li class="nav-item dropdown no-arrow osahan-right-navbar-user"> <a class="nav-link dropdown-toggle user-dropdown-link" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img alt="Avatar" src="<?php echo mac_get_user_portrait($user['user_id']); ?>" /><span>个人中心</span></a> 
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown"> 
     <a class="dropdown-item" href="#"><i class="fas fa-fw fa-user"></i>   <?php echo $user['user_name']; ?></a> 
     <div class="dropdown-divider"></div> 
     <a class="dropdown-item" href="<?php echo mac_url('user/index'); ?>"><i class="fas fa-fw fa-user-circle"></i>   进入会员中心</a> 
     <a class="dropdown-item" href="<?php echo mac_url('user/buy'); ?>"><i class="fas fa-fw fa-money-bill"></i>   升级VIP</a> 
     <div class="dropdown-divider"></div> 
     <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-sign-out-alt"></i>   退出</a> 
    </div> </li> 
   </ul>
   <?php else: ?>
   <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar"> 
    <li class="nav-item dropdown no-arrow osahan-right-navbar-user"> <a class="nav-link" href="<?php echo mac_url('user/login'); ?>" style="font-size: 14px"> <i class="fas fa-user-circle fa-fw"></i> 登录 </a> </li> 
    <li class="nav-item dropdown no-arrow osahan-right-navbar-user"> <a class="nav-link" href="<?php echo mac_url('user/reg'); ?>" style="font-size: 14px"> <i class="fas fa-registered fa-fw"></i> 注册 </a> </li> 
   </ul>
   <?php endif; ?> </nav>
<div class="ui-slide-block" style="font-size: 12px;display: none;" id="block-slide">
  <div class="container">
    <div class="table table-sm" style="margin-bottom: 0rem;">
      <div>
        <div style="line-height:20px;padding: .3rem;">
          <form id="search" method="get" action="<?php echo mac_url('vod/search'); ?>" onSubmit="return qrsearch();" class="form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 ">
            <div class="input-group">
              <input class="form-control border-form-control search-input" style="background-color: white;border: none" id="wd"
							 name="wd" placeholder="输入关键字进行搜索" type="text" />
              <button type="submit" class="btn btn-danger border-none"> 搜索 </button>
            </div>
          </form>
        </div>
        <span style="color: #ffade8;font-size: 16px" target="_blank"><i class="fa fa-fw fa-video"></i>视频区</span>
        <ul>
          <li style="line-height:20px"><a style="color: white;" href="/" target="_blank"><b>首页</b></a></li>
          <li style="line-height:20px"><a style="color: #f5ff06;" href="<?php echo mac_url('user/upgrade'); ?>" target="_blank"><b>升级VIP</b></a></li>
          <li style="line-height:20px"><a style="color: #f5ff06;" href="/index.php/vod/type/id/20.html" target="_blank"><b>试看</b></a></li>
          <li style="line-height:20px"><a style="color: #f5ff06;" href="/index.php/vod/search/by/time_add.html" target="_blank"><b>最近更新</b></a></li>
          <li style="line-height:20px"><a style="color: #f5ff06;" href="/index.php/vod/search/by/hits.html" target="_blank"><b>最多观看</b></a></li>
          <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","flag":"vod","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <li style="line-height:20px"><a style="color: white;" href="<?php echo mac_url_type($vo); ?>" target="_blank"><?php echo $vo['type_name']; ?></a></li>
          <?php endforeach; endif; else: echo "" ;endif; $__TAG__ = '{"ids":"child","order":"asc","by":"sort","flag":"vod","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <li style="line-height:20px"><a style="color: white;" href="<?php echo mac_url_type($vo); ?>" target="_blank"><?php echo $vo['type_name']; ?></a></li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!--<span style="color: #ffccfa;font-size: 16px;" target="_blank"><i class="fa fa-image"></i>套图区</span>
        <ul>
          <li style="line-height:20px"><a style="color: white;" href="/index.php/art/search/by/time_add.html" target="_blank">最新套图</a></li>
          <li style="line-height:20px"><a style="color: white;" href="/index.php/art/search/by/hits.html" target="_blank">热门套图</a></li>
          <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","flag":"art","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <li style="line-height:20px"><a style="color: white;" href="<?php echo mac_url_type($vo); ?>" target="_blank"><?php echo $vo['type_name']; ?></a></li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>-->
        <span style="color: #ffccfa;font-size: 16px;" target="_blank"><i class="fa fa-fw fa-book"></i>小说区</span>
        <ul>
          <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","flag":"art","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <li style="line-height:20px"><a style="color: white;" href="<?php echo mac_url_type($vo); ?>" target="_blank"><?php echo $vo['type_name']; ?></a></li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="ui-slide-block-pc" id="block-slide-pc">
  <div class="container">
    <div class="table table-sm" style="width: 480px;margin-bottom: -0.1rem;">
      <div class="div-pc">
        <ul>
          <li style="line-height:20px"><a style="color: white;" href="/" target="_blank"><b>首页</b></a></li>
          <li style="line-height:20px"><a style="color: #f5ff06;" href="/index.php/user/upgrade.html" target="_blank"><b>升级VIP</b></a></li>
          <li style="line-height:20px"><a style="color: #f5ff06;" href="/index.php/vod/type/id/20.html" target="_blank"><b>试看</b></a></li>
          <li style="line-height:20px"><a style="color: #f5ff06;" href="/index.php/vod/search/by/time_add.html" target="_blank"><b>最近更新</b></a></li>
          <li style="line-height:20px"><a style="color: #f5ff06;" href="/index.php/vod/search/by/hits.html" target="_blank"><b>最多观看</b></a></li>
          <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","flag":"vod","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <li style="line-height:20px"><a style="color: white;" href="<?php echo mac_url_type($vo); ?>" target="_blank"><?php echo $vo['type_name']; ?></a></li>
          <?php endforeach; endif; else: echo "" ;endif; $__TAG__ = '{"ids":"child","order":"asc","by":"sort","flag":"vod","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <li style="line-height:20px"><a style="color: white;" href="<?php echo mac_url_type($vo); ?>" target="_blank"><?php echo $vo['type_name']; ?></a></li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="ui-slide-block-pc-down" id="block-slide-pc-down">
  <div class="container">
    <div class="table table-sm" style="width: 480px;margin-bottom: -0.1rem;">
      <div class="div-pc">
        <ul>
          <li style="line-height:20px"><a style="color: white;" href="/" target="_blank"><b>首页</b></a></li>
          <li style="line-height:20px"><a style="color: #f5ff06;" href="<?php echo mac_url('user/upgrade'); ?>" target="_blank"><b>升级VIP</b></a></li>
          <li style="line-height:20px"><a style="color: #f5ff06;" href="/index.php/art/search/by/time_add.html" target="_blank"><b>最新套图</b></a></li>
          <li style="line-height:20px"><a style="color: #f5ff06;" href="/index.php/art/search/by/hits.html" target="_blank"><b>热门套图</b></a></li>
          <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","flag":"art","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <li style="line-height:20px"><a style="color: white;" href="<?php echo mac_url_type($vo); ?>" target="_blank"><?php echo $vo['type_name']; ?></a></li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="ui-slide-block-pc-down2" id="block-slide-pc-down2">
  <div class="container">
    <div class="table table-sm" style="width: 480px;margin-bottom: -0.1rem;">
      <div class="div-pc">
        <ul>
          <li style="line-height:20px"><a style="color: white;" href="/" target="_blank"><b>首页</b></a></li>
          <li style="line-height:20px"><a style="color: #f5ff06;" href="<?php echo mac_url('user/upgrade'); ?>" target="_blank"><b>升级VIP</b></a></li>
          <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","flag":"art","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <li style="line-height:20px"><a style="color: white;" href="<?php echo mac_url_type($vo); ?>" target="_blank"><?php echo $vo['type_name']; ?></a></li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div>
  </div>
</div>

		<div id="wrapper">
			<!-- Sidebar -->
			<ul class="sidebar navbar-nav "> 
    <li class="nav-item active"> <a class="nav-link" href="/"> <i class="fa fa-fw fa-home"></i> <span>首页</span> </a> </li> 
    <li class="nav-item"> <a class="nav-link d-none d-sm-block" id="sidebarTogglePcLeft"> <i class="fa fa-fw fa-bars"></i> <span>视频分类</span> </a> </li>
	<?php if($GLOBALS['user']['user_id']): else: ?>
    <li class="nav-item"> <a class="nav-link" href="<?php echo mac_url('user/login'); ?>"> <i class="fa fa-fw fa-user-circle"></i> <span>登录</span> </a> </li> 
	<?php endif; ?>
    <li class="nav-item"> <a class="nav-link" href="<?php echo mac_url('user/upgrade'); ?>" > <i class="fa fa-fw fa-cart-plus"></i> <span>升级VIP</span> </a> </li> 
    <li class="nav-item"> <a class="nav-link" href="/index.php/vod/search/by/time_add.html"> <i class="fa fa-fw fa-user-circle"></i> <span>最近更新</span> </a> </li> 
    <li class="nav-item"> <a class="nav-link" href="/index.php/vod/search/by/hits.html"> <i class="fa fa-fw fa-fire"></i> <span>热门视频</span> </a> </li> 
    <li class="nav-item"> <a class="nav-link d-none d-sm-block" id="sidebarTogglePcLeftDown"> <i class="fa fa-fw fa-image"></i> <span>套图专区</span> </a> </li> 
	<li class="nav-item"> <a class="nav-link d-none d-sm-block" id="sidebarTogglePcLeftDown2"> <i class="fa fa-fw fa-book"></i> <span>小说专区</span> </a> </li>
	<?php if($GLOBALS['user']['user_id']): ?>
    <li class="nav-item channel-sidebar-list"> </li> 
    <li class="nav-item"> <a class="nav-link" href="<?php echo mac_url('user/plays'); ?>"> <i class="fa fa-fw fa-history"></i> <span>最近观看</span> </a> </li> 
    <li class="nav-item"> <a class="nav-link" href="<?php echo mac_url('user/favs'); ?>"> <i class="fa fa-fw fa-heart"></i> <span>我的收藏</span> </a> </li> 
	<?php else: endif; ?>
	<li class="nav-item"> <a class="nav-link" href="<?php echo mac_url('gbook/index'); ?>"> <i class="fa fa-fw fa-clipboard"></i> <span>留言求片</span> </a> </li>
   </ul>
			<div id="content-wrapper">
				<style type="text/css">

				</style>
				<div class="container-fluid pb-0">
					<div class="video-block section-padding">
						<div class="row">
							<div class="col-md-9">
								<div class="single-video-left">
                                  
									<div class="single-video">
                                      <插入前>
                                        <div id="fd_tips" class="fodong_box">
			            <div id="mq" class="fodong_tips">
							<ul style="margin-top: 0px;">
								
								
								
							<li>VIP会员 <span class="font_zd">限时特价</span> 最低仅需 <span class="font_zd">100</span> 元 / 月</li><li>会员登录 <span class="font_zd"> 按钮 </span> 在右上角呦</li><li><span class="font_zd">提醒</span> 您现在观看的为 <span class="font_zd">预览影片</span> 开通VIP会员看全片</li></ul>
						</div>
			            
			            </div>
                                        <插入后>
										<div class="embed-responsive" style="margin-bottom: 20px;"><div style="width:100%;height:100%;position: relative;" id="a2">
												<div class="embed-responsive-item" id="a1" allowfullscreen="" style="position: absolute;">
													<?php echo $player_data; ?>
													<?php echo $player_js; ?>
													<script type="text/javascript">
														function IsPC() {
															var userAgentInfo = navigator.userAgent;
															var Agents = ["Android", "iPhone",
																"SymbianOS", "Windows Phone",
																"iPad", "iPod"
															];
															var flag = true;
															for (var v = 0; v < Agents.length; v++) {
																if (userAgentInfo.indexOf(Agents[v]) > 0) {
																	flag = false;
																	break;
																}
															}
															return flag;
														}
													</script>
													<script type="text/javascript">
														//加载时适应浏览器高度
														$(document).ready(function() {
															//模块尺寸
															$('#a1').css('height', $('#a1').width() * 0.65);
															$('#a2').css('height', $('#a2').width() * 0.65);
														})
														//改变窗体大小时适应浏览器高度
														$(window).resize(function() {
															//模块尺寸
															$('#a1').css('height', $('#a1').width() * 0.65);
															$('#a2').css('height', $('#a2').width() * 0.65);
														});
													</script>
                                                 
                                                  
                                                  
												</div>
											</div>
										</div>
									</div>
                                        <div class="single-video-title box mb-3">
                                           <div class="playbtn wx_but hidden_mb">
														<a style="color:#FFF">正在播放预览片 VIP可看全片</a>
													</div>
									</div>
                                        <div class="single-video-title box mb-3">
										<h2><a><?php echo $obj['vod_name']; ?>111</a></h2>
										<p class="mb-0"><i class="fa fa-eye"></i> <span class="mac_hits hits" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>"
											 data-type="hits"></span> views</p>
									</div>
									<div class="single-video-author box mb-3">
										<div class="float-right">
											<a href="javascript:;" class="btn btn-outline-danger mac_ulog" data-type="2" data-mid="<?php echo $maccms['mid']; ?>"
											 data-id="<?php echo $obj['vod_id']; ?>"> <strong><i class="fa fa-star"></i></strong>收藏</a>
										</div>
										<img class="float-left img-fluid" src="<?php echo $obj['vod_pic']; ?>" alt="" />
										<p>所属分类:<?php echo mac_url_create($obj['vod_tag'],'tag'); ?><br/><a href="<?php echo mac_url_type($obj); ?>"><strong><?php echo $obj['type']['type_name']; ?></strong></a> <span title=""
											 data-placement="top" data-toggle="tooltip" data-original-title="精品认证"><i class="fa fa-check-circle text-success"></i></span></p>
                                      
                <p>主演:<?php echo mac_url_create($obj['vod_actor'],'actor'); ?></p>
										<small>发布于 <?php echo mac_day($obj['vod_time_add']); ?></small>
									</div>
									<?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>
									<div class="single-video-info-content box mb-3" id="playlist_<?php echo $key; ?>">
										<h6>（<?php echo $vo['player_info']['show']; ?>）专辑列表 :</h6>
										<p class="tags mb-0">
											<?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key2=>$vo2): ?>
											<span class="chapter_<?php echo $key; ?>_<?php echo $vo2['nid']; ?>"><a style="margin-top: 5px;text-align:center" href="<?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>$vo2['nid']]); ?>"><?php echo $vo2['name']; ?></a></span>
											<?php endforeach; endif; else: echo "" ;endif; ?>
											<span><a style="width: 55px;margin-top: 5px;text-align:center;background: #f7647f none repeat scroll 0 0;"
												 href="javascript:;" id="chapter_more_button_<?php echo $key; ?>">展开</a></span>
										</p>
									</div>
									<style>.tags .chapter_more_<?php echo $key; ?>{display: none;}</style>
									<script>
										$("span.chapter_<?php echo $key; ?>_36").nextAll().addClass("chapter_more_<?php echo $key; ?>");
			$(".tags span:last").removeClass("chapter_more_<?php echo $key; ?>");
			$("#chapter_more_button_<?php echo $key; ?>").click(function () {
				if($(".chapter_more_<?php echo $key; ?>").is(":hidden")){
					$(".chapter_more_<?php echo $key; ?>").show()
					$(this).html('隐藏')
				}else{
					$(".chapter_more_<?php echo $key; ?>").hide()
					$(this).html('展开')
				}
			});
		 </script>
									<?php endforeach; endif; else: echo "" ;endif; ?>
									<div class="video-block section-padding mb-3 d-none d-sm-block">
										<div class="row">
											<div class="col-md-12">
												<div class="main-title">
													<h6>猜你喜欢</h6>
												</div>
											</div>
											<?php $__TAG__ = '{"num":"8","type":"current","order":"desc","by":"rnd","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
											<div class="col-xl-3 col-sm-6 mb-3">
												<div class="video-card">
													<div class="video-card-image">
														<a class="play-icon" href="<?php echo mac_url_vod_play($vo); ?>"><i class="fa fa-play-circle"></i></a>
														<a href="<?php echo mac_url_vod_play($vo); ?>"> <img class="img-fluid lazy" src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['type']['type_name']; ?>"
															 data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" /> </a>
														<div class="time">
															<?php echo $vo['type']['type_name']; ?> </div>
													</div>
													<div class="video-card-body">
														<div class="video-title">
															<a href="<?php echo mac_url_vod_play($vo); ?>"><?php echo $vo['vod_name']; ?></a>
														</div>
														<div class="video-page text-success">
															<a href="<?php echo mac_url_type($vo['type']); ?>"><?php echo $vo['type']['type_name']; ?></a>
															<a title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified"><i class="fa fa-check-circle text-success"></i></a>
														</div>
														<div class="video-view">
															<?php echo $vo['vod_hits']; ?> 次观看
															<i class="fa fa-calendar-alt"></i> <?php echo mac_day($vo['vod_time']); ?>
														</div>
													</div>
												</div>
											</div>
											<?php endforeach; endif; else: echo "" ;endif; ?>

										</div>
									</div>

								</div>
							</div>
							<div class="col-md-3">
								<div class="single-video-right">

									<div class="row">
										<div class="col-md-12">
											<script src="<?php echo $maccms['path_tpl']; ?>ads/playads.js"></script>
											<div class="main-title">
												<h6><?php echo $obj['type']['type_name']; ?>热门视频</h6>
											</div>
										</div>
										<div class="col-md-12">

											<?php $__TAG__ = '{"num":"8","type":"current","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
											<div class="video-card video-card-list">
												<div class="video-card-image">
													<a class="play-icon" href="<?php echo mac_url_vod_play($vo); ?>"><i class="fa fa-play-circle"></i></a>
													<a href="<?php echo mac_url_vod_play($vo); ?>"> <img width="100%" height="100%" src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['type']['type_name']; ?>"
														 data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" /> </a> </div>
												<div class="video-card-body">
													<div class="video-title">
														<a href="<?php echo mac_url_vod_play($vo); ?>"><?php echo $vo['vod_name']; ?></a>
													</div>
													<div class="video-page text-success">
														<?php echo $vo['type']['type_name']; ?>
														<a title="" data-placement="top" data-toggle="tooltip" data-original-title="同类热门"><i class="fa fa-check-circle text-success"></i></a>
													</div>
													<div class="video-view">
														<i class="fa fa-fire" style="color: red"></i> <?php echo $vo['vod_hits']; ?> 次观看
													</div>
												</div>
											</div>
											<?php endforeach; endif; else: echo "" ;endif; ?>
										</div>
									</div>
									<div class="row  d-block d-sm-none">
										<div class="col-md-12">
											<div class="main-title">
												<h6>猜你喜欢</h6>
											</div>
										</div>
										<div class="col-md-12">
											<?php $__TAG__ = '{"num":"8","type":"current","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
											<div class="video-card video-card-list">
												<div class="video-card-image">
													<a class="play-icon" href="<?php echo mac_url_vod_play($vo); ?>"><i class="fa fa-play-circle"></i></a>
													<a href="<?php echo mac_url_vod_play($vo); ?>"> <img class="img-fluid lazy1" style="max-height: 100%;width: auto;height: 100%"
														 src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['type']['type_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" />
													</a>
												</div>
												<div class="video-card-body">
													<div class="video-title">
														<a href="<?php echo mac_url_vod_play($vo); ?>"><?php echo $vo['vod_name']; ?></a>
													</div>
													<div class="video-page text-success">
														<?php echo $vo['type']['type_name']; ?>
														<a title="" data-placement="top" data-toggle="tooltip" data-original-title="同类热门"><i class="fa fa-check-circle text-success"></i></a>
													</div>
													<div class="video-view">
														<i class="fa fa-fire" style="color: red"></i> <?php echo $vo['vod_hits']; ?> 次观看
													</div>
												</div>
											</div>
											<?php endforeach; endif; else: echo "" ;endif; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.container-fluid -->
				<!-- Sticky Footer -->
				<span style="display:none" class="mac_ulog_set" alt="设置播放页浏览记录" data-type="4" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>"
				 data-sid="<?php echo $param['sid']; ?>" data-nid="<?php echo $param['nid']; ?>"></span>
				<footer class="sticky-footer" style="margin-left: initial; margin-top: 30px;">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-lg-6 col-sm-6">
        <p class="mt-1 mb-0">© Copyright 2019 <strong class="text-dark"><?php echo $maccms['site_name']; ?></strong>. All Rights Reserved<br />
          <small class="mt-0 mb-0"><?php echo $maccms['site_tj']; ?></small> </p>
      </div>
      <div class="col-lg-6 col-sm-6 text-right">
        <div class="app"> <a  target="_self" href="/index.php/art/detail/id/5295.html"><img alt="" src="<?php echo $maccms['site_wapurl']; ?>html/style/images/google.png" /></a> <a  target="_self" href="/index.php/art/detail/id/5295.html"><img alt="" src="<?php echo $maccms['site_wapurl']; ?>html/style/images/apple.png" /></a> </div>
      </div>
    </div>
  </div>
</footer>
<div class="m-footer" style="display:none;"> <a class="navFooter" target="_self" href="/"><i class="fa fa-home"></i>首页</a>
  <button type="button" class="navFooter" id="sidebarToggle"><i class="fa fa-list"></i>分类</button>
  <a class="navFooter" target="_self" href="/index.php/vod/type/id/20.html"><i class="fas fa-layer-group"></i>试看</a> <a class="navFooter" target="_self" href="<?php echo mac_url('user/buy'); ?>"><i class="fa fa-diamond"></i>充值VIP</a> <a class="navFooter" target="_self" href="<?php echo mac_url('user/login'); ?>"><i class="fa fa-user"></i>我的</a> </div>
			</div>
			<!-- /.content-wrapper -->
		</div>
		<!-- /#wrapper -->
		<!-- Scroll to Top Button-->
		<a class="scroll-to-top rounded" href="#page-top"> <i class="fa fa-angle-up"></i> </a>
		<!-- Logout Modal-->
		<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">确定要退出?</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						真的要退出登录吗
					</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">取消</button>
						<a class="btn btn-primary" href="<?php echo mac_url('user/logout'); ?>"> 退出 </a>
					</div>
				</div>
			</div>
		</div>
		<!-- Bootstrap core JavaScript-->
		<script src="<?php echo $maccms['path_tpl']; ?>html/style/js/bootstrap.bundle.min.js"></script>
		<!-- Core plugin JavaScript-->
		<script src="<?php echo $maccms['path_tpl']; ?>html/style/js/jquery.easing.min.js"></script>
		<!-- Owl Carousel -->
		<script src="<?php echo $maccms['path_tpl']; ?>html/style/js/owl.carousel.js"></script>
		<!-- Custom scripts for all pages-->
		<script src="<?php echo $maccms['path_tpl']; ?>html/style/js/custom.js"></script>
		<script>
			$(document).on('click', '#sidebarTogglePc', function(e) {
				e.preventDefault();
				$("#block-slide-pc").slideToggle("fast")
				if ($("#block-slide-pc-down").is(":visible")) {
					$("#block-slide-pc-down").slideToggle("fast")
				}
				if ($("#block-slide-pc-down2").is(":visible")) {
					$("#block-slide-pc-down2").slideToggle("fast")
				}


				// $("#block-slide-pc-down").slideToggle("fast")
			});
			$(document).on('click', '#sidebarTogglePcDown', function(e) {
				e.preventDefault();
				$("#block-slide-pc-down").slideToggle("fast")
				if ($("#block-slide-pc").is(":visible")) {
					$("#block-slide-pc").slideToggle("fast")
				}
				if ($("#block-slide-pc-down2").is(":visible")) {
					$("#block-slide-pc-down2").slideToggle("fast")
				}


				// $("#block-slide-pc").slideToggle("fast")
			});
			$(document).on('click', '#sidebarTogglePcDown2', function(e) {
				e.preventDefault();
				$("#block-slide-pc-down2").slideToggle("fast")
				if ($("#block-slide-pc").is(":visible")) {
					$("#block-slide-pc").slideToggle("fast")
				}
				if ($("#block-slide-pc-down").is(":visible")) {
					$("#block-slide-pc-down").slideToggle("fast")
				}

			});
			$(document).on('click', '#sidebarTogglePcLeft', function(e) {
				e.preventDefault();
				$("#block-slide-pc").slideToggle("fast")
				if ($("#block-slide-pc-down").is(":visible")) {
					$("#block-slide-pc-down").slideToggle("fast")
				}
				if ($("#block-slide-pc-down2").is(":visible")) {
					$("#block-slide-pc-down2").slideToggle("fast")
				}

			});
			$(document).on('click', '#sidebarTogglePcLeftDown', function(e) {
				e.preventDefault();
				$("#block-slide-pc-down").slideToggle("fast")
				if ($("#block-slide-pc").is(":visible")) {
					$("#block-slide-pc").slideToggle("fast")
				}
				if ($("#block-slide-pc-down2").is(":visible")) {
					$("#block-slide-pc-down2").slideToggle("fast")
				}

			});
			$(document).on('click', '#sidebarTogglePcLeftDown2', function(e) {
				e.preventDefault();
				$("#block-slide-pc-down2").slideToggle("fast")
				if ($("#block-slide-pc").is(":visible")) {
					$("#block-slide-pc").slideToggle("fast")
				}
				if ($("#block-slide-pc-down").is(":visible")) {
					$("#block-slide-pc-down").slideToggle("fast")
				}

			});


			$(document).ready(function() {
				$("img.lazy").lazyload({
					effect: "fadeIn",
					threshold: 500
				});
				$("img.lazy1").lazyload({
					effect: "fadeIn",
					threshold: 500
				});

			});
		</script>
<script type="text/javascript">
		function autoScroll(obj){
			$(obj).find("ul").animate({
				marginTop : "-0.8rem"
			},500,function(){
				$(this).css({marginTop : "0px"}).find("li:first").appendTo(this);
			})
		}
		$(function(){
			setInterval('autoScroll(".fodong_tips")',3000);
		})
	</script>
	</body>
</html>
