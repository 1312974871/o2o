<?php

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

$this->registerCssFile('@web/cloud-admin/css/bootstrap.min.css', ['depends' => AppAsset::className()]);
$this->registerCssFile('@web/cloud-admin/css/font-awesome.min.css', ['depends' => AppAsset::className()]);
$this->registerCssFile('@web/cloud-admin/css/ionicons.min.css', ['depends' => AppAsset::className()]);
$this->registerCssFile('@web/cloud-admin/css/morris/morris.css', ['depends' => AppAsset::className()]);
$this->registerCssFile('@web/cloud-admin/css/jvectormap/jquery-jvectormap-1.2.2.css', ['depends' => AppAsset::className()]);
$this->registerCssFile('@web/cloud-admin/css/fullcalendar/fullcalendar.css', ['depends' => AppAsset::className()]);
$this->registerCssFile('@web/cloud-admin/css/daterangepicker/daterangepicker-bs3.css', ['depends' => AppAsset::className()]);
$this->registerCssFile('@web/cloud-admin/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css', ['depends' => AppAsset::className()]);
$this->registerCssFile('@web/cloud-admin/css/AdminLTE.css', ['depends' => AppAsset::className()]);

$this->registerJsFile('@web/cloud-admin/js/jquery-ui-1.10.3.min.js', ['depends' => AppAsset::className()]);
$this->registerJsFile('@web/cloud-admin/js/bootstrap.min.js', ['depends' => AppAsset::className()]);
$this->registerJsFile('@web/cloud-admin/js/plugins/sparkline/jquery.sparkline.min.js', ['depends' => AppAsset::className()]);
$this->registerJsFile('@web/cloud-admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js', ['depends' => AppAsset::className()]);
$this->registerJsFile('@web/cloud-admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js', ['depends' => AppAsset::className()]);
$this->registerJsFile('@web/cloud-admin/js/plugins/fullcalendar/fullcalendar.min.js', ['depends' => AppAsset::className()]);
$this->registerJsFile('@web/cloud-admin/js/plugins/jqueryKnob/jquery.knob.js', ['depends' => AppAsset::className()]);
$this->registerJsFile('@web/cloud-admin/js/plugins/daterangepicker/daterangepicker.js', ['depends' => AppAsset::className()]);
$this->registerJsFile('@web/cloud-admin/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js', ['depends' => AppAsset::className()]);
$this->registerJsFile('@web/cloud-admin/js/plugins/iCheck/icheck.min.js', ['depends' => AppAsset::className()]);
$this->registerJsFile('@web/cloud-admin/js/AdminLTE/app.js', ['depends' => AppAsset::className()]);
$this->registerJsFile('@web/cloud-admin/js/AdminLTE/dashboard.js', ['depends' => AppAsset::className()]);
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="skin-blue">
<?php $this->beginBody() ?>
<header class="header">
    <a href="../index.html" class="logo">AdminLTE</a>
    <nav class="navbar navbar-static-top" role="navigation">

        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 4 messages</li>
                        <li>
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="cloud-admin/img/avatar3.png" class="img-circle" alt="User Image"/>
                                        </div>
                                        <h4>
                                            Support Team
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="cloud-admin/img/avatar2.png" class="img-circle" alt="user image"/>
                                        </div>
                                        <h4>
                                            AdminLTE Design Team
                                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-warning"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-users warning"></i> 5 new members joined
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                    </ul>
                </li>
                <li class="dropdown tasks-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-tasks"></i>
                        <span class="label label-danger">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 9 tasks</li>
                        <li>
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <h3>
                                            Design some buttons
                                            <small class="pull-right">20%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li><!-- end task item -->
                                <li><!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            Create a nice theme
                                            <small class="pull-right">40%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">40% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li><!-- end task item -->

                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">View all tasks</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                        <span>Jane Doe <i class="caret"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header bg-light-blue">
                            <img src="cloud-admin/img/avatar3.png" class="img-circle" alt="User Image" />
                            <p>
                                Jane Doe - Web Developer
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                        <li class="user-body">
                            <div class="col-xs-4 text-center">
                                <a href="#">Followers</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Sales</a>
                            </div>

                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="row-offcanvas row-offcanvas-left">
    <aside class="left-side sidebar-offcanvas">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="cloud-admin/img/avatar3.png" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>Hello, Jane</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <ul class="sidebar-menu">
                <li class="treeview">
                    <a href="../index.html">
                        <i class="fa fa-dashboard"></i> <span>首页</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="javascript:void(0);">
                        <i class="fa fa-laptop"></i>
                        <span>系统管理</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl("user/index") ?>">
                                <i class="fa fa-angle-double-right"></i> 用户列表
                            </a>
                        </li>
                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl("worker/index") ?>">
                                <i class="fa fa-angle-double-right"></i> 工人列表
                            </a>
                        </li>
                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl("common-type/index") ?>">
                                <i class="fa fa-angle-double-right"></i> 常用类型
                            </a>
                        </li>
                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl("product/index") ?>">
                                <i class="fa fa-angle-double-right"></i> 产品列表
                            </a>
                        </li>
                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl("provider/index") ?>">
                                <i class="fa fa-angle-double-right"></i> 渠道列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="javascript:void(0);">
                        <i class="fa fa-laptop"></i>
                        <span>机构管理</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl("company/index") ?>">
                                <i class="fa fa-angle-double-right"></i> 机构列表
                            </a>
                        </li>
                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl("server-station/index") ?>">
                                <i class="fa fa-angle-double-right"></i> 网点列表
                            </a>
                        </li>
                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl("department/index") ?>">
                                <i class="fa fa-angle-double-right"></i> 部门列表
                            </a>
                        </li>
                        </li>

                    </ul>
                </li>

            </ul>
        </section>
    </aside>

    <aside class="right-side">
        <section class="content-header">
            <h1>&nbsp;<small>&nbsp;</small></h1>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </section>
        <section class="content">
            <?= $content ?>
        </section>
    </aside>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>