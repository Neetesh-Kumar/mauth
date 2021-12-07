@extends('layouts.master')

@section('content')


<div class="main-container">
		<div class="xs-pd-20-10 pd-ltr-20 pb-4">
            <div class="card-box pd-20 mb-30">
                <div class="clearfix">
					<div class="row justify-content-between">
						<div class="col-md-4">
							<h3 class="h3">Your Profile</h3>
						</div>
						<div class="col-md-4">
							<a href="#" class="btn btn-outline-info float-right"><i class="fi-list-thumbnails"></i> Admin List</a>
						</div>
					</div>
                </div>
            </div>
            <div class="pd-20 card-box mb-30 pb-5 ">
                <div class="container text-secondary">
                    <form action="" method="post">
                        @csrf
                        	
                        <input type="number" name="id" value="{{ $users->id}}" style="display:none" readonly>
                        <legend>Personal Info</legend>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $users->name}}" required>
                                </div>
                            </div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Email Address</label>
									<input type="email" name="email" class="form-control" value="{{ $users->email}}" required>
								</div>
							</div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" id="password" name="password" class="form-control" value="{{ $users->password}}" required>
                                    <span id="togglePassword" class="pr-4 fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                               <a href="{{ route('edit', $users->id ) }}" class="btn btn-block btn-outline-info" name="edit"> Edit</a>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
		</div>
	</div>


@endsection