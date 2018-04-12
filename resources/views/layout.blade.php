<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{config('app.name')}}</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="/adminlte/bower_components/Ionicons/css/ionicons.min.css">

	<link rel="stylesheet" href="/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

	@stack('styles')

	<!-- Theme style -->
	<link rel="stylesheet" href="/adminlte/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
				page. However, you can choose any other skin. Make sure you
				apply the skin class to the body tag so the changes take effect. -->
				<link rel="stylesheet" href="/adminlte/css/skins/skin-blue.min.css">

				<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
				<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet"
href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

		<!-- Main Header -->
		<header class="main-header">

			<!-- Logo -->
			<a href="/" class="logo">
				<span class="logo-mini"><b>AC</b></span>
				<span class="logo-lg"><b>AC Asesorías</b></span>
			</a>
			<nav class="navbar navbar-static-top">
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Menú</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
			</nav>

		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">

			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">

				@include('partials.nav')

			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				@yield('header')
				<ol class="breadcrumb">
					<li><a><i class="fa fa-user"></i> Usuario</a></li>
					<li class="active">{{$user->name}}</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content container-fluid">

				@if(session()->has('flash'))
				<div class="alert alert-success">{{session('flash')}}</div>
				@endif

				@yield('content')

			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<!-- Main Footer -->
		<footer class="main-footer">
			<!-- To the right -->
			<div class="pull-right hidden-xs">
				JJ
			</div>
			<!-- Default to the left -->
			<strong>Copyright &copy; 2018 <a href="#">Empresa</a></strong>
		</footer>
	<!-- Add the sidebar's background. This div must be placed
		immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>
	</div>
	<!-- ./wrapper -->

	@include('frpifa.create')

	@include('frpifb.create')

	@include('frpe.create')

	@include('fdg.create')

	@include('cee.create')

	<!-- REQUIRED JS SCRIPTS -->

	<!-- jQuery 3 -->
	<script src="/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<script src="/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

	@stack('scripts')

	<script>
		$('#frpifaDatepicker').datepicker({
			autoclose: true
		});

		$('#frpifbDatepicker').datepicker({
			autoclose: true
		});

		$('#frpeDatepicker').datepicker({
			autoclose: true
		});

		$('#fdgDatepicker').datepicker({
			autoclose: true
		});

		$('#ceeDatepicker').datepicker({
			autoclose: true
		});
	</script>

	<!-- AdminLTE App -->
	<script src="/adminlte/js/adminlte.min.js"></script>
</body>
</html>