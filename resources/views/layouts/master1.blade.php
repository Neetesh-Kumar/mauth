

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Site favicon -->
	<link rel="icon" sizes="180x180" href="{{asset('Admin/vendors/images/180 by 180.png')}}">
	<link rel="icon" type="image/ico" sizes="32x32" href="{{asset('Admin/vendors/images/32 by 32.png')}}">
	<link rel="icon" type="image/ico" sizes="16x16" href="{{asset('Admin/vendors/images/16 by 16.png')}}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('Admin/vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Admin/vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Admin/src/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Admin/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Admin/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Admin/vendors/styles/style.css')}}">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
	<style>
				::-webkit-scrollbar-track
		{
			-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
			background-color: #F5F5F5;
			border-radius: 10px;
		}

		::-webkit-scrollbar
		{
			width: 15px;
			background-color: #F5F5F5;
		}

		::-webkit-scrollbar-thumb
		{
			background-color: #AAA;
			border-radius: 10px;
			background-image: -webkit-linear-gradient(90deg,
							rgba(0, 0, 0, .2) 25%,
							transparent 25%,
							transparent 50%,
							rgba(0, 0, 0, .2) 50%,
							rgba(0, 0, 0, .2) 75%,
							transparent 75%,
							transparent)
		}


		th::before,th::after{
			color: #ff9100 !important;
		}
		.page-item.active .page-link{
				background-color: #ff9100 !important;
				border-color: #ff9100 !important;
			}
	</style>
</head>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo text-center"><img src="{{asset('Admin/vendors/images/LOADER.png')}}" style="width:50%; height:70px;" class="" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>

	@include('common.header')

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		@include('common.sidebar')
	</div>

    @include('common.leftsidebar')
	<div class="mobile-menu-overlay"></div>

	@yield('content')
	<!-- js -->
    
	<script src="{{asset('Admin/vendors/scripts/core.js')}}"></script>
	<script src="{{asset('Admin/vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset('Admin/vendors/scripts/process.js')}}"></script>
	<script src="{{asset('Admin/vendors/scripts/layout-settings.js')}}"></script>
	<script src="{{asset('Admin/src/plugins/jQuery-Knob-master/jquery.knob.min.js')}}"></script>
	<script src="{{asset('Admin/src/plugins/highcharts-6.0.7/code/highcharts.js')}}"></script>
	<script src="{{asset('Admin/src/plugins/highcharts-6.0.7/code/highcharts-more.js')}}"></script>
	<script src="{{asset('Admin/src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
	<script src="{{asset('Admin/src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{asset('Admin/vendors/scripts/dashboard2.js')}}"></script>
	<!-- for datatable -->
	<script src="{{asset('Admin/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('Admin/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('Admin/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('Admin/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>

	<!-- buttons for Export datatable -->
	<script src="{{asset('Admin/src/plugins/datatables/js/dataTables.buttons.min.js')}}"></script>
	<script src="{{asset('Admin/src/plugins/datatables/js/buttons.bootstrap4.min.js')}}"></script>
	<script src="{{asset('Admin/src/plugins/datatables/js/buttons.print.min.js')}}"></script>
	<script src="{{asset('Admin/src/plugins/datatables/js/buttons.html5.min.js')}}"></script>
	<script src="{{asset('Admin/src/plugins/datatables/js/buttons.flash.min.js')}}"></script>
	<script src="{{asset('Admin/src/plugins/datatables/js/pdfmake.min.js')}}"></script>
	<script src="{{asset('Admin/src/plugins/datatables/js/vfs_fonts.js')}}"></script>
	<!-- Datatable Setting js -->
	<script src="{{asset('Admin/vendors/scripts/datatable-setting.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.3.1/jquery.maskedinput.min.js" integrity="sha512-D30F0yegJduD5FxOxI3qM1Z0YrbtXE3YLoyNDYvps4Qq63Y0l/ObPmjlsj27pgFx8mLdMQ24I3gGtdYZO741HQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	
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
	if ($(this).val() == "{{ $user->reg_childerns }}")
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

</body>
</html>


<!-- password 52abdqzf8n -->