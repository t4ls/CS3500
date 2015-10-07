<?php
$count = 0;
$myfile = fopen("read.txt", "r") or die("Unable to open file!");
$file = "read.txt";
$lines = count(file($file));
fgets($myfile);
$arr = array();
while(!feof($myfile)) {
  if($count < $lines){
//   echo "".$count.". ".fgets($myfile) . "";
  $arr[$count] = fgets($myfile);
  }else{
  fgets($myfile);
  } 
$count = $count + 1;
}
$test = fread($myfile,filesize("read.txt"));
fclose($myfile);
//printVar($arr);
echo "Current number of users: ".(count($arr)-1)."\n";
function printVar($var) {
    echo '<pre>';
    var_dump($var); 
    echo '</pre>';
}
?>
