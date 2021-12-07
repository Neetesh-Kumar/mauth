<script>

	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
    }



$('.hidden_child').hide();

$(document).ready(function(){

  if($('#reg_childrens').val() == "1"){
    $('#hidden_div').show();
    $('#hidden_div1').hide();
    $('#hidden_div2').hide();
    $('#hidden_div3').hide();
    $('#hidden_div4').hide();
    $('#hidden_div5').hide();
    $('#hidden_div6').hide();
  }
  else if($('#reg_childrens').val() == "2"){
    $('#hidden_div').show();
    $('#hidden_div1').show();
    $('#hidden_div2').hide();
    $('#hidden_div3').hide();
    $('#hidden_div4').hide();
    $('#hidden_div5').hide();
    $('#hidden_div6').hide();
  }
  else if($('#reg_childrens').val() == "3"){
    $('#hidden_div').show();
    $('#hidden_div1').show();
    $('#hidden_div2').show();
    $('#hidden_div3').hide();
    $('#hidden_div4').hide();
    $('#hidden_div5').hide();
    $('#hidden_div6').hide();

  }
  else if($('#reg_childrens').val() == "4"){
    $('#hidden_div').show();
    $('#hidden_div1').show();
    $('#hidden_div2').show();
    $('#hidden_div3').show();
    $('#hidden_div4').hide();
    $('#hidden_div5').hide();
    $('#hidden_div6').hide();

  }
  else if($('#reg_childrens').val() == "5"){
    $('#hidden_div').show();
    $('#hidden_div1').show();
    $('#hidden_div2').show();
    $('#hidden_div3').show();
    $('#hidden_div4').show();
    $('#hidden_div5').hide();
    $('#hidden_div6').hide();

  }
  else if($('#reg_childrens').val() == "6"){
    $('#hidden_div').show();
    $('#hidden_div1').show();
    $('#hidden_div2').show();
    $('#hidden_div3').show();
    $('#hidden_div4').show();
    $('#hidden_div5').show();
    $('#hidden_div6').hide();

  }
  else if($('#reg_childrens').val() == "7"){
    $('#hidden_div').show();
    $('#hidden_div1').show();
    $('#hidden_div2').show();
    $('#hidden_div3').show();
    $('#hidden_div4').show();
    $('#hidden_div5').show();
    $('#hidden_div6').show();

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
});

	</script>