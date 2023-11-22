<?php
include_once(__DIR__."/create_session.php");

$fileHash = __DIR__."/hash-check.txt";
if(!file_exists($fileHash)){
  fopen($fileHash, 'w');
}

$lastHash = file_get_contents($fileHash);
$currentlyHash = hash_file('md5', $filepath);
$update = $lastHash != $currentlyHash;

$infos = [];

$firstMoment = $_GET['firstMoment'] ?? false;

if($firstMoment != 'false') {
  $infos = read_content();
}

if($update) {
  file_put_contents($fileHash, $currentlyHash);
  $infos = read_content();
}

echo json_encode(["update" => $update, "data" => $infos]);
?>