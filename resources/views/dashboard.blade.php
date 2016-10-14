@extends('layouts.layout')
@section('title')
		Home
		@endsection
@section('style')
	<!-- BEGIN STYLESHEETS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
	<link type="text/css" rel="stylesheet" href="{{ URL::to('public/css/theme-default/bootstrap.css?1422792965')}}" />
	<link type="text/css" rel="stylesheet" href="{{ URL::to('public/css/theme-default/materialadmin.css?1425466319')}}" />
	<link type="text/css" rel="stylesheet" href="{{ URL::to('public/css/theme-default/font-awesome.min.css?1422529194')}}" />
	<link type="text/css" rel="stylesheet" href="{{ URL::to('public/css/theme-default/material-design-iconic-font.min.css?1421434286')}}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::to('public/css/theme-default/libs/jquery-ui/jquery-ui-theme.css?1423393666')}}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::to('public/css/theme-default/libs/nestable/nestable.css?1423393667')}}" />
		<!-- END STYLESHEETS -->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script type="text/javascript" src="{{ URL::to('public/js/libs/utils/html5shiv.js?1403934957')}}"></script>
	<script type="text/javascript" src="{{ URL::to('public/js/libs/utils/respond.min.js?1403934956')}}"></script>
	<![endif]-->
	@endsection

	@section('content')
	<!-- BEGIN CONTENT-->
	<div id="content">
@include('include.message-block')
		<section>
			<div class="section-body no-margin">
				<div class="row">
					<div class="col-md-8">
						<!-- BEGIN MESSAGE ACTIVITY -->
						<div class="card panel ink-reaction" style="margin-bottom: 0px;">
							<a href="#">
								<div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion7" data-target="#accordion7-4">
								<header>Timeline</header>
								<div class="tools">
									<strong>Klick to add activity</strong> <a class="btn btn-lg btn-icon-toggle"><i class="fa fa-plus"></i></a>
								</div>
							</div></a>
							<div id="accordion7-4" class="collapse">
								<form class="form" action="{{ route('post.create') }}" method="post">
									<div class="card no-margin">
										<div class="card-body">
											<div class="form-group floating-label">
												<textarea name="body" id="status" class="form-control autosize" rows="1"></textarea>
												<label for="status">What's on your mind?</label>
											</div>
										</div><!--end .card-body -->
										<div class="card-actionbar">
											<div class="card-actionbar-row">
												<div class="pull-left">
													<a class="btn btn-icon-toggle ink-reaction btn-default"><i class="md md-camera-alt"></i></a>
													<a class="btn btn-icon-toggle ink-reaction btn-default"><i class="md md-location-on"></i></a>
													<a class="btn btn-icon-toggle ink-reaction btn-default"><i class="md md-attach-file"></i></a>
												</div>
												<a href="javascript:void(0);" class="btn btn-flat btn-accent ink-reaction" data-toggle="collapse" data-parent="#accordion7" data-target="#accordion7-4">Cancel</a>
												<button type="submit" class="btn btn-flat btn-accent ink-reaction">Post</button>
												<input type="hidden" value="{{ Session::token() }}" name="_token">
											</div><!--end .card-actionbar-row -->
										</div><!--end .card-actionbar -->
									</div><!--end .card -->
								</form>
							</div>
						</div><!--end .panel -->
						<div class="tab-pane" id="activity">
							<ul class="timeline collapse-lg timeline-hairline">
								@foreach($posts as $post)
								<li>
									<div class="timeline-circ circ-xl style-primary-dark"><i class="md md-access-time"></i></div>
									<div class="timeline-entry">
										<div class="card style-default-light">
											<div class="card-body small-padding">
												<img class="img-circle img-responsive pull-left width-1" src="public/img/uploads/avatars/{{ $post->user->avatar }}?1404026449') }}" alt="" />
													<span class="text-medium">{{ $post->user->name }} at <span class="text-primary">8:15 pm</span></span><br/>
															<span class="opacity-50">
																{{ $post->created_at }}
															</span>

												<p>{{ $post->body }}</p>
												<img class="img-responsive" src="{{URL::to('public/img/icon/img14.jpg?1404589160')}}" alt="" />
											</div>
											<div class="collapse" id="comment{{ $post->id }}">
												<div class="card-body height-12 scroll style-default-bright">
												<ul class="list-comments" style="margin-right: 20px;">
													<li>
														<div class="card">
															<div class="comment-avatar"><i class="glyphicon glyphicon-user opacity-50"></i></div>
															<div class="card-body small-padding">
																<h4 class="comment-title">Jim Peters <small>20/06/2013 at 4:02 pm</small></h4>
																<a class="btn btn-default-dark stick-top-right" href="#respond">Reply</a>
																<p>Etiam dui libero, tempor quis congue in, interdum eget tortor. Vivamus aliquam dictum lacus quis tincidunt. Phasellus rhoncus ante sollicitudin nisl consectetur ultricies. Sed rhoncus ullamcorper mauris, ac condimentum metus egestas ut. Nam et urna ante, vitae pretium lacus.</p>
															</div>
														</div><!--end .card -->
													</li><!-- end comment -->
													<li>
														<div class="card">
															<div class="comment-avatar"><span class="glyphicon glyphicon-user opacity-50"></span></div>
															<div class="card-body">
																<h4 class="comment-title">CarolSharp <small>20/06/2013 at 4:14 pm</small></h4>
																<a class="btn btn-default-dark stick-top-right" data-toggle="collapse" data-target="#respond">Reply</a>
																<p>Integer ac magna lacinia velit bibendum ornare. Morbi eget dui lectus, eget eleifend mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

															</div>
															<div id="respond" class="collapse" style="margin-left: 15px; margin-bottom: 15px; border-top: 1px #ccceca solid;">
																<form class="form form-validate" action="" accept-charset="utf-8" novalidate="novalidate" method="post">
																	<div class="form-group floating-label" style="margin-top: 0px;">
																		<div class="input-group">
																			<div class="input-group-content">
																				<input type="text" class="form-control" id="groupbutton10">
																				<label for="groupbutton10">Reply</label>
																			</div>
																			<div class="input-group-btn">
																				<button class="btn btn-success ink-reaction" type="button">Reply</button>
																			</div>
																		</div>
																	</div>
																</form>
															</div>
														</div><!--end .card -->
														<ul>
															<li>
																<div class="card">
																	<div class="comment-avatar"><img class="img-circle" src="{{URL::to('public/img/icon/avatar1.jpg?1403934956')}}" alt="" /></div>
																	<div class="card-body">
																		<h4 class="comment-title">Daniel Johnson <small>20/06/2013 at 4:38 pm</small></h4>
																		<p>Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer ac magna lacinia velit bibendum ornare. Morbi eget dui lectus, eget eleifend mi.</p>
																	</div>
																</div><!--end .card -->
															</li><!-- end sub-comment -->
															<li>
																<div class="card">
																	<div class="comment-avatar"><span class="glyphicon glyphicon-user opacity-50"></span></div>
																	<div class="card-body">
																		<h4 class="comment-title">Amber Page <small>20/06/2013 at 4:41 pm</small></h4>
																		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in tempus lorem. Vivamus ullamcorper leo risus, non vehicula odio.</p>
																	</div>
																</div><!--end .card -->
															</li><!-- end sub-comment -->
														</ul>
													</li><!-- end comment -->
												</ul>
													</div>
											</div>
											<div class="card-actionbar">
												<div class="card-actionbar-row">
													<a href="javascript:void(0);" class="btn btn-icon-toggle btn-danger ink-reaction pull-left"><i class="fa fa-heart"></i></a>
													<a href="javascript:void(0);" class="btn btn-icon-toggle btn-default ink-reaction pull-left collapsed" data-toggle="collapse" data-target="#reaction{{ $post->id }}"><i class="fa fa-reply"></i></a>
													<a href="javascript:void(0);" class="ink-reaction pull-right collapsed" data-toggle="collapse" data-target="#comment{{ $post->id }}">Comments</a>

												</div>
											</div><!--end .card-actionbar -->
											<!-- card action -->
											<div id="reaction{{ $post->id }}" class="collapse" style="margin-left: 15px; margin-bottom: 15px; border-top: 1px #ccceca solid;">
												<form class="form form-validate" action="" accept-charset="utf-8" novalidate="novalidate" method="post">
													<div class="form-group floating-label" style="margin-top: 0px;">
														<div class="input-group">
															<div class="input-group-content">
																<input type="text" class="form-control" id="groupbutton10">
																<label for="groupbutton10">Reply</label>
															</div>
															<div class="input-group-btn">
																<button class="btn btn-success ink-reaction" type="button">Reply</button>
															</div>
														</div>
													</div>
												</form>
											</div>

										</div>
									</div><!--end .timeline-entry -->
								</li>
									@endforeach
							</ul>
						</div><!--end #activity -->
					</div><!--end .col -->
					<!-- END MESSAGE ACTIVITY -->

					<!-- BEGIN PROFILE MENUBAR -->

					<div class="col-lg-4 col-md-4">
						@if(Auth::guest())
							test
						@else

						<div class="card card-underline style-default-bright">
							<div class="card-head">
								<header class="opacity-75"><small>Pending</small></header>
								<div class="tools">
									<form class="navbar-search" role="search">
										<div class="form-group">
											<input type="text" class="form-control" name="friendSearch" placeholder="Enter your keyword">
										</div>
										<button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
									</form>
								</div><!--end .tools -->
							</div><!--end .card-head -->
							<div class="card-body no-padding">
								<ul class="list" data-sortable="true">
									<li class="tile">
										<div class="checkbox checkbox-styled tile-text">
											<label>
												<input type="checkbox" checked>
														<span>
															Call clients for follow-up
														</span>
											</label>
										</div>
										<a class="btn btn-flat ink-reaction btn-default">
											<i class="fa fa-edit"></i>
										</a>
										<a class="btn btn-flat ink-reaction btn-default">
											<i class="fa fa-trash"></i>
										</a>
									</li>
									<li class="tile">
										<div class="checkbox checkbox-styled tile-text">
											<label>
												<input type="checkbox">
														<span>
															Schedule meeting
															<small>
																opportunity for new customers
															</small>
														</span>
											</label>
										</div>
										<a class="btn btn-flat ink-reaction btn-default">
											<i class="fa fa-edit"></i>
										</a>
										<a class="btn btn-flat ink-reaction btn-default">
											<i class="fa fa-trash"></i>
										</a>
									</li>
									<li class="tile">
										<div class="checkbox checkbox-styled tile-text">
											<label>
												<input type="checkbox">
														<span>
															Upload files to server
															<small>
																The files must be shared with all members of the board
															</small>
														</span>
											</label>
										</div>
										<a class="btn btn-flat ink-reaction btn-default">
											<i class="fa fa-edit"></i>
										</a>
										<a class="btn btn-flat ink-reaction btn-default">
											<i class="fa fa-trash"></i>
										</a>
									</li>
									<li class="tile">
										<div class="checkbox checkbox-styled tile-text">
											<label>
												<input type="checkbox">
														<span>
															Forward important tasks
														</span>
											</label>
										</div>
										<a class="btn btn-flat ink-reaction btn-default">
											<i class="fa fa-edit"></i>
										</a>
										<a class="btn btn-flat ink-reaction btn-default">
											<i class="fa fa-trash"></i>
										</a>
									</li>
								</ul>
							</div><!--end .card-body -->
						</div><!--end .card -->


						<div class="card card-underline style-default-bright">
							<div class="card-head">
								<header class="opacity-75"><small>Personal info</small></header>
								<div class="tools">
									<a class="btn btn-icon-toggle ink-reaction"><i class="md md-edit"></i></a>
								</div><!--end .tools -->
							</div><!--end .card-head -->
							<div class="card-body no-padding">
								<ul class="list">
									<li class="tile">
										<a class="tile-content ink-reaction">
											<div class="tile-icon">
												<img src="public/img/uploads/avatars/{{ Auth::user()->avatar }}" alt="" />
											</div>
											<div class="tile-text">
												{{ Auth::user()->name }}
												<small>
													{{ Auth::user()->email }}
												</small>
											</div>
										</a>
									</li>
									<li class="tile">
										<a class="tile-content ink-reaction">
											<div class="tile-icon">
												<i class="md md-location-on"></i>
											</div>
											<div class="tile-text">
												621 Johnson Ave, Suite 600
												<small>Street</small>
											</div>
										</a>
									</li>
									<li class="tile">
										<a class="tile-content ink-reaction">
											<div class="tile-icon"></div>
											<div class="tile-text">
												San Francisco, CA 54321
												<small>City</small>
											</div>
										</a>
									</li>
									<li class="divider-inset"></li>
									<li class="tile">
										<a class="tile-content ink-reaction">
											<div class="tile-icon">
												<i class="fa fa-phone"></i>
											</div>
											<div class="tile-text">
												(123) 456-7890
												<small>Mobile</small>
											</div>
										</a>
									</li>
									<li class="tile">
										<a class="tile-content ink-reaction">
											<div class="tile-icon"></div>
											<div class="tile-text">
												(323) 555-6789
												<small>Work</small>
											</div>
										</a>
									</li>
								</ul>
							</div><!--end .card-body -->
						</div><!--end .card -->
						@endif
							<hr>
							<em class="text-caption">Copyright &copy; 2016</span> <strong><a href="/da">Daily Activity</a> &centerdot;
									<a href="#">Help</a> &centerdot; <a href="#">term</a></em>
					</div><!--end .col -->
					<!-- END PROFILE MENUBAR -->

				</div><!--end .row -->

			</div><!--end .section-body -->
		</section>
	</div><!--end #content-->
	<!-- END CONTENT -->
@endsection

		@section('js')
<!-- BEGIN JAVASCRIPT -->
<script src="{{ URL::to('public/js/libs/jquery/jquery-1.11.2.min.js')}}"></script>
<script src="{{ URL::to('public/js/libs/jquery/jquery-migrate-1.2.1.min.js')}}"></script>
		<script src="{{ URL::to('public/js/libs/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{ URL::to('public/js/libs/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{ URL::to('public/js/libs/spin.js/spin.min.js')}}"></script>
<script src="{{ URL::to('public/js/libs/autosize/jquery.autosize.min.js')}}"></script>
		<script src="{{ URL::to('public/js/libs/nestable/jquery.nestable.js')}}"></script>
<script src="{{ URL::to('public/js/libs/nanoscroller/jquery.nanoscroller.min.js')}}"></script>
<script src="{{ URL::to('public/js/core/source/App.js')}}"></script>
<script src="{{ URL::to('public/js/core/source/AppNavigation.js')}}"></script>
<script src="{{ URL::to('public/js/core/source/AppOffcanvas.js')}}"></script>
<script src="{{ URL::to('public/js/core/source/AppCard.js')}}"></script>
<script src="{{ URL::to('public/js/core/source/AppForm.js')}}"></script>
<script src="{{ URL::to('public/js/core/source/AppNavSearch.js')}}"></script>
<script src="{{ URL::to('public/js/core/source/AppVendor.js')}}"></script>
<script src="{{ URL::to('public/js/core/demo/Demo.js')}}"></script>
		<script src={{ URL::to('public/js/core/demo/DemoUILists.js')}}"></script>
<!-- END JAVASCRIPT -->
@endsection
