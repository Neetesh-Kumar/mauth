@extends('layouts.master')

@section('content')

<div class="container-fluid">
        <div class="main-container">
            <div class="pd-ltr-12 xs-pd-20-10">
                <div class="min-height-200px">

                    <div class="pd-20 card-box mb-30">
                        <div class="clearfix">
                            <h4 class="h4">Jamiat Dehli Siddiqui Biradri Pakistan (Family Registration Form)</h4>
                        </div>
                        <div class="container text-secondary">
                        <form action="{{ route('register')}}" method="post" enctype="multipart/form-data">
                             @csrf
                          
                                <legend>Personal Info</legend>
                                <div class="row">
                                    <div class="col-md-2 col-sm-12 offset-md-6 text-right">
                                        <img src="{{asset('Admin/reg_img/default_avatar.png')}}" id="avatar" alt="" class="img-fluid" style="height:100px; width:auto; border-radius: 8%;">
                                    </div>	
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Picture</label>
                                            <input type="file" name="reg_img" id="reg_img" class="form-control" onchange="readURL(this);"  required>
                                            @error('reg_img')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                             @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
									<div class="col-md-6 col-sm-12">
                                    <div class="form-group">
											<label>Family Number</label>
                                            <input type="text" name="user_id" id="user_id" class="form-control" value="" >
                                            @error('user_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                             @enderror
										</div>
										
									</div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" id="password" name="reg_password" class="form-control" placeholder="********" required>
											<span id="togglePassword" class="pr-4 fa fa-fw fa-eye field-icon toggle-password"></span>
                                            @error('reg_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                             @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
									<div class="col-md-6 col-sm-12">
                                    <div class="form-group">
											<label>First Name</label>
											<input type="text" name="reg_fname" class="form-control" placeholder="ex. FirstName" requried>
										</div>
										
									</div>
                                    <div class="col-md-6">
                                    <div class="form-group">
											<label>Last Name</label>
											<input type="text" name="reg_lname" class="form-control" placeholder="ex. Evans" requried>
										</div>
                                    </div>
                                </div>
                             
								<div class="row">
									<div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                            <label>Son Of*</label>
                                            <input type="text" name="reg_sonof" class="form-control"  required>
                                        </div>
									</div>
                                    <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                            <label>Grand child of*</label>
                                            <input type="text"  name="reg_grandchild" class="form-control"  required>
                                        </div>
                                    </div>
								</div>
                                
                                <div class="row">
									<div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                            <label>Education *</label>
                                            <input type="text" name="reg_education" class="form-control"  required>
                                        </div>
									</div>
                                    <div class="col-md-6 col-sm-12">
                                    <!-- <div class="form-group">
                                            <label>Grand child of</label>
                                            <input type="text"  name="reg_grandchild" class="form-control" placeholder="********" required>
                                        </div> -->
                                    </div>
								</div>
                                <div class="row">
									<div class="col-md-12 col-sm-12">
                                    <div class="form-group">
										<label>Address</label>
                                        <textarea name="reg_address" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your Address"></textarea>										</div>
									</div>
                                   
								</div>
                                <div class="row">
									<div class="col-md-6 col-sm-12">
                                    <label for="exampleFormControlSelect1">Type Of Work*</label>
                                        <select class="form-control" name="reg_work">
                                        <option selected>-select-</option>
                                        <option>Business</option>
                                        <option>Job</option>
                                        <option>None</option>
                                        
                                        </select>
                                 </div>
                                 <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                            <label>Work place address</label>
                                            <input type="text"  name="reg_work_address" class="form-control" placeholder="Work Address" required>
                                        </div>
                                    </div>
								</div>
                                <div class="row">
									<div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                            <label> Card N.I.C Number *</label>
                                            <input type="text" name="reg_nic" placeholder="00000-0000000-0" id="cnic" class="form-control"  required>
                                        </div>
									</div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Date Of Birth</label>
                                            <input type="date"  name="reg_datebirth" class="form-control"  required>
                                        </div>
                                    </div>
								</div>
                                <div class="row">
									<div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                            <label> Mobile Number *</label>
                                            <input type="number" name="reg_number" class="form-control" placeholder="ex. 03xxxxxxxxx" maxlength="11" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                                        </div>
									</div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Land Line Number*</label>
                                            <input type="number"  name="reg_landline" class="form-control"  maxlength="11" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                                        </div>
                                    </div>
								</div>
                                <div class="row">
									<div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                            <label>Wife's Name *</label>
                                            <input type="text" name="reg_wife" class="form-control"  required>
                                        </div>
									</div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Daughter of*</label>
                                            <input type="text"  name="reg_daughter" class="form-control"  required>
                                        </div>
                                    </div>
								</div>
                                <div class="row">
									<div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                            <label>Grand Daughter of *</label>
                                            <input type="text" name="reg_grand_daughter" class="form-control"  required>
                                        </div>
									</div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Number of Children*</label>
                                         <select id="myselect" class="form-control" name="reg_childerns">
                                        <option>None</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        </select>
                                        </div>
                                    </div>
								</div>
                                
                                    <div class="row " >
                                        <div class="col-md-1"></div>
									<div class="col-md-5 col-sm-12 card-box hidden_child" id="hidden_div">
                                        <legend>Child 1 Info*</legend>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="reg_child1_name" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Age*</label>
                                            <input type="number"  name="reg_child1_age" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Education*</label>
                                            <input type="text" name="reg_child1_education" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>N.I.C/NADRA registration number*</label>
                                            <input type="text"  name="reg_child1_nic" placeholder="00000-0000000-0" id="cnic1" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Marital Status*</label>
                                            <select class="form-control" name="reg_child1_marital">
                                        <option disabled selected>Choose Option</option>
                                        <option value="Single" >Single</option>
                                        <option value="Married">Married</option>
                                        
                                        </select>
                                        </div>
									</div>
                                    
                                   
                                
                                
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5 col-sm-12 card-box  hidden_child" id="hidden_div1" >
                                       
                                    <legend>Child 2 Info*</legend>
                                    <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="reg_child2_name" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Age*</label>
                                            <input type="number"  name="reg_child2_age" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Education*</label>
                                            <input type="text" name="reg_child2_education" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>N.I.C/NADRA registration number*</label>
                                            <input type="text"  name="reg_child2_nic" placeholder="00000-0000000-0" id="cnic2" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Marital Status*</label>
                                            <select class="form-control" name="reg_child2_marital">
                                        <option disabled selected>Choose Option</option>
                                        <option value="Single" >Single</option>
                                        <option value="Married">Married</option>
                                        
                                        </select>
                                        </div>
                                    </div>
								
                                
        </div>
								<!-- </div>
                            
                            </div> -->
                        
                        
                           
                               

                                <div class="row pt-3">
                                    <div class="col-md-1"></div>
									<div class="col-md-5 col-sm-12 card-box hidden_child" id="hidden_div2">
                                    <legend>Child 3 Info*</legend>
                                    <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="reg_child3_name" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Age*</label>
                                            <input type="number"  name="reg_child3_age" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Education*</label>
                                            <input type="text" name="reg_child3_education" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>N.I.C/NADRA registration number*</label>
                                            <input type="text"  name="reg_child3_nic" placeholder="00000-0000000-0" id="cnic3" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Marital Status*</label>
                                            <select class="form-control" name="reg_child3_marital">
                                        <option disabled selected>Choose Option</option>
                                        <option value="Single" >Single</option>
                                        <option value="Married">Married</option>
                                        
                                        </select>
                                        </div>
									</div>
                                    
                              
                               
        
                            
                                
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5 col-sm-12 card-box hidden_child" id="hidden_div3">
                                    <legend>Child 4 Info*</legend>
                                    <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="reg_child4_name" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Age*</label>
                                            <input type="number"  name="reg_child4_age" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Education*</label>
                                            <input type="text" name="reg_child4_education" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>N.I.C/NADRA registration number*</label>
                                            <input type="text"  name="reg_child4_nic" placeholder="00000-0000000-0" id="cnic4" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Marital Status*</label>
                                            <select class="form-control" name="reg_child4_marital">
                                        <option disabled selected>Choose Option</option>
                                        <option value="Single" >Single</option>
                                        <option value="Married">Married</option>
                                        
                                        </select>
                                        </div>
                                    </div>
								</div>
                               

    
                                
                               
                                <div class="row pt-3">
                                    <div class="col-md-1"></div>
									<div class="col-md-5 col-sm-12 card-box hidden_child" id="hidden_div4" >
                                    <legend>Child 5 Info*</legend>
                                    <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="reg_child5_name" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Age*</label>
                                            <input type="number"  name="reg_child5_age" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Education*</label>
                                            <input type="text" name="reg_child5_education" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>N.I.C/NADRA registration number*</label>
                                            <input type="text"  name="reg_child5_nic" placeholder="00000-0000000-0" id="cnic5" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Marital Status*</label>
                                            <select class="form-control" name="reg_child5_marital">
                                        <option disabled selected>Choose Option</option>
                                        <option value="Single" >Single</option>
                                        <option value="Married">Married</option>
                                        
                                        </select>
                                        </div>
									</div>
                                   
                                
                                
                               
								
                               
                              
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5 col-sm-12 card-box hidden_child" id="hidden_div5" >
                                    <legend>Child 6 Info*</legend>
                                    <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="reg_child6_name" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Age*</label>
                                            <input type="number"  name="reg_child6_age" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Education*</label>
                                            <input type="text" name="reg_child6_education" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>N.I.C/NADRA registration number*</label>
                                            <input type="text"  name="reg_child6_nic" placeholder="00000-0000000-0" id="cnic6" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Marital Status*</label>
                                            <select class="form-control" name="reg_child6_marital">
                                        <option disabled selected>Choose Option</option>
                                        <option value="Single" >Single</option>
                                        <option value="Married">Married</option>
                                        
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-3">
                                <div class="col-md-1"></div>
                                    <div class="col-md-5 col-sm-12 card-box hidden_child" id="hidden_div6" >
                                    <legend>Child 7 Info*</legend>
                                    <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="reg_child7_name" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Age*</label>
                                            <input type="number"  name="reg_child7_age" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Education*</label>
                                            <input type="text" name="reg_child7_education" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>N.I.C/NADRA registration number*</label>
                                            <input type="text"  name="reg_child7_nic" placeholder="00000-0000000-0" id="cnic7"  class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Marital Status*</label>
                                            <select class="form-control" name="reg_child7_marital">
                                        <option disabled selected>Choose Option</option>
                                        <option value="Single" >Single</option>
                                        <option value="Married">Married</option>
                                        
                                        </select>
                                        </div>
                                    </div>
                                </div>
							
                                <div class="row">
                                    <div class="col-md-4">
                                    <button type="submit" class="btn btn-outline-success">
                                    {{ __('Register') }}
                                </button>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>

                    <!-- success Popup html Start -->
                    <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body text-center font-18">
                                    <h3 class="mb-20">Form Submitted!</h3>
                                    <div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- success Popup html End -->
                </div>
            </div>
        </div>
    </div>


	
@endsection
