<!DOCTYPE html>
<html lang="id">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<link type="text/css" href="<?php echo base_url(); ?>assets/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
	<link type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet"/>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>files/favicon.ico">
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/clocks.js"></script>
	<title><?php echo $title . ' | ' . $web_name; ?></title>
</head>

<body>
<style type="text/css">
	.navbar-default {
  background-color: #4485ce;
  border-color: #2e5c90;
}
.navbar-default .navbar-brand {
  color: #ecf0f1;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #d1e9ff;
}
.navbar-default .navbar-text {
  color: #ecf0f1;
}
.navbar-default .navbar-nav > li > a {
  color: #ecf0f1;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #d1e9ff;
}
.navbar-default .navbar-nav > li > .dropdown-menu {
  background-color: #4485ce;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li > a {
  color: #ecf0f1;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li > a:hover,
.navbar-default .navbar-nav > li > .dropdown-menu > li > a:focus {
  color: #d1e9ff;
  background-color: #2e5c90;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li > .divider {
  background-color: #2e5c90;
}
.navbar-default .navbar-nav .open .dropdown-menu > .active > a,
.navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
.navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
  color: #d1e9ff;
  background-color: #2e5c90;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #d1e9ff;
  background-color: #2e5c90;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #d1e9ff;
  background-color: #2e5c90;
}
.navbar-default .navbar-toggle {
  border-color: #2e5c90;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #2e5c90;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #ecf0f1;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #ecf0f1;
}
.navbar-default .navbar-link {
  color: #ecf0f1;
}
.navbar-default .navbar-link:hover {
  color: #d1e9ff;
}

@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #ecf0f1;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #d1e9ff;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #d1e9ff;
    background-color: #2e5c90;
  }
}
</style>	
<div class="navbar navbar-default navbar-fixed-top">
	
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">
							<?php if ($page == 'login') { ?>
								<i class="glyphicon glyphicon-off"></i> <?php echo $this->lang->line('login'); ?>
							<?php } else if ($page == 'register') { ?>
								<i class="glyphicon glyphicon-off"></i> <?php echo $this->lang->line('register'); ?>	
							<?php } else { ?>
								<i class="glyphicon glyphicon-list"></i> <?php echo $this->lang->line('scoreboard'); ?>
							<?php } ?>
							</a>
						</li>
					</ul>
					<ul class="nav navbar-nav pull-right">
						<li>
							<a href="#"><i class="glyphicon glyphicon-time"></i> <span id="server_clock"></span></a>
						</li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <?php echo $this->lang->line('guest'); ?> <b class="caret"></b></a>
							
						</li>
					</ul>
				</div>
			</div>
		</div>
	
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php if ( ! empty($left_logo)) : ?>
			<div class="site_logo">
				<img style="margin-top: 13px" src="<?php echo base_url(); ?>files/<?php echo $left_logo; ?>" />
			</div>
			<?php endif; ?>
			<div class="site_name">
				<h1><?php echo $top_name; ?></h1>
				<h3><?php echo $bottom_name; ?></h3>
			</div>

			<?php if ( ! empty($right_logo1)): ?>
			<div class="site_logo_right">
				<img src="<?php echo base_url(); ?>files/<?php echo $right_logo1; ?>" />
			</div>
			<?php endif; ?>
			<?php if ( ! empty($right_logo2)): ?>
			<div class="site_logo_right">
				<img src="<?php echo base_url(); ?>files/<?php echo $right_logo2; ?>" />
			</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<hr />
		</div>
	</div>
</div>