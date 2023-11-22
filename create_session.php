<?php 

if(!isset($_SESSION['user'])){
  session_start();

  $_SESSION["user"] = [
    "id" => session_id(),
  ];
}


$filepath = __DIR__."/4eaba87fa95bd93b6df73527a56ed6bb873cba14.json";

if(!file_exists($filepath)){
  fopen($filepath, 'w');
}

$currentlyData = read_content();

if($currentlyData == null){
  put_content([]);
}


if(!isset($_GET['notWrite'])){
  write_in_file("id", $_SESSION['user']["id"]);
  write_in_file("ip", $ip = $_SERVER['REMOTE_ADDR']);
}

function read_content(){
  global $filepath;
  
  $content  = file_get_contents($filepath);
  $data     = json_decode($content, true);
  return $data;
}


function put_content($content = []){
  global $filepath;

  $data     = json_encode($content);
  $content  = file_put_contents($filepath, $data);
}

function write_in_file($key, $value){
  $hash = $_SESSION['user']["id"];
  $content = read_content();

  if(!array_key_exists($hash, $content)) 
    $content[$hash] = [];

  $content[$hash][$key] = $value;

  put_content($content);
}
