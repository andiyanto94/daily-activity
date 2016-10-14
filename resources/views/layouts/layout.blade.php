<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>

	<!-- BEGIN META -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="your,keywords">
	<meta name="description" content="Create your activity now">
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
				<li>
					<a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
						<i class="fa fa-bars"></i>
					</a>
				</li>
			</ul>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="headerbar-right">
			@if (Auth::guest())
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
								<div class="modal-footer">Hav't an account?
									<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-primary">Login</button>
								</div>
							</form>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
				<!-- END FORM MODAL MARKUP -->

			@else
			<ul class="header-nav header-nav-options">
				<li>
					<!-- Search form -->
					<form class="navbar-search" role="search">
						<div class="form-group">
							<input type="text" class="form-control" name="headerSearch" placeholder="Enter your keyword">
						</div>
						<button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-btn fa-search"></i></button>
					</form>
				</li>
				<li class="dropdown hidden-xs">
					<a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
						<i class="md md-message"></i><sup class="badge style-danger">4</sup>
					</a>
					<ul class="dropdown-menu animation-expand">
						<li class="dropdown-header">Today's messages</li>
						<li>
							<a class="alert alert-callout alert-warning" href="javascript:void(0);">
								<img class="pull-right img-circle dropdown-avatar" src="../../assets/img/avatar2.jpg?1404026449" alt="" />
								<strong>Alex Anistor</strong><br/>
								<small>Testing functionality...</small>
							</a>
						</li>
						<li>
							<a class="alert alert-callout alert-info" href="javascript:void(0);">
								<img class="pull-right img-circle dropdown-avatar" src="../../assets/img/avatar3.jpg?1404026799" alt="" />
								<strong>Alicia Adell</strong><br/>
								<small>Reviewing last changes...</small>
							</a>
						</li>
						<li class="dropdown-header">Options</li>
						<li><a href="../../html/pages/login.html">View all messages <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
						<li><a href="../../html/pages/login.html">Mark as read <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
					</ul><!--end .dropdown-menu -->
				</li><!--end .dropdown -->
				<li class="dropdown hidden-xs">
					<a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
						<i class="fa fa-area-chart"></i>
					</a>
					<ul class="dropdown-menu animation-expand">
						<li class="dropdown-header">Server load</li>
						<li class="dropdown-progress">
							<a href="javascript:void(0);">
								<div class="dropdown-label">
									<span class="text-light">Server load <strong>Today</strong></span>
									<strong class="pull-right">93%</strong>
								</div>
								<div class="progress"><div class="progress-bar progress-bar-danger" style="width: 93%"></div></div>
							</a>
						</li><!--end .dropdown-progress -->
						<li class="dropdown-progress">
							<a href="javascript:void(0);">
								<div class="dropdown-label">
									<span class="text-light">Server load <strong>Yesterday</strong></span>
									<strong class="pull-right">30%</strong>
								</div>
								<div class="progress"><div class="progress-bar progress-bar-success" style="width: 30%"></div></div>
							</a>
						</li><!--end .dropdown-progress -->
						<li class="dropdown-progress">
							<a href="javascript:void(0);">
								<div class="dropdown-label">
									<span class="text-light">Server load <strong>Lastweek</strong></span>
									<strong class="pull-right">74%</strong>
								</div>
								<div class="progress"><div class="progress-bar progress-bar-warning" style="width: 74%"></div></div>
							</a>
						</li><!--end .dropdown-progress -->
					</ul><!--end .dropdown-menu -->
				</li><!--end .dropdown -->
			</ul><!--end .header-nav-options -->
			<ul class="header-nav header-nav-profile">
				<li class="dropdown">
					<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
						<img src="public/img/uploads/avatars/{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" />
								<span class="profile-info">
									{{ Auth::user()->name }}
									<small>{{ Auth::user()->email }}</small>
								</span>
					</a>
					<ul class="dropdown-menu animation-dock">
						<li><a href="{{ url('/profile') }}"><i class="fa fa-fw fa-user text-success"></i> My profile</a></li>
						<li><a href="../../html/pages/calendar.html"><i class="md  md-assignment text-info"></i> My appointments</a></li>
						<li class="divider"></li>
						<li><a href="../../html/pages/locked.html"><i class="fa fa-fw fa-lock"></i> Lock</a></li>
						<li><a href="{{ url('/logout') }}"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
					</ul><!--end .dropdown-menu -->
				</li><!--end .dropdown -->
			</ul><!--end .header-nav-profile -->
			<ul class="header-nav header-nav-toggle">
				<li>
					<a class="btn btn-icon-toggle btn-default" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
						<i class="fa fa-ellipsis-v"></i>
					</a>
				</li>
			</ul><!--end .header-nav-toggle -->
			@endif
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
				<!-- BEGIN ALERT - REVENUE -->
				<div class="col-md-12 col-sm-12 col-xs-12">

					@if (Auth::guest())
						<div class="alert alert-warning" role="alert">
							<strong>User!</strong> to use this website you must to <a href="{{ url('/login') }}">Login</a>.
						</div>

					@else
						<div class="alert alert-info" role="alert">
							<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
						</div>
						<div class="alert alert-warning" role="alert">
							<strong>Warning!</strong> Better check yourself, you're not looking too good.
						</div>
						<div class="alert alert-danger" role="alert">
							<strong>Oh snap!</strong> Change a few things up and try submitting again.
						</div>
					@endif

				</div><!--end .col -->
				<!-- END ALERT - REVENUE -->
				<div class="row">

					@yield('content')

				</div><!--end .row -->
			</div><!--end .section-body -->
		</section>
	</div><!--end #content-->
	<!-- END CONTENT -->

	<!-- BEGIN MENUBAR-->
	@include('include.menubar')
	<!--end #menubar-->
	<!-- END MENUBAR -->

	<!-- BEGIN OFFCANVAS RIGHT -->
	@include('include.canvas')
	<!--end .offcanvas-->
	<!-- END OFFCANVAS RIGHT -->

</div><!--end #base-->
<!-- END BASE -->
@yield('js')

</body>
</html>
