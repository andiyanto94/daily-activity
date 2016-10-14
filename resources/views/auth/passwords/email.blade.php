@extends('layouts.other')
@section('title')
    Daily Activity - Reset Password
    @endsection
    @section('style')
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
    @endsection

<!-- Main Content -->
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-envelope"></i> Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
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
@endsection