<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daily Activity  - Login</title>

	<!-- BEGIN META -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="your,keywords">
	<meta name="description" content="Short explanation about this website">
	<!-- END META -->

	<!-- BEGIN STYLESHEETS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
	<link type="text/css" rel="stylesheet" href="{{ URL::to('public/css/theme-default/bootstrap.css?1422792965')}}" />
	<link type="text/css" rel="stylesheet" href="{{ URL::to('public/css/theme-default/materialadmin.css?1425466319')}}" />
	<link type="text/css" rel="stylesheet" href="{{ URL::to('public/css/theme-default/font-awesome.min.css?1422529194')}}" />
	<link type="text/css" rel="stylesheet" href="{{ URL::to('public/css/theme-default/material-design-iconic-font.min.css?1421434286')}}" />
	<!-- END STYLESHEETS -->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script type="text/javascript" src="{{ URL::to('public/js/libs/utils/html5shiv.js?1403934957')}}"></script>
	<script type="text/javascript" src="{{ URL::to('public/js/libs/utils/respond.min.js?1403934956')}}"></script>
	<![endif]-->
</head>
<body class="menubar-hoverable header-fixed ">

<!-- BEGIN LOGIN SECTION -->
<section class="section-account">
	<div class="img-backdrop" style="background-image: url('public/img/icon/img16.jpg')"></div>
	<div class="spacer"></div>
	<div class="card contain-sm style-transparent">
		<div class="card-body">
			<div class="row">
				<div class="col-sm-6">
					<br/>
					<span class="text-lg text-bold text-primary"><a href="{{ url('/') }}">Daily Activity</a></span>
					<br/><br/>
					<form class="form form-validate floating-label" action="{{ url('/register') }}" accept-charset="utf-8" novalidate="novalidate" method="post">
						{{ csrf_field() }}
						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<input type="text" class="form-control" id="name" required name="name" value="{{ old('name') }}">
							@if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
							@endif
							<label for="name">Full Name</label>
						</div>

						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<input type="email" class="form-control" id="email" required name="email" value="{{ old('email') }}">
							@if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
							@endif
							<label for="email">Email Address</label>
						</div>

						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<input type="password" class="form-control" id="password" name="password" required data-rule-minlength="6">
							@if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
							@endif
							<label for="password">Password</label>
						</div>
						<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
							<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required data-rule-minlength="6">
							@if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
							@endif
							<label for="password_confirmation">Confirm Password</label>
						</div>
						<br/>
						<div class="row">
							<div class="col-xs-6 text-left">
								<div class="checkbox checkbox-inline checkbox-styled">
									<label>
										<input type="checkbox" name="remember"> <span>Remember me</span>
									</label>
								</div>
							</div><!--end .col -->
							<div class="col-xs-6 text-right">
								<button class="btn btn-primary btn-raised" type="submit">Login</button>
							</div><!--end .col -->
						</div><!--end .row -->
					</form>
				</div><!--end .col -->
				<div class="col-sm-5 col-sm-offset-1 text-center">
					<br><br>
					<h3 class="text-light">
						No account yet?
					</h3>
					<a class="btn btn-block btn-raised btn-primary" href="{{ url('/register') }}">Sign up here</a>
					<br><br>
					<h3 class="text-light">
						or
					</h3>
					<p>
						<a href="#" class="btn btn-block btn-raised btn-info"><i class="fa fa-facebook pull-left"></i>Login with Facebook</a>
					</p>
					<p>
						<a href="#" class="btn btn-block btn-raised btn-info"><i class="fa fa-twitter pull-left"></i>Login with Twitter</a>
					</p>
				</div><!--end .col -->
			</div><!--end .row -->
		</div><!--end .card-body -->
	</div><!--end .card -->
</section>
<!-- END LOGIN SECTION -->

<!-- BEGIN JAVASCRIPT -->
<script src="{{ URL::to('public/js/libs/jquery/jquery-1.11.2.min.js')}}"></script>
<script src="{{ URL::to('public/js/libs/jquery/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{ URL::to('public/js/libs/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{ URL::to('public/js/libs/spin.js/spin.min.js')}}"></script>
<script src="{{ URL::to('public/js/libs/autosize/jquery.autosize.min.js')}}"></script>
<script src="{{ URL::to('public/js/libs/nanoscroller/jquery.nanoscroller.min.js')}}"></script>
<script src="{{ URL::to('public/js/core/source/App.js')}}"></script>
<script src="{{ URL::to('public/js/core/source/AppNavigation.js')}}"></script>
<script src="{{ URL::to('public/js/core/source/AppOffcanvas.js')}}"></script>
<script src="{{ URL::to('public/js/core/source/AppCard.js')}}"></script>
<script src="{{ URL::to('public/js/core/source/AppForm.js')}}"></script>
<script src="{{ URL::to('public/js/core/source/AppNavSearch.js')}}"></script>
<script src="{{ URL::to('public/js/core/source/AppVendor.js')}}"></script>
<script src="{{ URL::to('public/js/core/demo/Demo.js')}}"></script>
<!-- END JAVASCRIPT -->

</body>
</html>