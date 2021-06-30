<?php

$i=1;
while($i<=7)
{
$date = new DateTime();
$m[$i]=$date->modify("-$i minutes");
$s[$i]=rand(123345,244577);
$i++;
}
$sets['labels']=$m;
$sets['data']=$m;
$js['datasets']=$sets;
//header("Content-type: application/json; charset=utf-8");


echo json_encode($js);
