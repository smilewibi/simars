<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/adminLTE/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/adminLTE/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/adminLTE/dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/adminLTE/plugins/iCheck/flat/blue.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/adminLTE/plugins/morris/morris.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/adminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/adminLTE/bower_components/font-awesome/css/font-awesome.min.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body class="hold-transition skin-blue sidebar-mini">

	<div class="wrap">
		<header class="main-header">
			<!-- Logo -->
			<a href="index.php?r=site/admin" class="logo">
			<!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini"><b>D</b>A</span>
			<!-- logo for regular state and mobile devices -->
			<span class="logo-lg"><b>Dashboard</b>Admin</span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>

			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
				<!-- User Account: style can be found in dropdown.less -->
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="adminLTE/dist/img/avatar5.png" class="user-image" alt="User Image">
						<span class="hidden-xs"><?= Yii::app()->user->name ?></span>
					</a>
					<ul class="dropdown-menu">
						<!-- User image -->
						<li class="user-header">
							<img src="adminLTE/dist/img/avatar5.png" class="img-circle" alt="User Image">

							<p>
							<?= Yii::app()->user->name ?>
							<small>Member since Nov. 2012</small>
							</p>
						</li>
						<!-- Menu Footer-->
						<li class="user-footer">
							<div class="pull-left">
							<a href="#" class="btn btn-default btn-flat">Profil</a>
							</div>
							<div class="pull-right">
								<a class="btn btn-default btn-flat" href="index.php?r=site/logout">Keluar</a>
							</div>
						</li>
					</ul>
				</li>
				<!-- Control Sidebar Toggle Button -->
				<li>
					<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
				</li>
				</ul>
			</div>
			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
			<img src="adminLTE/dist/img/avatar5.png" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
			<p><?= Yii::app()->user->name ?></p>
			<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- search form -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
			<input type="text" name="q" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
					<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</form>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			<li class="header">MAIN NAVIGATION</li>
				<li class="treeview">
					<a href="index.php?r=site/admin">
						<i class="fa fa-pencil-square-o"></i> <span>Dashboard</span>
					</a>
				</li>
				<li class="treeview">
					<a href="index.php?r=dokter/admin">
						<i class="fa fa-stethoscope"></i> <span>Dokter</span>
					</a>
				</li>
				<li class="treeview">
					<a href="index.php?r=pasien/admin">
						<i class="fa  fa-wheelchair"></i> <span>Pasien</span>
					</a>
				</li>
				<li class="treeview">
					<a href="index.php?r=pembayaran/admin">
						<i class="fa fa-money"></i> <span>Pembayaran</span>
					</a>
				</li>
				<li class="treeview">
					<a href="index.php?r=petugas/admin">
						<i class="fa fa-user-md"></i> <span>Petugas</span>
					</a>
				</li>
				<li class="treeview">
					<a href="index.php?r=rawatinap/admin">
						<i class="fa fa-ambulance"></i> <span>Rawat Inap</span>
					</a>
				</li>
				<li class="treeview">
					<a href="index.php?r=ruang/admin">
						<i class="fa fa-plus-square"></i> <span>Ruang</span>
					</a>
				</li>
				<li class="treeview">
					<a href="index.php?r=site/logout">
						<i class="fa fa-close"></i> <span>Keluar</span>
					</a>
				</li>
			</li>
		</ul>
		</section>
		<!-- /.sidebar -->
	</aside>

	<!-- Content Wrapper. Contains page content -->

		<div class="content-wrapper">
		<!-- Content Header (Page header) -->
			<section class="content-header">
			<h1>
				Dashboard
				<small>Control panel</small>
			</h1>
			</section>

			<!-- Main content -->
			<section class="content">
				<?php echo $content; ?>
			</section>

			<div id="main-footer">
				Copyright &copy; <?php echo date('Y'); ?> by Smile.
				All Rights Reserved.
				<?php echo Yii::powered(); ?>
			</div><!-- footer -->
		</div>
		
		
	</div>

<!-- blueprint JS framework -->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
  	<script src="<?php echo Yii::app()->request->baseUrl; ?>//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  	<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminLTE/plugins/sparkline/jquery.sparkline.min.js"></script>
  	<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  	<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminLTE/plugins/fastclick/fastclick.min.js"></script>
  	<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminLTE/dist/js/app.min.js"></script>
  	<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminLTE/dist/js/pages/dashboard.js"></script>
  	<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminLTE/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
