@extends('layouts.master')

@section('content')
<div class="main-container">
		<div class="xs-pd-20-10 pd-ltr-20">
			<!-- <div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Dashboard</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="admin_dashboard.php">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
							</ol>
						</nav>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="dropdown">
							<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
								January 2018
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#">Export List</a>
								<a class="dropdown-item" href="#">Policies</a>
								<a class="dropdown-item" href="#">View Assets</a>
							</div>
						</div>
					</div>
				</div>
			</div> -->


			<!-- Export Datatable start -->

			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="{{asset('Admin/vendors/images/banner-img.png')}}" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Welcome back <div class="weight-600 font-30 text-blue">{{ Auth::user()->name }}</div>
						</h4>
						<p class="font-18 max-width-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde hic non repellendus debitis iure, doloremque assumenda. Autem modi, corrupti, nobis ea iure fugiat, veniam non quaerat mollitia animi error corporis.</p>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-xl-2 col-md-2 col-sm-4 col-6 mb-30">
						<div class="card-box height-100-p widget-style1">
							<div class="d-flex flex-wrap align-items-center">
								<div class="widget-data">
								<div class="row">
										<div class="col-md-6 col-sm-6 font-30 text-right">
											<i class="dw dw-user1"></i>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="h4 mb-0"><span class="badge badge-info"></span></div>
											<div class="weight-600 font-14">Users</div>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-2 col-md-2 col-sm-4 col-6 mb-30">
						<div class="card-box height-100-p widget-style1">
							<div class="d-flex flex-wrap align-items-center">
								<div class="widget-data">
									<div class="row">
										<div class="col-md-6 col-sm-6 font-30">
											<i class="dw dw-quotation"></i>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="h4 mb-0"><span class="badge badge-success"></span></div>
											<div class="weight-600 font-14">Delivered</div>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			<div class="card-box mb-30">
				<div class="pd-20">
					<div class="row">
						<div class="col-md-6">
							<h4 class="text-blue h4">User Dashboard</h4>
						</div>
						<div class="col-md-6">
						</div>
	
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
					<div class="card-box pd-30 pt-10 height-100-p">
						<h2 class="mb-30 h4">World Map</h2>
						<div id="browservisit" style="width:100%!important; height:380px"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
