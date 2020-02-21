<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/css/nivo-lightbox.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/css/nivo-lightbox-theme/default/default.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/css/owl.carousel.css" media="screen">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/css/owl.theme.css" media="screen">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/css/animate.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/css/style.css">
	<!-- boxed bg -->
	<link id="bodybg" href="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/bodybg/bg1.css" rel="stylesheet" type="text/css" />
  	<!-- template skin -->
  	<link id="t-colors" href="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/color/default.css" rel="stylesheet">
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<div id="wrapper">
		<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
			<div class="top-area">
				<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
					<p class="bold text-left">Senin - Minggu, 08.00 - 22.00 WIB </p>
					</div>
					<div class="col-sm-6 col-md-6">
					<p class="bold text-right">Hotline +62 008 65 001</p>
					</div>
				</div>
				</div>
			</div>
			<div class="container navigation">
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="index.php?r=site/index">
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/img/logo.png" alt="" width="200" height="40" />
					</a>
				</div>
				<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php?r=site/index">Beranda</a></li>
						<li><a href="#service">Layanan</a></li>
						<li><a href="#doctor">Dokter</a></li>
						<li><a href="#testimonial">Testimoni</a></li>
						<li><a href="#pricing">Paket Harga</a></li>
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right">Ekstra</span>Menu <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#service">Pesan Layanan</a></li>
							<li><a href="#">Login User</a></li>
							<li><a href="index.php?r=site/login">Login Admin</a></li>
						</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		
	</div><!-- footer -->
	<footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Tentang RS. Sumber Waras</h5>
                <p>
				  RS. Sumber waras adalah sebuah institusi perawatan kesehatan profesional yang pelayanannya
				  disediakan oleh dokter, perawat, dan tenaga ahli kesehatan lainya.
                </p>
              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Informasi</h5>
                <ul>
                  <li><a href="#">Beranda</a></li>
                  <li><a href="#">Laboratorium</a></li>
                  <li><a href="#">Layanan Medis</a></li>
                  <li><a href="#">Syarat dan ketentuan</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>RS. Sumber Waras</h5>
                <p>
					Provide best quality healthcare for you
                </p>
                <ul>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Senin - Minggu, 08.00 - 22.00 WIB
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> +62 0888 904 711
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> hello@medicio.com
                  </li>

                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Lokasi</h5>
                <p>Jl. Muria Raya No.354, Kedundung, Magersari, Kota Mojokerto - Jawa Timur</p>

              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Follow us</h5>
                <ul class="company-social">
                  <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                  <li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInLeft" data-wow-delay="0.1s">
                <div class="text-left">
					Copyright &copy; <?php echo date('Y'); ?> by Artworks.<br/>
					All Rights Reserved.<br/>
					<?php echo Yii::powered(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>


	<!-- blueprint JS framework -->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/js/jquery.min.js"></script>
  	<script src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/js/bootstrap.min.js"></script>
  	<script src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/js/jquery.easing.min.js"></script>
  	<script src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/js/wow.min.js"></script>
  	<script src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/js/jquery.scrollTo.js"></script>
  	<script src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/js/jquery.appear.js"></script>
  	<script src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/js/stellar.js"></script>
  	<script src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  	<script src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/js/owl.carousel.min.js"></script>
  	<script src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/js/nivo-lightbox.min.js"></script>
  	<script src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/js/custom.js"></script>

</body>
</html>
