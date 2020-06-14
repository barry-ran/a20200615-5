<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:62:"/web/bt/public/../application/admin/view/game/tixian/edit.html";i:1558774391;s:50:"/web/bt/application/admin/view/layout/default.html";i:1558774088;s:47:"/web/bt/application/admin/view/common/meta.html";i:1558774089;s:49:"/web/bt/application/admin/view/common/script.html";i:1558774089;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<link rel="shortcut icon" href="/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>
    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG && !$config['fastadmin']['multiplenav']): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <form id="edit-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Name'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-name" data-rule="required" class="form-control form-control" name="row[name]" type="text" value="<?php echo $row['name']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Uid'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-uid" data-rule="required" class="form-control form-control" name="row[uid]" type="number" value="<?php echo $row['uid']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Point'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-point" data-rule="required" class="form-control form-control" step="0.01" name="row[point]" type="number" value="<?php echo $row['point']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Upoint'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-upoint" data-rule="required" class="form-control form-control" step="0.01" name="row[upoint]" type="number" value="<?php echo $row['upoint']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Ttype'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-ttype" data-rule="required" class="form-control form-control" name="row[ttype]" type="text" value="<?php echo $row['ttype']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Filedata'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-filedata" data-rule="required" class="form-control form-control" name="row[filedata]" type="text" value="<?php echo $row['filedata']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Payurl'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-payurl" data-rule="required" class="form-control form-control" name="row[payurl]" type="text" value="<?php echo $row['payurl']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Account'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-account" data-rule="required" class="form-control form-control" name="row[account]" type="text" value="<?php echo $row['account']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Status'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-status" data-rule="required" class="form-control form-control" name="row[status]" type="number" value="<?php echo $row['status']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Note'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-note" data-rule="required" class="form-control form-control" name="row[note]" type="text" value="<?php echo $row['note']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Paymentno'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-paymentno" data-rule="required" class="form-control form-control" name="row[paymentno]" type="text" value="<?php echo $row['paymentno']; ?>">
        </div>
    </div>
    <div class="form-group layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('OK'); ?></button>
            <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
        </div>
    </div>
</form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo $site['version']; ?>"></script>
    </body>
</html>