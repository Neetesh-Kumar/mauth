@extends('layouts.master')

@section('content')

<div class="main-container">
		<div class="xs-pd-20-10 pd-ltr-20">
			

			<!-- Export Datatable start -->
			<div class="card-box mb-30 p-5">
				<div class="pd-20">
					<div class="row">
						<div class="col-md-6">
							<h4 class="text-blue h4">All Family List</h4>
						</div>
						<div class="col-md-6">
                        <a type="button" class="btn float-right text-white" data-bgcolor="#00b489" href="{{route('register')}}"><i class="fa fa-plus"></i> Add New Data <Form></Form></a>
						</div>
	
					</div>
				</div>

                <div class="pb-20">
				
					<table class="table hover data-table-export nowrap table-bordered">
					
						<thead class="thead-dark">
							<tr>
                                <!-- <th>User Id</th> -->
                                <th>Family Number</th>
								<th class="table-plus datatable-nosort">User Name</th>
								<th>Son Of*</th>
								<th>Grand child of.</th>
								<th>Education</th>
								<th>Address</th>
								<th>Type Of Work</th>
								<th>Work Address</th>
								<th>CNIC Number</th>
								<th>Date Of Birth</th>
								<th>Mobile Number</th>
								<th>Land Line Number</th>
								<th>Wife's Name</th>
								<th>Daughter of</th>
								<th>Grand Daughter of</th>
								<th>Children</th>
								
								<th class="datatable-nosort">Action</th>
							</tr>
						</thead>
						<tbody>
						
						@foreach ($user as $user) 
						
							<tr>
								<td>{{ $user->user_id}}</td>
								<td>{{ $user->reg_fname}}</td>
								<td>{{ $user->reg_sonof}}</td>
								<td>{{ $user->reg_grandchild}}</td>
								<td>{{ $user->reg_education}}</td>
								<td>{{ $user->reg_address}}</td>
								<td>{{ $user->reg_work}}</td>
								<td>{{ $user->reg_work_address}}</td>
								<td>{{ $user->reg_nic}}</td>
								<td>{{ $user->reg_datebirth}}</td>	
								<td>{{ $user->reg_number}}</td>								
								<td>{{ $user->reg_landline}}</td>
								<td>{{ $user->reg_wife}}</td>
								<td>{{ $user->reg_daughter}}</td>
								<td>{{ $user->reg_grand_daughter}}</td>
								<td>{{ $user->reg_childerns}}</td>
								<td>
									<form action="" method="post">
                                    <a href="{{url ('edit1/'.$user->id)}}" class="edit btn" title="Edit"  style="text-decoration: none;color: orange;">Edit <i class="fa fa-lg fa-pencil"></i></a>
                                    <a href="{{url ('info/'.$user->id)}}" class="info btn" title="Info"  style="text-decoration: none;color: orange;">View <i class="fa fa-lg fa-eye"></i></a>
                                   
									</form>
							</td>
                        	</tr>
						@endforeach
						</tbody>
					</table>
				</div>
                
			</div>
			<!-- Export Datatable End -->


			<!-- <div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
					<div class="card-box pd-30 pt-10 height-100-p">
						<h2 class="mb-30 h4">World Map</h2>
						<div id="browservisit" style="width:100%!important; height:380px"></div>
					</div>
				</div>
			</div> -->
		</div>
	</div>


@endsection