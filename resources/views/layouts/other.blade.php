<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>

	<!-- BEGIN META -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="your,keywords">
	<meta name="description" content="Short explanation about this website">
	<!-- END META -->

	<!-- BEGIN STYLESHEETS -->
	@yield('style')
</head>
<body class="menubar-hoverable header-fixed ">

<!-- BEGIN HEADER-->
<header id="header" >
	<div class="headerbar">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="headerbar-left">
			<ul class="header-nav header-nav-options">
				<li class="header-nav-brand" >
					<div class="brand-holder">
						<a href="/da">
							<span class="text-lg text-bold text-primary">Daily Activity</span>
						</a>
					</div>
				</li>
			</ul>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="headerbar-right">
				<ul class="header-nav header-nav-options">
					<li><button class="btn btn-primary btn-raised" data-toggle="modal" data-target="#formModal">Login</button></li>
					<li><a href="{{ url('/register') }}"><button class="btn btn-primary btn-raised" type="submit">Register</button></a></li>
				</ul>

				<!-- BEGIN FORM MODAL MARKUP -->
				<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="formModalLabel">Login to continue</h4>
							</div>
							<form class="form-horizontal" role="form" action="{{ url('/login') }}" accept-charset="utf-8" method="post">
								{{ csrf_field() }}
								<div class="modal-body">
									<div class="form-group">
										<div class="col-sm-3">
											<label for="email1" class="control-label">Email</label>
										</div>
										<div class="col-sm-9">
											<input type="email" name="email" id="email1" class="form-control" value="{{ old('email') }}" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-3">
											<label for="password1" class="control-label">Password</label>
										</div>
										<div class="col-sm-9">
											<input type="password" name="password" id="password1" class="form-control" placeholder="Password">
											<p class="help-block"><a href="{{ url('/password/reset') }}">Forgotten?</a></p>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-3">
										</div>
										<div class="col-sm-9">
											<div class="checkbox">
												<label>
													<input type="checkbox" id="cb1"> Remember me
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-primary">Login</button>
								</div>
							</form>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
				<!-- END FORM MODAL MARKUP -->

		</div><!--end #header-navbar-collapse -->
	</div>
</header>
<!-- END HEADER-->

<!-- BEGIN BASE-->
<div id="base">

	<!-- BEGIN OFFCANVAS LEFT -->
	<div class="offcanvas">
	</div><!--end .offcanvas-->
	<!-- END OFFCANVAS LEFT -->

	<!-- BEGIN CONTENT-->
	<div id="content">
		<section>
			<div class="section-body">
				<div class="row">

					@yield('content')

				</div><!--end .row -->
			</div><!--end .section-body -->
		</section>
	</div><!--end #content-->
	<!-- END CONTENT -->

</div><!--end #base-->
<!-- END BASE -->
@yield('js')

</body>
</html>
