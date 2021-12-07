@extends('layouts.master')

@section('content')


<div class="container-fluid">
        <div class="main-container">
            <div class="pd-ltr-12 xs-pd-20-10">
				<div class="card-box pd-20 mb-30">
					<a href="" class='btn btn-info' onclick="printDiv('printArea')"><i class='dw dw-print'></i>Print Data</a>
				</div>
                <div class="min-height-200px">
                    <div class="pd-20 card-box mb-30" id="printArea">
                        <div class="clearfix">
                            <h4 class="h4">Jamiat Dehli Siddiqui Biradri Pakistan</h4>
                        </div>
                        <div class="container mt-3 text-secondary">
                            <form action="" method="" enctype="multipart/form-data">
							@csrf
                            
                                <legend>Family Details</legend>
                                <div class="row justify-content-between">
                                    <div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Family Number</label>
											<input type="text" name="user_id" id="user_id" class="form-control" value="{{ $user->user_id}}" readonly>
										</div>
										<div class="form-group">
											<label>Full Name</label>
											<input type="text" name="reg_fname" class="form-control"  value="{{ $user->reg_fname}}" readonly>
										</div>
									
									</div>	
										
									<div class="col-md-4 col-sm-12 text-right">
										<img src="{{ url($user->reg_img)}}" id="avatar" alt="" class="img-fluid" style="border-radius:8%; height:200px">
                                    </div>
                                </div>
                                <div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Son of</label>
											<input type="text" name="reg_sonof" class="form-control"  value="{{ $user->reg_sonof}}" readonly>
										</div>
									</div>
                                    <div class="col-md-4">
										<div class="form-group">
											<label>Grand child of</label>
											<input type="text" name="reg_grandchild" class="form-control"  value="{{ $user->reg_grandchild}}" readonly>
										</div>
                                    </div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Education</label>
											<input type="text" name="reg_education" class="form-control"  value="{{ $user->reg_education}}" readonly>
										</div>
                                    </div>
                                </div>
                                <div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>Address</label>
											<textarea name="reg_address" class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Your Address" readonly>{{ $user->reg_address}}</textarea>
										</div>
									</div>
                                    <div class="col-md-6">
										<div class="form-group">
											<label>type of work</label>
											<input type="text" name="reg_work" class="form-control"  value="{{ $user->reg_work}}" readonly>
										</div>
										<div class="form-group">
											<label>Work Place Address</label>
											<textarea style="height: 83px;" name="reg_work_address" class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Your Address" readonly>{{ $user->reg_work_address}}</textarea>
										</div>
                                    </div>
                                </div>
                             
								<div class="row">
									<div class="col-md-3 col-sm-12">
										<div class="form-group">
											<label>CNIC</label>
											<input type="text" name="reg_nic" class="form-control"  value="{{ $user->reg_nic}}" readonly>
										</div>
									</div>
                                    <div class="col-md-3">
										<div class="form-group">
											<label>Date of Birth</label>
											<input type="date" name="reg_datebirth" class="form-control"  value="{{ $user->reg_datebirth}}" readonly>
										</div>
                                    </div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Mobile</label>
											<input type="number" name="reg_number" class="form-control"  value="{{ $user->reg_number}}" readonly>
										</div>
                                    </div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Land Line Number</label>
											<input type="number" name="reg_landline" class="form-control"  value="{{ $user->reg_landline}}" readonly>
										</div>
                                    </div>
                                </div>
								<div class="row">
									<div class="col-md-3 col-sm-12">
										<div class="form-group">
											<label>Wife's Name</label>
											<input type="text" name="reg_wife" class="form-control"  value="{{ $user->reg_wife}}" readonly>
										</div>
									</div>
                                    <div class="col-md-3">
										<div class="form-group">
											<label>Daughter of</label>
											<input type="text" name="reg_daughter" class="form-control"  value="{{ $user->reg_daughter}}" readonly>
										</div>
                                    </div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Grand Daughter of</label>
											<input type="text" name="reg_grand_daughter" class="form-control"  value="{{ $user->reg_grand_daughter}}" readonly>
										</div>
                                    </div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Number of Children</label>
											<input type="text" name="reg_childerns" class="form-control" id="reg_childrens"  value="{{ $user->reg_childerns}}" readonly>
										</div>
                                    </div>
                                </div>
                                
								<div class="row mt-5">
									<div class="col-md-4 col-sm-12 card-box mt-5 hidden_child" id="hidden_div">
                                        <legend>Child 1 Info*</legend>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="reg_child1_name" value="{{ $user->reg_child1_name}}" class="form-control" readonly >
                                        </div>
                                        <div class="form-group">
                                            <label>Age*</label>
                                            <input type="number"  name="reg_child1_age" value="{{ $user->reg_child1_age}}" class="form-control" readonly >
                                        </div>
                                        <div class="form-group">
                                            <label>Education*</label>
                                            <input type="text" name="reg_child1_education" value="{{ $user->reg_child1_education}}" class="form-control" readonly >
                                        </div>
                                        <div class="form-group">
                                            <label>N.I.C/NADRA registration number*</label>
                                            <input type="text"  name="reg_child1_nic" value="{{ $user->reg_child1_nic}}" class="form-control" readonly >
                                        </div>
                                        <div class="form-group">
                                            <label>Marital Status*</label>
											<input type="text" name="reg_child1_marital" value="{{ $user->reg_child1_marital}}" class="form-control" readonly >

                                        </div>
									</div>

									<div class="col-md-4 col-sm-12 card-box mt-5 hidden_child" id="hidden_div1" >
                                       
										<legend>Child 2 Info*</legend>
										<div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="reg_child2_name" value="{{ $user->reg_child2_name}}" class="form-control" readonly >
                                        </div>
                                        <div class="form-group">
                                            <label>Age*</label>
                                            <input type="number"  name="reg_child2_age" value="{{ $user->reg_child2_age}}" class="form-control" readonly >
                                        </div>
                                        <div class="form-group">
                                            <label>Education*</label>
                                            <input type="text" name="reg_child2_education" value="{{ $user->reg_child2_education}}" class="form-control" readonly >
                                        </div>
                                        <div class="form-group">
                                            <label>N.I.C/NADRA registration number*</label>
                                            <input type="text"  name="reg_child2_nic" value="{{ $user->reg_child2_nic}}" class="form-control" readonly >
                                        </div>
                                        <div class="form-group">
                                            <label>Marital Status*</label>
											<input type="text" name="reg_child2_marital" value="{{ $user->reg_child2_marital}}" class="form-control" readonly >
                                        </div>
                                    </div>
									<div class="col-md-4 col-sm-12 card-box mt-5 hidden_child" id="hidden_div2">
										<legend>Child 3 Info*</legend>
										<div class="form-group">
											<label>Name</label>
											<input type="text" name="reg_child3_name" value="{{ $user->reg_child3_name}}" class="form-control" readonly >
										</div>
										<div class="form-group">
											<label>Age*</label>
											<input type="number"  name="reg_child3_age" value="{{ $user->reg_child3_age}}" class="form-control" readonly >
										</div>
										<div class="form-group">
											<label>Education*</label>
											<input type="text" name="reg_child3_education" value="{{ $user->reg_child3_education}}" class="form-control" readonly >
										</div>
										<div class="form-group">
											<label>N.I.C/NADRA registration number*</label>
											<input type="text"  name="reg_child3_nic" value="{{ $user->reg_child3_nic}}" class="form-control" readonly >
										</div>
										<div class="form-group">
											<label>Marital Status*</label>
											<input type="text" name="reg_child3_marital" value="{{ $user->reg_child3_marital}}" class="form-control" readonly >
										</div>
									</div>
	
								</div>
								
								<div class="row mt-5 justify-content-between">
									<div class="col-md-4 col-sm-12 card-box mt-5 hidden_child" id="hidden_div3" >
									   
										<legend>Child 4 Info*</legend>
										<div class="form-group">
											<label>Name</label>
											<input type="text" name="reg_child4_name" value="{{ $user->reg_child4_name}}" class="form-control" readonly >
										</div>
										<div class="form-group">
											<label>Age*</label>
											<input type="number"  name="reg_child4_age" value="{{ $user->reg_child4_age}}" class="form-control" readonly >
										</div>
										<div class="form-group">
											<label>Education*</label>
											<input type="text" name="reg_child4_education" value="{{ $user->reg_child4_education}}" class="form-control" readonly >
										</div>
										<div class="form-group">
											<label>N.I.C/NADRA registration number*</label>
											<input type="text"  name="reg_child4_nic" value="{{ $user->reg_child4_nic}}" class="form-control" readonly >
										</div>
										<div class="form-group">
											<label>Marital Status*</label>
											<input type="text" name="reg_child4_marital" value="{{ $user->reg_child4_marital}}" class="form-control" readonly >
										</div>
									</div>
									<div class="col-md-4 col-sm-12 card-box mt-5 hidden_child" id="hidden_div4">
										<legend>Child 5 Info*</legend>
										<div class="form-group">
											<label>Name</label>
											<input type="text" name="reg_child5_name" value="{{ $user->reg_child5_name}}" class="form-control" readonly >
										</div>
										<div class="form-group">
											<label>Age*</label>
											<input type="number"  name="reg_child5_age" value="{{ $user->reg_child5_age}}" class="form-control" readonly >
										</div>
										<div class="form-group">
											<label>Education*</label>
											<input type="text" name="reg_child5_education" value="{{ $user->reg_child5_education}}" class="form-control"  readonly>
										</div>
										<div class="form-group">
											<label>N.I.C/NADRA registration number*</label>
											<input type="text"  name="reg_child5_nic" value="{{ $user->reg_child5_nic}}" class="form-control" readonly >
										</div>
										<div class="form-group">
											<label>Marital Status*</label>
											<input type="text" name="reg_child5_marital" value="{{ $user->reg_child5_marital}}" class="form-control" readonly >
										</div>
									</div>
	
									<div class="col-md-4 col-sm-12 card-box mt-5 hidden_child" id="hidden_div5" >
									   
										<legend>Child 6 Info*</legend>
										<div class="form-group">
											<label>Name</label>
											<input type="text" name="reg_child6_name" value="{{ $user->reg_child6_name}}" class="form-control" readonly >
										</div>
										<div class="form-group">
											<label>Age*</label>
											<input type="number"  name="reg_child6_age" value="{{ $user->reg_child6_age}}" class="form-control" readonly >
										</div>
										<div class="form-group">
											<label>Education*</label>
											<input type="text" name="reg_child6_education" value="{{ $user->reg_child6_education}}" class="form-control" readonly >
										</div>
										<div class="form-group">
											<label>N.I.C/NADRA registration number*</label>
											<input type="text"  name="reg_child6_nic" value="{{ $user->reg_child6_nic}}" class="form-control" readonly >
										</div>
										<div class="form-group">
											<label>Marital Status*</label>
											<input type="text" name="reg_child6_marital" value="{{ $user->reg_child6_marital}}" class="form-control" readonly >
										</div>
									</div>
								</div>

								<div class="row mt-5 justify-content-between">
								</div>

								<div class="row mt-5 justify-content-between">
									<div class="col-md-4 col-sm-12 card-box mt-5 hidden_child" id="hidden_div6">
                                        <legend>Child 7 Info*</legend>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="reg_child7_name" value="{{ $user->reg_child7_name}}" class="form-control" readonly >
                                        </div>
                                        <div class="form-group">
                                            <label>Age*</label>
                                            <input type="number"  name="reg_child7_age" value="{{ $user->reg_child7_age}}" class="form-control" readonly >
                                        </div>
                                        <div class="form-group">
                                            <label>Education*</label>
                                            <input type="text" name="reg_child7_education" value="{{ $user->reg_child7_education}}" class="form-control" readonly >
                                        </div>
                                        <div class="form-group">
                                            <label>N.I.C/NADRA registration number*</label>
                                            <input type="text"  name="reg_child7_nic" value="{{ $user->reg_child7_nic}}" class="form-control" readonly >
                                        </div>
                                        <div class="form-group">
                                            <label>Marital Status*</label>
                                            <input type="text" name="reg_child7_marital" value="{{ $user->reg_child7_marital}}" class="form-control" readonly >
                                        </div>
									</div>
								</div>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection