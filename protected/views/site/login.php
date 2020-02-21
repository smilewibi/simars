<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

    <!-- Section: intro -->
    <section id="intro" class="intro">
      <div class="intro-content">
        <div class="container">
          <div class="row">
		  	<div class="col-lg-6" style="margin-top:-50px">
				<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
				<h2 class="h-ultra">Sumber Waras group</h2>
				</div>
				<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
				<h4 class="h-light">Provide best quality healthcare for you</h4>
				</div>
				<div class="well well-trans">
				<div class="wow fadeInRight" data-wow-delay="0.1s">

					<ul class="lead-list">
					<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Pelayanan rumah sakit yang lengkap</strong><br />Kami adalah rumah sakit internasional dengan pelayanan <br>terlengkap</span></li>
					<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Konsultasi dokter spesialis</strong><br />Kami memberikan pelayanan yang maksimal dengan memberikan <br>konsultasi dengan dokter spesialis</span></li>
					<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Pelayanan yang ramah</strong><br />Sistem manajemen pelayanan kami adalah yang terbaik</span></li>
					</ul>
					<p class="text-right wow bounceIn" data-wow-delay="0.4s">
					<a href="#" class="btn btn-skin btn-lg">Tentang Kami <i class="fa fa-angle-right"></i></a>
					</p>
				</div>
				</div>
			</div>
            <div class="col-lg-6">
              <div class="form-wrapper">
                <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">

                  <div class="panel panel-skin">
                    <div class="panel-heading">
                      <h3 class="panel-title"><span class="fa fa-user"></span> Login <br><small>Please fill out the following form with your login credentials:</small></h3>
                    </div>
                    <div class="panel-body">                      
						<?php $form=$this->beginWidget('CActiveForm', array(
								'id'=>'login-form',
								'enableClientValidation'=>true,
								'clientOptions'=>array(
									'validateOnSubmit'=>true,
								),
							)); ?>
                        <div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
								<label><?php echo $form->labelEx($model,'username'); ?></label>
									<?php echo $form->textField($model,'username'); ?>
									<?php echo $form->error($model,'username'); ?>
								</div>
							</div>
						  	<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
								<label><?php echo $form->labelEx($model,'password'); ?></label>
								<?php echo $form->passwordField($model,'password'); ?>
								<?php echo $form->error($model,'password'); ?>
								</div>
							</div>
						</div>
						<div class="row rememberMe" style="margin-left: 8px">
							<?php echo $form->checkBox($model,'rememberMe'); ?>
							<?php echo $form->label($model,'rememberMe'); ?>
							<?php echo $form->error($model,'rememberMe'); ?>
						</div>

						<div class="row buttons" style="margin-left: 5px">
							<?php echo CHtml::submitButton('Login', ['class'=>'btn btn-skin btn-lg']); ?>
						</div>

						<?php $this->endWidget(); ?>

                        <p class="lead-footer">Fields with <span class="required">*</span> are required.<br>Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.</p>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

	<!-- /Section: intro -->
	
	<section id="boxes" class="home-section paddingtop-80">

	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
					<div class="box text-center">

						<i class="fa fa-check fa-3x circled bg-skin"></i>
						<h4 class="h-bold">Pesan Layanan</h4>
						<p>
							Pemesanan layanan cepat, tanggap darurat pada menu Layanan. Kami akan menyediakan ambulance yang siap berangkat 24 Jam
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-3 col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
					<div class="box text-center">

						<i class="fa fa-list-alt fa-3x circled bg-skin"></i>
						<h4 class="h-bold">Pilih Paket</h4>
						<p>
							Pilih paket sesuai kebutuhan, tersedia paket kelas I - III, VIP, dan VVIP
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-3 col-md-3">
			<div class="wow fadeInUp" data-wow-delay="0.2s">
				<div class="box text-center">
				<i class="fa fa-user-md fa-3x circled bg-skin"></i>
				<h4 class="h-bold">Ditangani oleh dokter spesialis</h4>
				<p>
					Kami memberikan pelayanan yang maksimal dengan memberikan konsultasi dengan dokter spesialis
				</p>
				</div>
			</div>
			</div>
			<div class="col-sm-3 col-md-3">
			<div class="wow fadeInUp" data-wow-delay="0.2s">
				<div class="box text-center">

				<i class="fa fa-hospital-o fa-3x circled bg-skin"></i>
				<h4 class="h-bold">Mendapat laporan diagnosa</h4>
				<p>
					Pasien akan selalu mendapatkan lopran dan resep obat sebagai layanan maksimal kami
				</p>
				</div>
			</div>
			</div>
		</div>
	</div>

</section>
<!-- /Section: boxes -->

<!-- Section: services -->
<section id="service" class="home-section nopadding paddingtop-60">

	<section id="callaction" class="home-section paddingtop-40">
		<div class="container">
		<div class="row">
			<div class="col-md-12">
			<div class="callaction bg-gray">
				<div class="row">
				<div class="col-md-8">
					<div class="wow fadeInUp" data-wow-delay="0.1s">
					<div class="cta-text">
						<h3>Dalam Keadaan Darurat? Butuh Bantuan Sekarang?</h3>
						<p>Provide best quality healthcare for you</p>
					</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="wow lightSpeedIn" data-wow-delay="0.1s">
					<div class="cta-btn">
						<a href="#" class="btn btn-skin btn-lg">Pesan Layanan Sekarang</a>
					</div>
					</div>
				</div>
				</div>
			</div>
			</div>
		</div>
		</div>
	</section>

	<div class="container">

	<div class="row">
		<div class="col-sm-6 col-md-6">
		<div class="wow fadeInUp" data-wow-delay="0.2s">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/img/dummy/img-1.jpg" class="img-responsive" alt="" />
		</div>
		</div>
		<div class="col-sm-3 col-md-3">

		<div class="wow fadeInRight" data-wow-delay="0.1s">
			<div class="service-box">
			<div class="service-icon">
				<span class="fa fa-stethoscope fa-3x"></span>
			</div>
			<div class="service-desc">
				<h5 class="h-light">Pemeriksaan Medis</h5>
				<p>Layanan pemeriksaan kesehatan secara umum</p>
			</div>
			</div>
		</div>

		<div class="wow fadeInRight" data-wow-delay="0.2s">
			<div class="service-box">
			<div class="service-icon">
				<span class="fa fa-wheelchair fa-3x"></span>
			</div>
			<div class="service-desc">
				<h5 class="h-light">Pelayanan Keperawatan</h5>
				<p>Pelayanan keperawatan kesehatan 1x24 Jam</p>
			</div>
			</div>
		</div>
		<div class="wow fadeInRight" data-wow-delay="0.3s">
			<div class="service-box">
			<div class="service-icon">
				<span class="fa fa-plus-square fa-3x"></span>
			</div>
			<div class="service-desc">
				<h5 class="h-light">Farmasi</h5>
				<p>Pelayanan Obat-obatan terlengkap</p>
			</div>
			</div>
		</div>


		</div>
		<div class="col-sm-3 col-md-3">

		<div class="wow fadeInRight" data-wow-delay="0.1s">
			<div class="service-box">
			<div class="service-icon">
				<span class="fa fa-h-square fa-3x"></span>
			</div>
			<div class="service-desc">
				<h5 class="h-light">Pelayanan Kandungan</h5>
				<p>Pelayanan khusus oleh dokter spesialis kandungan</p>
			</div>
			</div>
		</div>

		<div class="wow fadeInRight" data-wow-delay="0.2s">
			<div class="service-box">
			<div class="service-icon">
				<span class="fa fa-filter fa-3x"></span>
			</div>
			<div class="service-desc">
				<h5 class="h-light">Neurologi</h5>
				<p>Pelayanan khusus oleh dokter spesialis neurologi</p>
			</div>
			</div>
		</div>
		<div class="wow fadeInRight" data-wow-delay="0.3s">
			<div class="service-box">
			<div class="service-icon">
				<span class="fa fa-user-md fa-3x"></span>
			</div>
			<div class="service-desc">
				<h5 class="h-light">Rawat Inap</h5>
				<p>Pelayanan Rawat Inap IGD, ICU 24 Jam</p>
			</div>
			</div>
		</div>

		</div>

	</div>
	</div>
</section>
<!-- /Section: services -->

<!-- Section: team -->
<section id="doctor" class="home-section bg-gray paddingbot-60">
	<div class="container marginbot-50">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
		<div class="wow fadeInDown" data-wow-delay="0.1s">
			<div class="section-heading text-center">
			<h2 class="h-bold">Dokter</h2>
			<p>Provide best quality healthcare for you</p>
			</div>
		</div>
		<div class="divider-short"></div>
		</div>
	</div>
	</div>

	<div class="container">
	<div class="row">
		<div class="col-lg-12">

		<div id="filters-container" class="cbp-l-filters-alignLeft">
			<div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All (
			<div class="cbp-filter-counter"></div>)</div>
			<div data-filter=".cardiologist" class="cbp-filter-item">Cardiologist (
			<div class="cbp-filter-counter"></div>)</div>
			<div data-filter=".psychiatrist" class="cbp-filter-item">Psychiatrist (
			<div class="cbp-filter-counter"></div>)</div>
			<div data-filter=".neurologist" class="cbp-filter-item">Neurologist (
			<div class="cbp-filter-counter"></div>)</div>
		</div>

		<div id="grid-container" class="cbp-l-grid-team">
			<ul>
			<li class="cbp-item psychiatrist">
				<a href="doctors/member1.html" class="cbp-caption cbp-singlePage">
				<div class="cbp-caption-defaultWrap">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/img/team/1.jpg" alt="" width="100%">
				</div>
				<div class="cbp-caption-activeWrap">
					<div class="cbp-l-caption-alignCenter">
					<div class="cbp-l-caption-body">
						<div class="cbp-l-caption-text">VIEW PROFILE</div>
					</div>
					</div>
				</div>
				</a>
				<a href="doctors/member1.html" class="cbp-singlePage cbp-l-grid-team-name">Alice Grue</a>
				<div class="cbp-l-grid-team-position">Psychiatrist</div>
			</li>
			<li class="cbp-item cardiologist">
				<a href="doctors/member2.html" class="cbp-caption cbp-singlePage">
				<div class="cbp-caption-defaultWrap">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/img/team/2.jpg" alt="" width="100%">
				</div>
				<div class="cbp-caption-activeWrap">
					<div class="cbp-l-caption-alignCenter">
					<div class="cbp-l-caption-body">
						<div class="cbp-l-caption-text">VIEW PROFILE</div>
					</div>
					</div>
				</div>
				</a>
				<a href="doctors/member2.html" class="cbp-singlePage cbp-l-grid-team-name">Joseph Murphy</a>
				<div class="cbp-l-grid-team-position">Cardiologist</div>
			</li>
			<li class="cbp-item cardiologist">
				<a href="doctors/member3.html" class="cbp-caption cbp-singlePage">
				<div class="cbp-caption-defaultWrap">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/img/team/3.jpg" alt="" width="100%">
				</div>
				<div class="cbp-caption-activeWrap">
					<div class="cbp-l-caption-alignCenter">
					<div class="cbp-l-caption-body">
						<div class="cbp-l-caption-text">VIEW PROFILE</div>
					</div>
					</div>
				</div>
				</a>
				<a href="doctors/member3.html" class="cbp-singlePage cbp-l-grid-team-name">Alison Davis</a>
				<div class="cbp-l-grid-team-position">Cardiologist</div>
			</li>
			<li class="cbp-item neurologist">
				<a href="doctors/member4.html" class="cbp-caption cbp-singlePage">
				<div class="cbp-caption-defaultWrap">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/img/team/4.jpg" alt="" width="100%">
				</div>
				<div class="cbp-caption-activeWrap">
					<div class="cbp-l-caption-alignCenter">
					<div class="cbp-l-caption-body">
						<div class="cbp-l-caption-text">VIEW PROFILE</div>
					</div>
					</div>
				</div>
				</a>
				<a href="doctors/member4.html" class="cbp-singlePage cbp-l-grid-team-name">Adam Taylor</a>
				<div class="cbp-l-grid-team-position">Neurologist</div>
			</li>

			</ul>
		</div>
		</div>
	</div>
	</div>

</section>
<!-- /Section: team -->

<!-- Section: testimonial -->
<section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">

	<div class="carousel-reviews broun-block">
	<div class="container">
		<div class="row">
		<div id="carousel-reviews" class="carousel slide" data-ride="carousel">

			<div class="carousel-inner">
			<div class="item active">
				<div class="col-md-4 col-sm-6">
				<div class="block-text rel zmin">
					<a title="" href="#">Emergency Contraception</a>
					<p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
					<ins class="ab zmin sprite sprite-i-triangle block"></ins>
				</div>
				<div class="person-text rel text-light">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/img/testimonials/1.jpg" alt="" class="person img-circle" />
					<a title="" href="#">Anna</a>
					<span>Chicago, Illinois</span>
				</div>
				</div>
				<div class="col-md-4 col-sm-6 hidden-xs">
				<div class="block-text rel zmin">
					<a title="" href="#">Orthopedic Surgery</a>
					<p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
					<ins class="ab zmin sprite sprite-i-triangle block"></ins>
				</div>
				<div class="person-text rel text-light">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/img/testimonials/2.jpg" alt="" class="person img-circle" />
					<a title="" href="#">Matthew G</a>
					<span>San Antonio, Texas</span>
				</div>
				</div>
				<div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
				<div class="block-text rel zmin">
					<a title="" href="#">Medical consultation</a>
					<p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
					<ins class="ab zmin sprite sprite-i-triangle block"></ins>
				</div>
				<div class="person-text rel text-light">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/img/testimonials/3.jpg" alt="" class="person img-circle" />
					<a title="" href="#">Scarlet Smith</a>
					<span>Dallas, Texas</span>
				</div>
				</div>
			</div>
			<div class="item">
				<div class="col-md-4 col-sm-6">
				<div class="block-text rel zmin">
					<a title="" href="#">Birth control pills</a>
					<p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
					<ins class="ab zmin sprite sprite-i-triangle block"></ins>
				</div>
				<div class="person-text rel text-light">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/img/testimonials/4.jpg" alt="" class="person img-circle" />
					<a title="" href="#">Lucas Thompson</a>
					<span>Austin, Texas</span>
				</div>
				</div>
				<div class="col-md-4 col-sm-6 hidden-xs">
				<div class="block-text rel zmin">
					<a title="" href="#">Radiology</a>
					<p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
					<ins class="ab zmin sprite sprite-i-triangle block"></ins>
				</div>
				<div class="person-text rel text-light">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/img/testimonials/5.jpg" alt="" class="person img-circle" />
					<a title="" href="#">Ella Mentree</a>
					<span>Fort Worth, Texas</span>
				</div>
				</div>
				<div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
				<div class="block-text rel zmin">
					<a title="" href="#">Cervical Lesions</a>
					<p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
					<ins class="ab zmin sprite sprite-i-triangle block"></ins>
				</div>
				<div class="person-text rel text-light">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/img/testimonials/6.jpg" alt="" class="person img-circle" />
					<a title="" href="#">Suzanne Adam</a>
					<span>Detroit, Michigan</span>
				</div>
				</div>
			</div>


			</div>

			<a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
		</div>
	</div>
	</div>
</section>
<!-- /Section: testimonial -->

<!-- Section: pricing -->
<section id="pricing" class="home-section bg-gray paddingbot-60">
	<div class="container marginbot-50">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
		<div class="wow lightSpeedIn" data-wow-delay="0.1s">
			<div class="section-heading text-center">
			<h2 class="h-bold">Paket Kesehatan</h2>
			<p>Provide best quality healthcare for you</p>
			</div>
		</div>
		<div class="divider-short"></div>
		</div>
	</div>
	</div>

	<div class="container">

	<div class="row">

		<div class="col-sm-4 pricing-box">
		<div class="wow bounceInUp" data-wow-delay="0.1s">
			<div class="pricing-content general">
			<h2>Kelas I - III</h2>
			<h3>Rp. 50<sup>.000</sup> <span>/ Hari</span></h3>
			<ul>
				<li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
				<li>Dokter Umum <i class="fa fa-check icon-success"></i></li>
				<li>Pemeriksaan keseluruhan<i class="fa fa-check icon-success"></i></li>
				<li><del>Laporan Kesehatan</del> <i class="fa fa-times icon-danger"></i></li>
			</ul>

			<div class="price-bottom">
				<a href="#" class="btn btn-skin btn-lg">Pesan</a>
			</div>
			</div>
		</div>
		</div>

		<div class="col-sm-4 pricing-box featured-price">
		<div class="wow bounceInUp" data-wow-delay="0.3s">
			<div class="pricing-content featured">
			<h2>VVIP</h2>
			<h3>Rp. 80<sup>.000</sup> <span>/ Hari</span></h3>
			<ul>
				<li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
				<li>Dokter Spesialis <i class="fa fa-check icon-success"></i></li>
				<li>Pemeriksaan Keseluruhan<i class="fa fa-check icon-success"></i></li>
				<li>Laporan Kesehatan <i class="fa fa-check icon-success"></i></li>
				<li>Pelayanan 24 Jam <i class="fa fa-check icon-success"></i></li>
			</ul>

			<div class="price-bottom">
				<a href="#" class="btn btn-skin btn-lg">Pesan</a>
			</div>
			</div>
		</div>
		</div>

		<div class="col-sm-4 pricing-box">
		<div class="wow bounceInUp" data-wow-delay="0.2s">
			<div class="pricing-content general last">
			<h2>VIP</h2>
			<h3>Rp. 70<sup>.000</sup> <span>/ Hari</span></h3>
			<ul>
				<li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
				<li>Dokter Spesialis <i class="fa fa-check icon-success"></i></li>
				<li>Pemeriksaan Keseluruhan<i class="fa fa-check icon-success"></i></li>
				<li><del>Laporan Kesehatan</del> <i class="fa fa-times icon-danger"></i></li>
			</ul>

			<div class="price-bottom">
				<a href="#" class="btn btn-skin btn-lg">Pesan</a>
			</div>
			</div>
		</div>
		</div>

	</div>

	</div>
</section>
<!-- /Section: pricing -->

<section id="partner" class="home-section paddingbot-60">
	<div class="container marginbot-50">
		<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<div class="wow lightSpeedIn" data-wow-delay="0.1s">
			<div class="section-heading text-center">
				<h2 class="h-bold">Partner Kami</h2>
				<p>Provide best quality healthcare for you</p>
			</div>
			</div>
			<div class="divider-short"></div>
		</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
		<div class="col-sm-6 col-md-3">
			<div class="partner">
			<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/img/dummy/partner-1.jpg" alt="" /></a>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<div class="partner">
			<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/img/dummy/partner-2.jpg" alt="" /></a>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<div class="partner">
			<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/img/dummy/partner-3.jpg" alt="" /></a>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<div class="partner">
			<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themesassets/img/dummy/partner-4.jpg" alt="" /></a>
			</div>
		</div>
		</div>
	</div>
</section>
