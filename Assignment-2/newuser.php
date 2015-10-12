<?php
if(isset($_POST['submitbutton'])){
$file = 'read.txt';
$appendfile = file_get_contents($file);
$appendfile .=  $_POST['username']."\n";
file_put_contents($file, $appendfile);

$get_info = "?status=success";
header("Location: ".$_SERVER['REQUEST_URI'].$get_info);
exit();
}

$count = 0;
$myfile = fopen("read.txt", "r") or die("Unable to open file!");
$file = "read.txt";
$lines = count(file($file));
fgets($myfile);
$arr = array();
while(!feof($myfile)) {
  if($count < $lines){
  $arr[$count] = str_replace("\n","",fgets($myfile));
  }else{
  fgets($myfile);
  }
$count = $count + 1;
}
$test = fread($myfile,filesize("read.txt"));
fclose($myfile);
$arr = array_slice($arr,0,-1);
if( $count > 11){
$arr = array_slice($arr,($count - 11));
$fp = fopen("read.txt", "w+");
fwrite($fp, implode( " ".PHP_EOL, $arr)  );
fwrite($fp,PHP_EOL);
fclose($fp);
}
?>

