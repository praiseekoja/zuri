<?php
$data=[$_POST['name'],$_POST['email'],$_POST['gender'],$_POST['date'],$_POST['country']];

$file =fopen('file.csv','a');
foreach($data as $row){
fputcsv($file, $row);
}
fclose($file)
print_r($data);
?>
