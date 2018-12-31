<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html class="no-js" lang="id-ID">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Daftar Admin - Perpustakaan Digital</title>
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
	<script src="<?=assets_uri('js/vendor/modernizr-3.5.0.min.js');?>"></script>
</head>
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">Anda menggunakan browser yang <strong>sudah jadul</strong>. Segera  <a href="https://browsehappy.com/">upgrade browser</a> anda untuk mendapatkan keamanan serta pengalaman yang terbaik.</p>
	<![endif]-->
	<div class="wrapper" id="wrapper">
		<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-7 col-lg-2">
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
					<div class="col-md-8 col-sm-8 col-5 col-lg-2">
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
        <div class="ht__bradcaump__area bg-image--5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Daftar admin</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="<?=base_url();?>">Beranda</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Daftar admin</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<section class="my_account_area pt--80 pb--55 bg--white">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="my__account__wrapper">
							<h3 class="account__title">Daftar Admin</h3>
							<?=form_open('admin/register', array('method'=>'post'));?>
								<div class="account__form">
					              <?php if($this->session->flashdata('msg_alert')) { ?>

					              <div class="alert alert-danger">
					                <label style="font-size: 13px;"><?=$this->session->flashdata('msg_alert');?></label>
					              </div>
					              <?php } ?>
					              <?php if($this->session->flashdata('msg_success')) { ?>

					              <div class="alert alert-success">
					                <label style="font-size: 13px;"><?=$this->session->flashdata('msg_success');?></label>
					              </div>
					              <?php } ?>
									<div class="input__box">
										<label for="nama">Nama</label>
										<input type="text" id="nama" name="nama">
									</div>
									<div class="input__box">
										<label for="email">Email address</label>
										<input type="email" id="email" name="email">
									</div>
									<div class="input__box">
										<label for="password">Password</label>
										<input type="password" id="password" name="password">
									</div>
									<div class="form__btn">
										<button>Daftar</button>
									</div>
								</div>
							<?=form_close();?>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.id.min.js"></script>
	<script type="text/javascript">
		$('.datepicker').datepicker({
		});
	</script>
</body>
</html>