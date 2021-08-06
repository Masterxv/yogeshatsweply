<?php 
$en_Arr = $ar_Arr=[];
$row = 1;
if (($handle = fopen("public/lang.csv", "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    $num = count($data);
    $row++;
    if($row>1){
    	$en_Arr[$data[0]] = $data[1];
    	$ar_Arr[$data[0]] = $data[2];
    }
  }
  fclose($handle);
}


print_r($ar_Arr);
?>