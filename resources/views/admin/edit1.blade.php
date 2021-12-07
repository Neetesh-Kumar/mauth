@extends('layouts.master1')

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
                            <form action="{{ route('update1', $user->id ) }}" method="POST" enctype="multipart/form-data">
							@csrf
							
                       			 @method('PUT')
                            
                                <legend>Family Details</legend>
                                <div class="row justify-content-between">
                                    <div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Family Number</label>
											<input type="text" name="user_id" id="user_id" class="form-control" value="{{ $user->user_id}}" readonly>
										</div>
										<div class="form-group">
											<label>Full Name</label>
											<input type="text" name="reg_fname" class="form-control"  value="{{ $user->reg_fname}}" >
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
											<input type="text" name="reg_sonof" class="form-control"  value="{{ $user->reg_sonof}}" >
										</div>
									</div>
                                    <div class="col-md-4">
										<div class="form-group">
											<label>Grand child of</label>
											<input type="text" name="reg_grandchild" class="form-control"  value="{{ $user->reg_grandchild}}" >
										</div>
                                    </div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Education</label>
											<input type="text" name="reg_education" class="form-control"  value="{{ $user->reg_education}}" >
										</div>
                                    </div>
                                </div>
                                <div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>Address</label>
											<textarea name="reg_address" class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Your Address" >{{ $user->reg_address}}</textarea>
										</div>
									</div>
                                    <div class="col-md-6">
										<div class="form-group">
											<label>type of work</label>
											<input type="text" name="reg_work" class="form-control"  value="{{ $user->reg_work}}" >
										</div>
										<div class="form-group">
											<label>Work Place Address</label>
											<textarea style="height: 83px;" name="reg_work_address" class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Your Address" >{{ $user->reg_work_address}}</textarea>
										</div>
                                    </div>
                                </div>
                             
								<div class="row">
									<div class="col-md-3 col-sm-12">
										<div class="form-group">
											<label>CNIC</label>
											<input type="text" name="reg_nic" class="form-control"  value="{{ $user->reg_nic}}" >
										</div>
									</div>
                                    <div class="col-md-3">
										<div class="form-group">
											<label>Date of Birth</label>
											<input type="date" name="reg_datebirth" class="form-control"  value="{{ $user->reg_datebirth}}" >
										</div>
                                    </div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Mobile</label>
											<input type="number" name="reg_number" class="form-control"  value="{{ $user->reg_number}}" >
										</div>
                                    </div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Land Line Number</label>
											<input type="number" name="reg_landline" class="form-control"  value="{{ $user->reg_landline}}" >
										</div>
                                    </div>
                                </div>
								<div class="row">
									<div class="col-md-3 col-sm-12">
										<div class="form-group">
											<label>Wife's Name</label>
											<input type="text" name="reg_wife" class="form-control"  value="{{ $user->reg_wife}}" >
										</div>
									</div>
                                    <div class="col-md-3">
										<div class="form-group">
											<label>Daughter of</label>
											<input type="text" name="reg_daughter" class="form-control"  value="{{ $user->reg_daughter}}" >
										</div>
                                    </div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Grand Daughter of</label>
											<input type="text" name="reg_grand_daughter" class="form-control"  value="{{ $user->reg_grand_daughter}}" >
										</div>
                                    </div>
									<div class="col-md-3">
									<div class="form-group">
											<label>Number of Children</label>
											<select id="myselect" class="form-control" name="reg_childerns" value="{{ $user->reg_childerns}}" required>
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
                                
								<div class="row mt-5">
									<div class="col-md-4 col-sm-12 card-box mt-5 hidden_child" id="hidden_div">
                                        <legend>Child 1 Info*</legend>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="reg_child1_name" value="{{ $user->reg_child1_name}}" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Age*</label>
                                            <input type="number"  name="reg_child1_age" value="{{ $user->reg_child1_age}}" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Education*</label>
                                            <input type="text" name="reg_child1_education" value="{{ $user->reg_child1_education}}" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>N.I.C/NADRA registration number*</label>
                                            <input type="text"  name="reg_child1_nic" value="{{ $user->reg_child1_nic}}" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Marital Status*</label>
											<select id="marital_status1" class="form-control" name="reg_child1_marital" value="{{ $user->reg_child1_marital}}">
												<option value="" selected>Choose Option</option>
												<option value="Single">Single</option>
												<option value="Married">Married</option>
											</select>
                                        </div>
									</div>

									<div class="col-md-4 col-sm-12 card-box mt-5 hidden_child" id="hidden_div1" >
                                       
										<legend>Child 2 Info*</legend>
										<div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="reg_child2_name" value="{{ $user->reg_child2_name}}" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Age*</label>
                                            <input type="number"  name="reg_child2_age" value="{{ $user->reg_child2_age}}" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Education*</label>
                                            <input type="text" name="reg_child2_education" value="{{ $user->reg_child2_education}}" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>N.I.C/NADRA registration number*</label>
                                            <input type="text"  name="reg_child2_nic" value="{{ $user->reg_child2_nic}}" class="form-control"  >
                                        </div>
										<div class="form-group">
                                            <label>Marital Status*</label>
											<select id="marital_status1" class="form-control" name="reg_child2_marital" value="{{ $user->reg_child2_marital}}">
												<option value="" selected>Choose Option</option>
												<option value="Single">Single</option>
												<option value="Married">Married</option>
											</select>
                                        </div>
                                    </div>
									<div class="col-md-4 col-sm-12 card-box mt-5 hidden_child" id="hidden_div2">
										<legend>Child 3 Info*</legend>
										<div class="form-group">
											<label>Name</label>
											<input type="text" name="reg_child3_name" value="{{ $user->reg_child3_name}}" class="form-control"  >
										</div>
										<div class="form-group">
											<label>Age*</label>
											<input type="number"  name="reg_child3_age" value="{{ $user->reg_child3_age}}" class="form-control"  >
										</div>
										<div class="form-group">
											<label>Education*</label>
											<input type="text" name="reg_child3_education" value="{{ $user->reg_child3_education}}" class="form-control"  >
										</div>
										<div class="form-group">
											<label>N.I.C/NADRA registration number*</label>
											<input type="text"  name="reg_child3_nic" value="{{ $user->reg_child3_nic}}" class="form-control"  >
										</div>
										<div class="form-group">
                                            <label>Marital Status*</label>
											<select id="marital_status1" class="form-control" name="reg_child3_marital" value="{{ $user->reg_child3_marital}}">
												<option value="" selected>Choose Option</option>
												<option value="Single">Single</option>
												<option value="Married">Married</option>
											</select>
                                        </div>
									</div>
	
								</div>
								
								<div class="row mt-5 justify-content-between">
									<div class="col-md-4 col-sm-12 card-box mt-5 hidden_child" id="hidden_div3" >
									   
										<legend>Child 4 Info*</legend>
										<div class="form-group">
											<label>Name</label>
											<input type="text" name="reg_child4_name" value="{{ $user->reg_child4_name}}" class="form-control"  >
										</div>
										<div class="form-group">
											<label>Age*</label>
											<input type="number"  name="reg_child4_age" value="{{ $user->reg_child4_age}}" class="form-control"  >
										</div>
										<div class="form-group">
											<label>Education*</label>
											<input type="text" name="reg_child4_education" value="{{ $user->reg_child4_education}}" class="form-control"  >
										</div>
										<div class="form-group">
											<label>N.I.C/NADRA registration number*</label>
											<input type="text"  name="reg_child4_nic" value="{{ $user->reg_child4_nic}}" class="form-control"  >
										</div>
										<div class="form-group">
                                            <label>Marital Status*</label>
											<select id="marital_status1" class="form-control" name="reg_child4_marital" value="{{ $user->reg_child4_marital}}">
												<option value="" selected>Choose Option</option>
												<option value="Single">Single</option>
												<option value="Married">Married</option>
											</select>
                                        </div>
									</div>
									<div class="col-md-4 col-sm-12 card-box mt-5 hidden_child" id="hidden_div4">
										<legend>Child 5 Info*</legend>
										<div class="form-group">
											<label>Name</label>
											<input type="text" name="reg_child5_name" value="{{ $user->reg_child5_name}}" class="form-control"  >
										</div>
										<div class="form-group">
											<label>Age*</label>
											<input type="number"  name="reg_child5_age" value="{{ $user->reg_child5_age}}" class="form-control"  >
										</div>
										<div class="form-group">
											<label>Education*</label>
											<input type="text" name="reg_child5_education" value="{{ $user->reg_child5_education}}" class="form-control"  >
										</div>
										<div class="form-group">
											<label>N.I.C/NADRA registration number*</label>
											<input type="text"  name="reg_child5_nic" value="{{ $user->reg_child5_nic}}" class="form-control"  >
										</div>
										<div class="form-group">
                                            <label>Marital Status*</label>
											<select id="marital_status1" class="form-control" name="reg_child5_marital" value="{{ $user->reg_child5_marital}}">
												<option value="" selected>Choose Option</option>
												<option value="Single">Single</option>
												<option value="Married">Married</option>
											</select>
                                        </div>
									</div>
	
									<div class="col-md-4 col-sm-12 card-box mt-5 hidden_child" id="hidden_div5" >
									   
										<legend>Child 6 Info*</legend>
										<div class="form-group">
											<label>Name</label>
											<input type="text" name="reg_child6_name" value="{{ $user->reg_child6_name}}" class="form-control"  >
										</div>
										<div class="form-group">
											<label>Age*</label>
											<input type="number"  name="reg_child6_age" value="{{ $user->reg_child6_age}}" class="form-control"  >
										</div>
										<div class="form-group">
											<label>Education*</label>
											<input type="text" name="reg_child6_education" value="{{ $user->reg_child6_education}}" class="form-control"  >
										</div>
										<div class="form-group">
											<label>N.I.C/NADRA registration number*</label>
											<input type="text"  name="reg_child6_nic" value="{{ $user->reg_child6_nic}}" class="form-control"  >
										</div>
										<div class="form-group">
											<label>Marital Status*</label>
											<input type="text" name="reg_child6_marital" value="{{ $user->reg_child6_marital}}" class="form-control"  >
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
                                            <input type="text" name="reg_child7_name" value="{{ $user->reg_child7_name}}" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Age*</label>
                                            <input type="number"  name="reg_child7_age" value="{{ $user->reg_child7_age}}" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>Education*</label>
                                            <input type="text" name="reg_child7_education" value="{{ $user->reg_child7_education}}" class="form-control"  >
                                        </div>
                                        <div class="form-group">
                                            <label>N.I.C/NADRA registration number*</label>
                                            <input type="text"  name="reg_child7_nic" value="{{ $user->reg_child7_nic}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Marital Status*</label>
											<select id="marital_status1" class="form-control" name="reg_child7_marital" value="{{ $user->reg_child7_marital}}">
												<option value="" selected>Choose Option</option>
												<option value="Single">Single</option>
												<option value="Married">Married</option>
											</select>
                                        </div>
									</div>
								</div>
								<div class="row">
                                    <div class="col-md-4">
                                        <input type="submit" class="btn btn-block btn-outline-success" name="Update" value="Update">
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

@section('footer-scripts')
<script>

$("#myselect select").prop('required',true);

$("#marital_status1 option").each(function(){
	if ($(this).val() == "{{ $user->reg_child1_marital }}")
	$(this).attr("selected","selected");
	
});

$("#marital_status2 option").each(function(){
	if ($(this).val() == "{{ $user->reg_child2_marital}}")
	$(this).attr("selected","selected");
	
});
$("#marital_status3 option").each(function(){
	if ($(this).val() == "{{ $user->reg_child3_marital }}")
	$(this).attr("selected","selected");
	
});
$("#marital_status4 option").each(function(){
	if ($(this).val() == "{{ $user->reg_child4_marital }}")
	$(this).attr("selected","selected");
	
});
$("#marital_status5 option").each(function(){
	if ($(this).val() == "{{ $user->reg_child5_marital}}")
	$(this).attr("selected","selected");
	
});
$("#marital_status6 option").each(function(){
	if ($(this).val() == "{{ $user->reg_child6_marital }}")
	$(this).attr("selected","selected");
	
});
$("#marital_status7 option").each(function(){
	if ($(this).val() == "{{ $user->reg_child7_marital }}")
	$(this).attr("selected","selected");
	
});
	
$("#myselect option").each(function(){
	if ($(this).val() == {{ $user->reg_childerns }})
	$(this).attr("selected","selected");
	
});
$(document).ready(function(){



if($("#myselect option:selected").val() == "1" ){
$('#hidden_div').show();
$('#hidden_div input').prop('required',true);
$('#hidden_div1').hide();
$('#hidden_div2').hide();
$('#hidden_div3').hide();
$('#hidden_div4').hide();
$('#hidden_div5').hide();
$('#hidden_div6').hide();
}
else if($("#myselect option:selected").val() == "2"){
$('#hidden_div').show();
$('#hidden_div input').prop('required',true);
$('#hidden_div1').show();
$('#hidden_div1 input').prop('required',true);
$('#hidden_div2').hide();
$('#hidden_div3').hide();
$('#hidden_div4').hide();
$('#hidden_div5').hide();
$('#hidden_div6').hide();
}
else if($("#myselect option:selected").val() == "3"){
$('#hidden_div').show();
$('#hidden_div input').prop('required',true);
$('#hidden_div1').show();
$('#hidden_div1 input').prop('required',true);
$('#hidden_div2').show();
$('#hidden_div2 input').prop('required',true);
$('#hidden_div3').hide();
$('#hidden_div4').hide();
$('#hidden_div5').hide();
$('#hidden_div6').hide();

}
else if($("#myselect option:selected").val() == "4"){
$('#hidden_div').show();
$('#hidden_div input').prop('required',true);
$('#hidden_div1').show();
$('#hidden_div1 input').prop('required',true);
$('#hidden_div2').show();
$('#hidden_div2 input').prop('required',true);
$('#hidden_div3').show();
$('#hidden_div3 input').prop('required',true);
$('#hidden_div4').hide();
$('#hidden_div5').hide();
$('#hidden_div6').hide();

}
else if($("#myselect option:selected").val() == "5"){
$('#hidden_div').show();
$('#hidden_div input').prop('required',true);
$('#hidden_div1').show();
$('#hidden_div1 input').prop('required',true);
$('#hidden_div2').show();
$('#hidden_div2 input').prop('required',true);
$('#hidden_div3').show();
$('#hidden_div3 input').prop('required',true);
$('#hidden_div4').show();
$('#hidden_div4 input').prop('required',true);
$('#hidden_div5').hide();
$('#hidden_div6').hide();

}
else if($("#myselect option:selected").val() == "6"){
$('#hidden_div').show();
$('#hidden_div input').prop('required',true);
$('#hidden_div1').show();
$('#hidden_div1 input').prop('required',true);
$('#hidden_div2').show();
$('#hidden_div2 input').prop('required',true);
$('#hidden_div3').show();
$('#hidden_div3 input').prop('required',true);
$('#hidden_div4').show();
$('#hidden_div4 input').prop('required',true);
$('#hidden_div5').show();
$('#hidden_div5 input').prop('required',true);
$('#hidden_div6').hide();

}
else if($("#myselect option:selected").val() == "7"){
$('#hidden_div').show();
$('#hidden_div input').prop('required',true);
$('#hidden_div1').show();
$('#hidden_div1 input').prop('required',true);
$('#hidden_div2').show();
$('#hidden_div2 input').prop('required',true);
$('#hidden_div3').show();
$('#hidden_div3 input').prop('required',true);
$('#hidden_div4').show();
$('#hidden_div4 input').prop('required',true);
$('#hidden_div5').show();
$('#hidden_div5 input').prop('required',true);
$('#hidden_div6').show();
$('#hidden_div6 input').prop('required',true);


}
else{
$('#hidden_div').hide();
$('#hidden_div1').hide();
$('#hidden_div2').hide();
$('#hidden_div3').hide();
$('#hidden_div4').hide();
$('#hidden_div5').hide();
$('#hidden_div6').hide();

}
})


$('.hidden_child').hide();

$('#myselect').change(function () {
$select=$(this).find(':selected').val(); 

if($select == "1" ){
$('#hidden_div').show();
$('#hidden_div input').prop('required',true);
$('#hidden_div1').hide();
$('#hidden_div1 input').prop('required',false);
$('#hidden_div2').hide();
$('#hidden_div2 input').prop('required',false);
$('#hidden_div3').hide();
$('#hidden_div3 input').prop('required',false);
$('#hidden_div4').hide();
$('#hidden_div4 input').prop('required',false);
$('#hidden_div5').hide();
$('#hidden_div5 input').prop('required',false);
$('#hidden_div6').hide();
$('#hidden_div6 input').prop('required',false);

$("#hidden_div select").prop('required',true);
$("#hidden_div1 select").prop('required',false);
$("#hidden_div2 select").prop('required',false);
$("#hidden_div3 select").prop('required',false);
$("#hidden_div4 select").prop('required',false);
$("#hidden_div5 select").prop('required',false);
$("#hidden_div6 select").prop('required',false);

}
else if($select == "2"){
$('#hidden_div').show();
$('#hidden_div input').prop('required',true);
$('#hidden_div1').show();
$('#hidden_div1 input').prop('required',true);
$('#hidden_div2').hide();
$('#hidden_div2 input').prop('required',false);
$('#hidden_div3').hide();
$('#hidden_div3 input').prop('required',false);
$('#hidden_div4').hide();
$('#hidden_div4 input').prop('required',false);
$('#hidden_div5').hide();
$('#hidden_div5 input').prop('required',false);
$('#hidden_div6').hide();
$('#hidden_div6 input').prop('required',false);

$("#hidden_div select").prop('required',true);
$("#hidden_div1 select").prop('required',true);
$("#hidden_div2 select").prop('required',false);
$("#hidden_div3 select").prop('required',false);
$("#hidden_div4 select").prop('required',false);
$("#hidden_div5 select").prop('required',false);
$("#hidden_div6 select").prop('required',false);

}
else if($select == "3"){
$('#hidden_div').show();
$('#hidden_div input').prop('required',true);
$('#hidden_div1').show();
$('#hidden_div1 input').prop('required',true);
$('#hidden_div2').show();
$('#hidden_div2 input').prop('required',true);
$('#hidden_div3').hide();
$('#hidden_div3 input').prop('required',false);
$('#hidden_div4').hide();
$('#hidden_div4 input').prop('required',false);
$('#hidden_div5').hide();
$('#hidden_div5 input').prop('required',false);
$('#hidden_div6').hide();
$('#hidden_div6 input').prop('required',false);

$("#hidden_div select").prop('required',true);
$("#hidden_div1 select").prop('required',true);
$("#hidden_div2 select").prop('required',true);
$("#hidden_div3 select").prop('required',false);
$("#hidden_div4 select").prop('required',false);
$("#hidden_div5 select").prop('required',false);
$("#hidden_div6 select").prop('required',false);

}
else if($select == "4"){
$('#hidden_div').show();
$('#hidden_div input').prop('required',true);
$('#hidden_div1').show();
$('#hidden_div1 input').prop('required',true);
$('#hidden_div2').show();
$('#hidden_div2 input').prop('required',true);
$('#hidden_div3').show();
$('#hidden_div3 input').prop('required',true);
$('#hidden_div4').hide();
$('#hidden_div4 input').prop('required',false);
$('#hidden_div5').hide();
$('#hidden_div5 input').prop('required',false);
$('#hidden_div6').hide();
$('#hidden_div6 input').prop('required',false);

$("#hidden_div select").prop('required',true);
$("#hidden_div1 select").prop('required',true);
$("#hidden_div2 select").prop('required',true);
$("#hidden_div3 select").prop('required',true);
$("#hidden_div4 select").prop('required',false);
$("#hidden_div5 select").prop('required',false);
$("#hidden_div6 select").prop('required',false);

}
else if($select == "5"){
$('#hidden_div').show();
$('#hidden_div input').prop('required',true);
$('#hidden_div1').show();
$('#hidden_div1 input').prop('required',true);
$('#hidden_div2').show();
$('#hidden_div2 input').prop('required',true);
$('#hidden_div3').show();
$('#hidden_div3 input').prop('required',true);
$('#hidden_div4').show();
$('#hidden_div4 input').prop('required',true);
$('#hidden_div5').hide();
$('#hidden_div5 input').prop('required',false);
$('#hidden_div6').hide();
$('#hidden_div6 input').prop('required',false);

$("#hidden_div select").prop('required',true);
$("#hidden_div1 select").prop('required',true);
$("#hidden_div2 select").prop('required',true);
$("#hidden_div3 select").prop('required',true);
$("#hidden_div4 select").prop('required',true);
$("#hidden_div5 select").prop('required',false);
$("#hidden_div6 select").prop('required',false);

}
else if($select == "6"){
$('#hidden_div').show();
$('#hidden_div input').prop('required',true);
$('#hidden_div1').show();
$('#hidden_div1 input').prop('required',true);
$('#hidden_div2').show();
$('#hidden_div2 input').prop('required',true);
$('#hidden_div3').show();
$('#hidden_div3 input').prop('required',true);
$('#hidden_div4').show();
$('#hidden_div4 input').prop('required',true);
$('#hidden_div5').show();
$('#hidden_div5 input').prop('required',true);
$('#hidden_div6').hide();
$('#hidden_div6 input').prop('required',false);

$("#hidden_div select").prop('required',true);
$("#hidden_div1 select").prop('required',true);
$("#hidden_div2 select").prop('required',true);
$("#hidden_div3 select").prop('required',true);
$("#hidden_div4 select").prop('required',true);
$("#hidden_div5 select").prop('required',true);
$("#hidden_div6 select").prop('required',false);

}
else if($select == "7"){
$('#hidden_div').show();
$('#hidden_div input').prop('required',true);
$('#hidden_div1').show();
$('#hidden_div1 input').prop('required',true);
$('#hidden_div2').show();
$('#hidden_div2 input').prop('required',true);
$('#hidden_div3').show();
$('#hidden_div3 input').prop('required',true);
$('#hidden_div4').show();
$('#hidden_div4 input').prop('required',true);
$('#hidden_div5').show();
$('#hidden_div5 input').prop('required',true);
$('#hidden_div6').show();
$('#hidden_div6 input').prop('required',true);

$("#hidden_div select").prop('required',true);
$("#hidden_div1 select").prop('required',true);
$("#hidden_div2 select").prop('required',true);
$("#hidden_div3 select").prop('required',true);
$("#hidden_div4 select").prop('required',true);
$("#hidden_div5 select").prop('required',true);
$("#hidden_div6 select").prop('required',true);

}
else{
$('#hidden_div').hide();
$('#hidden_div1').hide();
$('#hidden_div2').hide();
$('#hidden_div3').hide();
$('#hidden_div4').hide();
$('#hidden_div5').hide();
$('#hidden_div6').hide();
$('#hidden_div input').prop('required',false);
$('#hidden_div1 input').prop('required',false);
$('#hidden_div2 input').prop('required',false);
$('#hidden_div3 input').prop('required',false);
$('#hidden_div4 input').prop('required',false);
$('#hidden_div5 input').prop('required',false);
$('#hidden_div6 input').prop('required',false);
$("#hidden_div select").prop('required',false);
$("#hidden_div1 select").prop('required',false);
$("#hidden_div2 select").prop('required',false);
$("#hidden_div3 select").prop('required',false);
$("#hidden_div4 select").prop('required',false);
$("#hidden_div5 select").prop('required',false);
$("#hidden_div6 select").prop('required',false);

}
});


$(function($){
$("#cnic").mask("99999-9999999-9");
$("#cnic1").mask("99999-9999999-9");
$("#cnic2").mask("99999-9999999-9");
$("#cnic3").mask("99999-9999999-9");
$("#cnic4").mask("99999-9999999-9");
$("#cnic5").mask("99999-9999999-9");
$("#cnic6").mask("99999-9999999-9");
$("#cnic7").mask("99999-9999999-9");
})

</script>
  @endsection