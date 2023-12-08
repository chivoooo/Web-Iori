<!DOCTYPE html>
<html lang="zxx">

<head>
	<title><?= $judul ?></title>
	<meta charset="UTF-8">
	<meta name="description" content="TheQuest Gaming Magazine Template">
	<meta name="keywords" content="gaming, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link href="<?= base_url('assets/front/') ?>img/favicon.ico" rel="shortcut icon" />

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
		rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/magnific-popup.css" />
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/owl.carousel.min.css" />
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/animate.css" />
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/slicknav.min.css" />

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/style.css" />


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<!-- Page Preloder -->


	<!-- Header section -->
	<header class="header-section">

		<ul class="main-menu">
			<li><a href="<?= base_url() ?>">Home</a></li>
			<?php foreach($kategori as $k){ ?>
			<li><a href="<?= base_url('home/kategori/').$k['id_kategori'] ?>"><?= $k['nama_kategori'] ?></a></li>
			<?php } ?>
		</ul>
		<a href="<?= base_url('auth') ?>" class="site-btn float-right mt-4 mx-5">Login</a>
	</header>
	<!-- Header section end -->


	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 blog-posts">
					<?php foreach($konten as $k){ ?>
					<div class="blog-post featured-post">
						<img src="<?= base_url('assets/upload/konten/'.$k['foto']); ?>">
						<div class="post-date"><?= $k['tanggal'] ?></div>
						<h3><?= $k['judul'] ?></h3>
						<div class="post-metas">
							<div class="post-meta"><?= $k['nama'] ?></div>
							<div class="post-meta">in <a href=""><?= $k['nama_kategori']; ?></a></div>
							<p><?= $k['keterangan'] ?></p>
						</div>
					</div>
					<?php } ?>
					<div class="row">
						<div class="col-md-12">
							<div class="blog-post">

							</div>
						</div>
					</div>

				</div>
				<div class="col-lg-4 sidebar">
					<div class="sb-widget">
						<form class="sb-search">
							<input type="text" placeholder="Search">
						</form>
					</div>
					<div class="sb-widget">
						<h2 class="sb-title">Kategori</h2>
						<ul class="sb-cata-list">
							<?php foreach($kategori as $k){ ?>
								<li><a href="<?= base_url('home/kategori/') . $k['id_kategori'] ?>"><?= $k['nama_kategori'] ?></a></li>
							<?php } ?>
						</ul>
					</div>
					<div class="sb-widget">

					</div>
					<div class="sb-widget">

					</div>
					<div class="sb-widget">

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->



	<!-- Footer section -->
	<div class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="footer-widget">
						<div class="about-widget">
							<p>
                               <?= $konfig->profil_website; ?>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-sm-6">
					<div class="footer-widget">
						<h2 class="fw-title">Kategori</h2>
						<ul>
							<?php foreach($kategori as $k2){ ?>
							<li><a href=""><?= $k2['nama_kategori']; ?></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="footer-widget">
						<h2 class="fw-title">Contact</h2>
						<ul>
								<li >
									<p <?= $konfig->alamat; ?>>
									<?= $konfig->alamat; ?>
									</p>
								</li>
								<li >
									<p <?= $konfig->email; ?>>
									<?= $konfig->email; ?>
									</p>
									<li>
									<p <?= $konfig->tiktok; ?>>
                                    <?= $konfig->tiktok; ?>
								</li>
								</li>
						</ul>
					</div>
				</div>
			</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="https://instagram.com/iori.disini"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="https://facebook.com/Gustavo Munchausen"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="https://youtube.com/Everything about iori"><i class="fa fa-youtube"></i><span>youtube</span></a>
				</div>
			</div>
		</div>
	</div> 
	<!-- Footer section end -->

		<!--====== Javascripts & Jquery ======-->
		<script src="<?= base_url('assets/front/'); ?>js/jquery-3.2.1.min.js"></script>
		<script src="<?= base_url('assets/front/'); ?>js/bootstrap.min.js"></script>
		<script src="<?= base_url('assets/front/'); ?>js/jquery.slicknav.js"></script>
		<script src="<?= base_url('assets/front/'); ?>js/owl.carousel.min.js"></script>
		<script src="<?= base_url('assets/front/'); ?>js/circle-progress.min.js"></script>
		<script src="<?= base_url('assets/front/'); ?>js/jquery.magnific-popup.min.js"></script>
		<script src="<?= base_url('assets/front/'); ?>js/main.js"></script>

</body>

</html>
