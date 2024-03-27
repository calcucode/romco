
<!DOCTYPE html>
<!--[if IE 7]> <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>ROMCO Equipment, Co. eInvoice Connect</title>
    <link href="https://secure.billtrust.com/IG70/font-awesome-4.7.0/css/font-awesome.css?03122024" rel="stylesheet" />
	<link href="https://secure.billtrust.com/IG70/css/min/kendoui/kendo.common.min.css?03122024" rel="stylesheet" />
	<link href="https://secure.billtrust.com/IG70/css/skin.css?03122024" rel="stylesheet" />
	<link href="https://secure.billtrust.com/IG70/css/default.css?03122024" rel="stylesheet" />
		<link href="/IG_CustFiles/css/IGStyles_ROMCO.css" rel="stylesheet" />		<link rel="stylesheet" href="https://secure.billtrust.com/IG70/css/signin.css?03122024?03122024" />
	<script src="https://secure.billtrust.com/IG70/js/min/kendoui/jquery.min.js?03122024"></script>
	<script src="https://secure.billtrust.com/IG70/js/jquery/jquery.cookie.js?03122024"></script>
        <script src="https://secure.billtrust.com/IG70/js/min/kendo.ignonauth.js?03122024"></script>
		    <script src="https://secure.billtrust.com/IG70/js/helpers/currency.js?03122024"></script>
	<script src="https://secure.billtrust.com/IG70/js/kendo.igtranslator.js?03122024"></script>
		<script>
		$(document).kendoIGTranslator({
			url: 'https://secure.billtrust.com/ROMCO/ig/translate',
			messages: (function(){ return {"error.fieldsAreRequired":"The highlighted fields are required.","label.attention":"Attention","question.1.1":"What is your favorite hobby?","error.invalidEmailFormat":"The value entered does not match the expected email format.","question.1.2":"What is the first name of your mother's father (grandfather)?","error.invalidDateFormat":"You have entered an invalid date.","question.1.3":"Which elementary school did you attend?","question.1.4":"What is the name of your closest childhood friend?","question.1.5":"What was the make of your first car?","question.1.6":"What is the name of your favorite city?","question.2.1":"Who is your favorite athlete?","question.2.2":"What street did you live on when you were 10 years old?","question.2.3":"What is the name of your first born child?","question.2.4":"What was your major in college?","question.2.5":"What is the name of your favorite band?","question.2.6":"What is the name of your favorite cartoon character?","question.3.1":"Where was your mother born?","question.3.2":"What was the street you grew up on?","question.3.3":"What was the name of the hospital where you were born?","question.3.4":"What was the name of your first pet?","question.3.5":"What is your favorite ice cream flavor?","question.3.6":"What is your favorite sport to watch?"}; })(),
			languages: ["en_US"],
			currentLanguage: 'en_US',
			onBeforeSwitch: function() {
				$('#curlang').click();
			},
			onAfterSwitch: function(response) {
				$('#curlang').html(response.lang.title);
				$('body').removeClass('en_US').addClass(response.lang.lang);
			}
		});
	</script>
	<script src="https://secure.billtrust.com/IG70/js/kendo.igajaxindicator.js?03122024"></script>
	<script src="https://secure.billtrust.com/IG70/js/kendo.igdialog.js?03122024"></script>
	<script src="https://secure.billtrust.com/IG70/js/kendo.igvalidator.js?03122024"></script>
	<script src="https://secure.billtrust.com/IG70/js/kendo.igtooltip.js?03122024"></script>
		<script>$(document).ready(function() { kendo.init($('body')); });</script>
</head>
<body class="container ig7 en_US prelogin">
	<!-- Google tag (gtag.js) -->
<script async src=""></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'G-CT4P74ZW0D', {
    'cookie_domain': 'billtrust.com',
    'send_page_view': false
});
gtag('set', { 
    'dimension1': '2662', 
    'dimension2': '2662' 
});
gtag('event', 'page_view', { 
    'dimension1': '2662', 
    'dimension2': '2662' 
});
</script>

    <script>
        var _prum = [['id', '59ce86558d4ea38769f752aa'],
            ['mark', 'firstbyte', (new Date()).getTime()]];
        (function () {
            var s = document.getElementsByTagName('script')[0]
                , p = document.createElement('script');
            p.async = 'async';
            p.src = '//rum-static.pingdom.net/prum.min.js';
            s.parentNode.insertBefore(p, s);
        })();
    </script>
	<div class="header">
				<div data-msgid-block="block.views.promohead.1000">
			<table width="100%" height="100px" border="0" cellspacing="0" cellpadding="10" align="center" class="headerTable">
  <tr>
    <td align="center" class="logo"><img src="https://secure.billtrust.com/IG_CustFiles/images/romco/logo.jpg" /></td>
  </tr>
</table>		</div>
	</div>
	<div class="content" data-role="igajaxindicator" style="padding-bottom: 160px;">
				<div class="wrapper">
	<div class="left">
	    <div class="k-window banner white">
                    <div class="signin-banner payments"></div>
                </div>
	</div>
	<div class="right">
		<div class="k-window signin grey">
			<h2><span>Sign In To Your Account</span></h2>
			<form id="siForm" action="https://secure.billtrust.com/ROMCO/ig/signin" >
	<fieldset>
				<input name="EUserName" type="text" value=""  id="EUserName" placeholder="User Name" data-title="User Name" data-msgid-placeholder="" class="k-textbox" autocomplete="off" tabindex="1" required=""/>
				<input name="EPassword" type="password" value=""  helper="formPassword" renderPassword="" id="EPassword" placeholder="Password" data-title="Password" class="k-textbox" autocomplete="off" tabindex="2" required=""/>
				<input type="checkbox" name="StoreAcctnum" value="1"  helper="formCheckbox" id="StoreAcctnum" tabindex="3"/>		<label for="StoreAcctnum"><span>Remember My User Name</span></label>
	</fieldset>

    <div class="links">
        <a class="forgotusername" href='https://secure.billtrust.com/ROMCO/ig/forgot-username'><span data-msgid=forgotYourUsername.0001>Forgot Your User Name?</span></a>
        <a href='https://secure.billtrust.com/ROMCO/ig/forgot-password/step1'><span data-msgid=forgotYourPassword.0001>Forgot Your Password?</span></a>
    </div>

    <div class="btn-box right">
        <input type="submit" value="Sign In" class="k-button size1" tabindex="4" />
    </div>
</form>
			<div class="clearfix"></div>
		</div>
				<div class="k-window signup grey">
			<h2><span data-msgid=needAnAccount.0001>Need an Account?</span></h2>
			<div class="btn-box right">
				<input type="button" value="Sign Up Now" data-msgid-button="button.signUpNow.0001"
					onclick="document.location.href='https://secure.billtrust.com/ROMCO/ig/signup';"
					class="k-button orange size1" />
			</div>
			<div class="clearfix"></div>
		</div>
		                    <div class="k-window otp grey">
                <h2><span data-msgid=makeOneTimePayment.0001>Make A One Time Payment</span></h2>
                                    <p><span data-msgid=makeOneTimePayment.verbiage.0001>Paying your bill online is easy. Use your bank account or credit card to make a one time payment.</span></p>
                                <div class="btn-box right">
                    <input type="button" value="Pay" data-msgid-button="button.pay.0001"
                           class="k-button size1"
                           onclick="document.location.href='https://www.romco.com/wp-content/plugins/gravityforms/legacy/billtrust-payment.php';" />
                </div>
                <div class="clearfix"></div>
            </div>
        	</div>
	<div class="clearfix"></div>
</div>	</div>
	<div class="footer">
		<div id="promofoot" data-msgid-block="block.views.promofoot.1000">
			<table width="100%" height="60px">
  <tr>
    <td align="center"><img src="https://secure.billtrust.com/img/poweredbybilltrust.gif" /></td>
  </tr>
</table>		</div>
					<div class="footer-links">
    <span class="faqLink"><a href="javascript:" data-role="igdialog" data-template="dialogFAQTemplate" data-click="open"><span data-msgid=faq.0001>FAQ</span></a></span>
            <span><a href="javascript:" OnClick="javascript: window.open('https://secure.billtrust.com/ROMCO/ig/subscriber-agreement','','width=1200,height=700,left=200,top=50,scrollbars=yes');return false;"><span data-msgid=subscriberAgreement.0001>Subscriber Agreement</span></a></span>
        <span><a id="contactLink" href="javascript:" data-role="igdialog" data-template="dialogContactTemplate" data-click="open"><span data-msgid=label.contactUs.0001>Contact Us</span></a></span>
    </div>
<script id="dialogFAQTemplate" type="text/x-kendo-tmpl" data-title="<span data-msgid=frequentlyAskedQuestions.0001>Frequently Asked Questions</span>" data-url="https://secure.billtrust.com/ROMCO/ig/faq" data-width="800" data-height="550">
	<div class="i-dialog-content scroll">#= content#</div>
	<div class="i-dialog-btnbox">
		<input type="button" value="Close" data-msgid-button="label.close.0001" class="k-button size1" data-role="igdialog" data-click="close" />
	</div>
</script>
<script id="dialogContactTemplate" type="text/x-kendo-tmpl" data-title="<span data-msgid=haveQuestions.0001>Have Questions? Contact Us</span>" data-url="https://secure.billtrust.com/ROMCO/ig/contact" data-width="700" data-height="300">
	<div class="i-dialog-content scroll">#= content#</div>
	<div class="i-dialog-btnbox">
		<input type="button" value="Close" data-msgid-button="label.close.0001" class="k-button size1" data-role="igdialog" data-click="close" />
	</div>
</script>			</div>
	<script>
				        initSet();
        function initSet() {
            isResponsive = "N";
            screenWidth  = $(window).width();

            isMobile = {
                Android: function() {
                    return navigator.userAgent.match(/Android/i);
                },
                BlackBerry: function() {
                    return navigator.userAgent.match(/BlackBerry/i);
                },
                iOS: function() {
                    return navigator.userAgent.match(/iPhone|iPad|iPod/i);
                },
                Opera: function() {
                    return navigator.userAgent.match(/Opera Mini/i);
                },
                Windows: function() {
                    return navigator.userAgent.match(/IEMobile/i);
                },
                any: function() {
                    return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
                }
            };
        }
		$(document).ready(function() {

			$(document).ajaxComplete(function(event, xhr, settings) {
				if(xhr.getResponseHeader('X-IG-MaintenanceMode') == 'Y') {
					document.location.href = 'https://secure.billtrust.com/ROMCO/ig/signout';
				}
			});

			
									
			/* Google Analytics tracking for Auto Email Enrollment*/
			
			$("#emailEnrollmentLink").on("click", function() {
				// track click event
				gtag('event', 'click', {
					'event_category': 'button',
					'event_label': 'Email Enrollment Footer Link',
					'value': 1
				});				
			});
			
			$("#auto-email-enrollment-submit").on("click", function() {
				// track click event
				gtag('event', 'click', {
					'event_category': 'button',
					'event_label': 'Email Enrollment Signup',
					'value': 1
				});				
			});
		});
	</script>
</body>
</html>
