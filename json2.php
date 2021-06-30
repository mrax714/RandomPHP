<?php

$i=1;
while($i<=7)
{

//$s['datasets']['labels'][]=gmdate('H:I:s',strtotime($i*60 ."  minutes"));
$s[]=rand(123345,244577);
$i++;
}

header("Content-type: application/json; charset=utf-8");

//print_r(json_decode(json_encode(file_get_contents('dashboard.js')),true));
 echo json_encode($s); 
