<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:38:"template/RX03/new1685/index/index.html";i:1589627721;s:66:"/www/wwwroot/tiaoshi.com/template/RX03/new1685/public/include.html";i:1576939674;s:63:"/www/wwwroot/tiaoshi.com/template/RX03/new1685/public/head.html";i:1577290900;s:63:"/www/wwwroot/tiaoshi.com/template/RX03/new1685/public/left.html";i:1576939699;s:63:"/www/wwwroot/tiaoshi.com/template/RX03/new1685/public/foot.html";i:1577472563;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title><?php echo $maccms['site_name']; ?></title>
<meta name="description" content="<?php echo $maccms['site_description']; ?>" />
<meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>" />
<meta name="author" content="<?php echo $maccms['site_name']; ?>" />
<!-- Favicon Icon -->
<link rel="icon" type="image/png" href="<?php echo $maccms['site_wapurl']; ?>html/style/images/favicon.png" />
<!-- Bootstrap core CSS-->
<link href="<?php echo $maccms['site_wapurl']; ?>html/style/css/bootstrap.min.css" rel="stylesheet" />
<!-- Custom fonts for this template-->
<link href="<?php echo $maccms['site_wapurl']; ?>html/style/css/all.min.css" rel="stylesheet" type="text/css" />
<!-- Custom styles for this template-->
<link href="<?php echo $maccms['site_wapurl']; ?>html/style/css/osahan.css" rel="stylesheet" />
<!-- Owl Carousel -->
<link rel="stylesheet" href="<?php echo $maccms['site_wapurl']; ?>html/style/css/owl.carousel.css" />
<link rel="stylesheet" href="<?php echo $maccms['site_wapurl']; ?>html/style/css/owl.theme.css" />
<link href="<?php echo $maccms['site_wapurl']; ?>html/style/css/sweetalert.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $maccms['site_wapurl']; ?>html/style/js/sweetalert.min.js" type="text/javascript"></script>
<script src="<?php echo $maccms['site_wapurl']; ?>html/style/js/jquery.min.js"></script>
<script src="<?php echo $maccms['site_wapurl']; ?>html/style/js/jquery.lazyload.min.js"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.autocomplete.js"></script>
<script src="<?php echo $maccms['site_wapurl']; ?>js/jquery.superslide.js"></script>
<link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
<script src="<?php echo $maccms['site_wapurl']; ?>js/jquery.base.js"></script>
<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","aid":"<?php echo $maccms['aid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
<script src="<?php echo $maccms['path']; ?>static/js/home.js"></script>
<style>.table.table-sm .div-pc {display: table-row-group;vertical-align: middle;border-color: inherit;}.table.table-sm ul {padding-left: 0;display: table-row;vertical-align: inherit;border-color: inherit;}.ui-slide-block li {float: left;border-bottom: 1px solid #dee2e6;list-style-type: none;width: 25%;padding: .3rem;overflow: hidden; text-overflow: ellipsis; white-space: nowrap;}.ui-slide-block-pc li,.ui-slide-block-pc-down li,.ui-slide-block-pc-down2 li{width: 120px;font-size: 14px;line-height: 25px !important;padding: .3rem;vertical-align: top;float: left;border-bottom: 1px solid #dee2e6;list-style-type: none;overflow: hidden; text-overflow: ellipsis; white-space: nowrap;}@media (max-width: 768px){body.sidebar-toggled #block-slide{display: block !important}.navbar-brand{width:8rem;margin-right: 0rem!important;}.table.table-sm ul{display:block;overflow:hidden;}}</style>

<style>
        .sidebar .nav-item .dropdown-menu{
            top: -100%!important;
        }
        .shadow_border{border: 1px solid #000;padding: 60px; width:100px;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            border-radius: 8px;
            -webkit-box-shadow: #666 0px 0px 10px;
            -moz-box-shadow: #666 0px 0px 10px;
            box-shadow: #666 0px 0px 10px;}


        .shadow_font{text-shadow: #f00 3px 3px 3px;}

        .nav_new{
            position: fixed;

            z-index: 99;
            width: 100%;
        }
        .ui-fix-top{
            position: fixed;
            left:0;
            right:0;
            top:0
        }
        .ui-wrapper{
            margin-top: 58px;
        }
        .ui-slide-block-pc,.ui-slide-block-pc-down2{
            background: linear-gradient(123deg, #ff516b 0%,#8876ea 100%);
            display: none;
            /*position: sticky;*/
            position: fixed;
            z-index: 100;
            margin-left: 14.1rem;
            border-bottom:5px solid #ffbfef;
            border-right:5px solid #ffbfef;
            /*border-left:5px solid #ffbfef;*/
        }

        .ui-slide-block-pc td,.ui-slide-block-pc-down2 td{
            width: 120px;
            font-size: 14px;
            line-height: 25px !important;
        }

        .ui-slide-block-pc-down{
            background: linear-gradient(123deg, #69dccc 0%,#5b4baf 100%);
            display: none;
            /*position: sticky;*/
            position: fixed;
            z-index: 100;
            margin-left: 14.1rem;
            border-bottom:5px solid #a8f7ee;
            border-right:5px solid #a8f7ee;
            /*border-left:5px solid #ffbfef;*/
        }

        .ui-slide-block-pc-down td{
            width: 120px;
            font-size: 14px;
            line-height: 25px !important;
        }

        .ui-slide-block{
            background: linear-gradient(123deg, #ff516b 0%,#8876ea 100%);
            display: none;
            position: sticky;
            position: fixed;
            z-index: 100;
        }

        .no-border{
            border-top: 0px solid #dee2e6 !important;
        }
		
		#carouselExampleCaptions{
			display: none;
		}
    
    	.link li{
    		list-style-type: none;
          	float: left;
    	}
		
		@media (max-width: 768px){
		
			.owl-carousel-category{
				display: none !important;
			}
			
			#carouselExampleCaptions{
				display: block;
			}
          
          	.link li {
    			width: 33.33%;
			}
          
			.link li a {
    			margin-left: 10px;
			}
		}
		
    </style>
</head><body id="page-top" class="">
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
    <div class="container-fluid pb-0">
      <div class="row">
        <div class="show-m clearfix"> <?php $__TAG__ = '{"order":"desc","by":"level","num":"8","paging":"false","ids":"all","id":"vo","key":"key"}';$__LIST__ = model("Topic")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <div class="show-m-list"><a href="<?php echo mac_url_topic_detail($vo); ?>"><img src="<?php echo $vo['topic_pic']; ?>" alt="<?php echo $vo['topic_name']; ?>">
            <p><?php echo $vo['topic_name']; ?></p>
            </a></div>
          <?php endforeach; endif; else: echo "" ;endif; ?> </div>
      </div>
      <div class="top-category section-padding mb-4">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-carousel owl-carousel-category"> <?php $__TAG__ = '{"order":"desc","by":"level","num":"8","paging":"false","ids":"all","id":"vo","key":"key"}';$__LIST__ = model("Topic")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
              <div class="item">
                <div class="category-item"> <a href="<?php echo mac_url_topic_detail($vo); ?>"> <img class="img-fluid" src="<?php echo $vo['topic_pic']; ?>" alt="<?php echo $vo['topic_name']; ?>" />
                  <h6><?php echo $vo['topic_name']; ?></h6>
                  </a> </div>
              </div>
              <?php endforeach; endif; else: echo "" ;endif; ?> </div>
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <?php $__TAG__ = '{"order":"desc","by":"level","num":"4","paging":"false","ids":"all","type":"all","level":"9","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $key; ?>"></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
              </ol>
              <div class="carousel-inner"> <?php $__TAG__ = '{"order":"desc","by":"level","num":"4","paging":"false","ids":"all","type":"all","level":"9","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <div class="carousel-item"> <a href="<?php echo mac_url_vod_play($vo); ?>"> <img class="d-block w-100" data-src="<?php echo $vo['vod_pic_slide']; ?>" alt="<?php echo $vo['vod_name']; ?>" src="<?php echo $vo['vod_pic_slide']; ?>" data-holder-rendered="true" /> </a> </div>
                <?php endforeach; endif; else: echo "" ;endif; ?> </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
          </div>
        </div>
      </div>
      <hr />
      <div class="video-block section-padding">
        <div class="row">
          <div class="col-md-12">
            <div class="main-title">
              <h6>热门视频</h6>
            </div>
          </div>
          <?php $__TAG__ = '{"num":"12","by":"hits","order":"desc","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <div class="col-xl-3 col-sm-6 mb-3 video-xz">
            <div class="video-card">
              <div class="video-card-image"> <a class="play-icon" href="<?php echo mac_url_vod_play($vo); ?>"><i class="fas fa-play-circle"></i></a> <a href="<?php echo mac_url_vod_play($vo); ?>"> <img class="img-fluid lazy1" src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" /> </a>
                <div class="time"> <?php echo $vo['type']['type_name']; ?> </div>
              </div>
              <div class="video-card-body">
                <div class="video-title"> <a href="<?php echo mac_url_vod_play($vo); ?>"><?php echo $vo['vod_name']; ?></a> </div>
                <div class="video-page text-success"> <a href="<?php echo mac_url_type($vo['type']); ?>"><?php echo $vo['type']['type_name']; ?></a> <a title="" data-placement="top" data-toggle="tooltip" data-original-title="精选"><i class="fa fa-check-circle text-success"></i></a> </div>
                <div class="video-view"> <?php echo $vo['vod_hits']; ?> 次观看 <i class="fa fa-calendar-alt"></i> <?php echo mac_day($vo['vod_time']); ?> </div>
              </div>
            </div>
          </div>
          <?php endforeach; endif; else: echo "" ;endif; ?> </div>
      </div>
      <hr class="mt-0" />
      <div class="video-block section-padding">
        <div class="row">
          <div class="col-md-12">
            <div class="main-title">
              <h6>最近更新</h6>
            </div>
          </div>
          <?php $__TAG__ = '{"num":"8","by":"time","order":"desc","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <div class="col-xl-3 col-sm-6 mb-3 video-xz">
            <div class="video-card">
              <div class="video-card-image"> <a class="play-icon" href="<?php echo mac_url_vod_play($vo); ?>"><i class="fas fa-play-circle"></i></a> <a href="<?php echo mac_url_vod_play($vo); ?>"> <img class="img-fluid lazy" src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" /> </a>
                <div class="time"> <?php echo $vo['type']['type_name']; ?> </div>
              </div>
              <div class="video-card-body">
                <div class="video-title"> <a href="<?php echo mac_url_vod_play($vo); ?>"><?php echo $vo['vod_name']; ?></a> </div>
                <div class="video-page text-success"> <a href="<?php echo mac_url_type($vo['type']); ?>"><?php echo $vo['type']['type_name']; ?></a> <a title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified"><i class="fa fa-check-circle text-success"></i></a> </div>
                <div class="video-view"> <?php echo $vo['vod_hits']; ?> 次观看 <i class="fas fa-calendar-alt"></i> <?php echo mac_day($vo['vod_time']); ?> </div>
              </div>
            </div>
          </div>
          <?php endforeach; endif; else: echo "" ;endif; ?> </div>
      </div>
      <?php $__TAG__ = '{"order":"asc","by":"sort","ids":"1,2,3,4","id":"vo1","key":"key1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>
      <hr class="mt-0" />
      <div class="video-block section-padding">
        <div class="row">
          <div class="col-md-12">
            <div class="main-title">
              <h6><?php echo $vo1['type_name']; ?></h6>
            </div>
          </div>
          <?php $__TAG__ = '{"num":"8","order":"desc","by":"time","key":"key2","id":"vo2","type":"'.$vo1['type_id'].'"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
          <div class="col-xl-3 col-sm-6 mb-3 video-xz">
            <div class="video-card">
              <div class="video-card-image"> <a class="play-icon" href="<?php echo mac_url_vod_play($vo2); ?>"><i class="fas fa-play-circle"></i></a> <a href="<?php echo mac_url_vod_play($vo2); ?>"> <img class="img-fluid lazy" src="<?php echo mac_url_img($vo2['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo2['vod_pic']); ?>" /> </a>
                <div class="time"> <?php echo $vo2['type']['type_name']; ?> </div>
              </div>
              <div class="video-card-body">
                <div class="video-title"> <a href="<?php echo mac_url_vod_play($vo2); ?>"><?php echo $vo2['vod_name']; ?></a> </div>
                <div class="video-page text-success"> <a href="<?php echo mac_url_type($vo2['type']); ?>"><?php echo $vo2['type']['type_name']; ?></a> <a title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified"><i class="fa fa-check-circle-o"></i></a> </div>
                <div class="video-view"> <?php echo $vo2['vod_hits']; ?> 次观看   <i class="fa fa-calendar-plus-o"></i> <?php echo mac_day($vo2['vod_time']); ?> </div>
              </div>
            </div>
          </div>
          <?php endforeach; endif; else: echo "" ;endif; ?> </div>
      </div>
      <?php endforeach; endif; else: echo "" ;endif; ?>
      <hr class="mt-0" />
      <div class="video-block section-padding">
        <div class="row">
          <div class="col-md-12">
            <div class="main-title">
              <h6>友情链接</h6>
            </div>
          </div>
          <div class="col-xl-12 col-sm-12 mb-3" style="padding: 0;"> <?php $__TAG__ = '{"order":"desc","by":"sort","type":"font","id":"vo","key":"key"}';$__LIST__ = model("Link")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <div class="link">
              <ul class="link-ul" style="padding-left: 0;">
                <li class="col-xl-1 col-sm-4 mb-2"> <a href="<?php echo $vo['link_url']; ?>"><?php echo $vo['link_name']; ?></a> </li>
              </ul>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?> </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
    <!-- Sticky Footer -->
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
  <a class="navFooter" target="_self" href="/index.php/vod/type/id/20.html"><i class="fas fa-layer-group"></i>试看</a> <a class="navFooter" target="_self" href="<?php echo mac_url('user/buy'); ?>"><i class="fa fa-diamond"></i>充值VIP</a> <a class="navFooter" target="_self" href="<?php echo mac_url('user/login'); ?>"><i class="fa fa-user"></i>我的</a> </div> </div>
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
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
      </div>
      <div class="modal-body"> 真的要退出登录吗 </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">取消</button>
        <a class="btn btn-primary" href="<?php echo mac_url('user/logout'); ?>" > 退出 </a> </div>
    </div>
  </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo $maccms['site_wapurl']; ?>html/style/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo $maccms['site_wapurl']; ?>html/style/js/jquery.easing.min.js"></script>
<!-- Owl Carousel -->
<script src="<?php echo $maccms['site_wapurl']; ?>html/style/js/owl.carousel.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo $maccms['site_wapurl']; ?>html/style/js/custom.js"></script>
  <script>

    $(document).on('click','#sidebarTogglePc',function (e) {
        e.preventDefault();
        $("#block-slide-pc").slideToggle("fast")
        if($("#block-slide-pc-down").is(":visible")){
            $("#block-slide-pc-down").slideToggle("fast")
        }
		if($("#block-slide-pc-down2").is(":visible")){
            $("#block-slide-pc-down2").slideToggle("fast")
        }


        // $("#block-slide-pc-down").slideToggle("fast")
    });
    $(document).on('click','#sidebarTogglePcDown',function (e) {
        e.preventDefault();
        $("#block-slide-pc-down").slideToggle("fast")
		if($("#block-slide-pc").is(":visible")){
            $("#block-slide-pc").slideToggle("fast")
        }
        if($("#block-slide-pc-down2").is(":visible")){
            $("#block-slide-pc-down2").slideToggle("fast")
        }


        // $("#block-slide-pc").slideToggle("fast")
    });
	$(document).on('click','#sidebarTogglePcDown2',function (e) {
        e.preventDefault();
        $("#block-slide-pc-down2").slideToggle("fast")
		if($("#block-slide-pc").is(":visible")){
            $("#block-slide-pc").slideToggle("fast")
        }
        if($("#block-slide-pc-down").is(":visible")){
            $("#block-slide-pc-down").slideToggle("fast")
        }

    });
    $(document).on('click','#sidebarTogglePcLeft',function (e) {
        e.preventDefault();
        $("#block-slide-pc").slideToggle("fast")
        if($("#block-slide-pc-down").is(":visible")){
            $("#block-slide-pc-down").slideToggle("fast")
        }
        if($("#block-slide-pc-down2").is(":visible")){
            $("#block-slide-pc-down2").slideToggle("fast")
        }

    });
    $(document).on('click','#sidebarTogglePcLeftDown',function (e) {
        e.preventDefault();
        $("#block-slide-pc-down").slideToggle("fast")
        if($("#block-slide-pc").is(":visible")){
            $("#block-slide-pc").slideToggle("fast")
        }
        if($("#block-slide-pc-down2").is(":visible")){
            $("#block-slide-pc-down2").slideToggle("fast")
        }

    });
    $(document).on('click','#sidebarTogglePcLeftDown2',function (e) {
        e.preventDefault();
        $("#block-slide-pc-down2").slideToggle("fast")
        if($("#block-slide-pc").is(":visible")){
            $("#block-slide-pc").slideToggle("fast")
        }
        if($("#block-slide-pc-down").is(":visible")){
            $("#block-slide-pc-down").slideToggle("fast")
        }

    });


    $(document).ready(function() {
		$("ol.carousel-indicators li:first").addClass("active");
		$("div.carousel-inner div:first").addClass("active");
        $("img.lazy").lazyload({
            effect : "fadeIn",
            threshold : 500
        });
        $("img.lazy1").lazyload({
            effect : "fadeIn",
            threshold : 500
        });

    });
</script>
</body>
</html>
