<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html class="no-js" lang="id-ID">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Selamat datang di Perpustakaan Digital</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?=assets_uri('images/favicon.ico');?>">
	<link rel="apple-touch-icon" href="<?=assets_uri('images/icon.png');?>">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	<link rel="stylesheet" href="<?=assets_uri('css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?=assets_uri('css/plugins.css');?>">
	<link rel="stylesheet" href="<?=assets_uri('style.css', 0);?>">
	<script src="<?=assets_uri('js/vendor/modernizr-3.5.0.min.js');?>"></script>
</head>
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">Anda menggunakan browser yang <strong>sudah jadul</strong>. Segera  <a href="https://browsehappy.com/">upgrade browser</a> anda untuk mendapatkan keamanan serta pengalaman yang terbaik.</p>
	<![endif]-->
	<div class="wrapper" id="wrapper">
		<header id="wn__header" class="header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<div class="logo">
							<a href="<?=base_url();?>">
								<img src="<?=assets_uri('images/logo/logo.png');?>" alt="logo images">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li class="drop with--one--item"><a href="<?=base_url();?>">Beranda</a></li>
								<li class="drop"><a href="<?=base_url('register');?>">Daftar Member</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
								<div class="searchbar__content setting__block">
									<div class="content-inner">
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span><?=( !$this->session->userdata('is_logged_in')) ? 'Admin' : $this->session->userdata('user_name');?></span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														<?php
														if ( !$this->session->userdata('is_logged_in')) {
														?>
														<span><a href="<?=base_url('admin/login');?>">Login</a></span>
														<span><a href="<?=base_url('admin/register');?>">Daftar</a></span>
													<?php } else { ?>
														<span><a href="<?=base_url('admin/data_member');?>">Data Member</a></span>
														<span><a href="<?=base_url('admin/data_anggota');?>">Data Anggota</a></span>
														<span><a href="<?=base_url('admin/logout');?>">Logout</a></span>
													<?php } ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="row d-none">
					<div class="col-lg-12 d-none">
						<nav class="mobilemenu__nav">
							<ul class="meninmenu">
								<li><a href="<?=base_url();?>">Beranda</a></li>
								<li><a href="<?=base_url('register');?>">Daftar Member</a></li>
							</ul>
						</nav>
					</div>
				</div>
	            <div class="mobile-menu d-block d-lg-none">
	            </div>	
			</div>
		</header>
        <div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
	        <div class="slide animation__style10 bg-image--1 fullscreen align__center--left">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-lg-12">
	            			<div class="slider__content">
		            			<div class="contentbox">
		            				<h2>Semangat <span>membaca</span></h2>
		            			</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
            </div>
	        <div class="slide animation__style10 bg-image--7 fullscreen align__center--left">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-lg-12">
	            			<div class="slider__content">
		            			<div class="contentbox">
		            				<h2>Temukan <span>bukumu</span></h2>
		            			</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
            </div>
        </div>
		<section class="wn__product__area brown--color pt--80  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">Katalog <span class="color--theme">Buku</span></h2>
							<p>Buku best seller dan terbaru</p>
						</div>
					</div>
				</div>
				<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="<?=base_url();?>"><img src="<?=assets_uri('images/books/1.jpg');?>" alt="product image"></a>
								<a class="second__img animation1" href="<?=base_url();?>"><img src="<?=assets_uri('images/books/2.jpg');?>" alt="product image"></a>
								<div class="hot__box">
									<span class="hot-label">BEST SELLER</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="<?=base_url();?>">robin parrish</a></h4>
								<ul class="prize d-flex">
									<li>Rp 150.000</li>
								</ul>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
											<li><a class="wishlist" href="<?=base_url();?>"><i class="bi bi-shopping-cart-full"></i></a></li>
											<li><a class="compare" href="<?=base_url();?>"><i class="bi bi-love"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="product__hover--content">
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="<?=base_url();?>"><img src="<?=assets_uri('images/books/3.jpg');?>" alt="product image"></a>
								<a class="second__img animation1" href="<?=base_url();?>"><img src="<?=assets_uri('images/books/4.jpg');?>" alt="product image"></a>
								<div class="hot__box color--2">
									<span class="hot-label">NEW</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="<?=base_url();?>">The Remainng</a></h4>
								<ul class="prize d-flex">
									<li>Rp 120.000</li>
								</ul>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
											<li><a class="wishlist" href="<?=base_url();?>"><i class="bi bi-shopping-cart-full"></i></a></li>
											<li><a class="compare" href="<?=base_url();?>"><i class="bi bi-love"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="product__hover--content">
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="<?=base_url();?>"><img src="<?=assets_uri('images/books/5.jpg');?>" alt="product image"></a>
								<a class="second__img animation1" href="<?=base_url();?>"><img src="<?=assets_uri('images/books/6.jpg');?>" alt="product image"></a>
								<div class="hot__box">
									<span class="hot-label">BEST SELLER</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="<?=base_url();?>">Bowen Greenwood</a></h4>
								<ul class="prize d-flex">
									<li>Rp 70.000</li>
									<li class="old_prize">Rp 90.000</li>
								</ul>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
											<li><a class="wishlist" href="<?=base_url();?>"><i class="bi bi-shopping-cart-full"></i></a></li>
											<li><a class="compare" href="<?=base_url();?>"><i class="bi bi-love"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="product__hover--content">
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="<?=base_url();?>"><img src="<?=assets_uri('images/books/7.jpg');?>" alt="product image"></a>
								<a class="second__img animation1" href="<?=base_url();?>"><img src="<?=assets_uri('images/books/8.jpg');?>" alt="product image"></a>
								<div class="hot__box color--2">
									<span class="hot-label">NEW</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="<?=base_url();?>">Lando</a></h4>
								<ul class="prize d-flex">
									<li>Rp 80.000</li>
								</ul>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
											<li><a class="wishlist" href="<?=base_url();?>"><i class="bi bi-shopping-cart-full"></i></a></li>
											<li><a class="compare" href="<?=base_url();?>"><i class="bi bi-love"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="product__hover--content">
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
			<div class="copyright__wrapper">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="copyright">
								<div class="copy__right__inner text-left">
									<p>Hak Cipta &copy; <?=date('Y');?> Perpustakaan Digital</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<script src="<?=assets_uri('js/vendor/jquery-3.2.1.min.js');?>"></script>
	<script src="<?=assets_uri('js/popper.min.js');?>"></script>
	<script src="<?=assets_uri('js/bootstrap.min.js');?>"></script>
	<script src="<?=assets_uri('js/plugins.js');?>"></script>
	<script src="<?=assets_uri('js/active.js');?>"></script>
</body>
</html>
