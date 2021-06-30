<?php



$path = urldecode($_GET['path']);
$fext = ext($path);
$l=$path;


$ds=explode('/',$l);
	
        $size=byteConvert(filesize($l));
        $n=basename($l);
        $c=filter_filename($n);

       

$json='json/'.$n.'.json';
if(!file_exists($json)){
saveJSON($l,$json);
}

$a=getJSON($json);
		$screenshot = 'scrs/'.md5($n).'.jpg';
		$abase='play.php?path=';

$d=$t=$title=$comment=$description='';
$title=ucwords(str_replace('-',' ',$n));


if(isset($a['format']['tags']['title'])){
$title=$a['format']['tags']['title'];
}
if(isset($a['format']['tags']['comment'])){
$comment=$a['format']['tags']['comment'];
}
if(isset($a['format']['duration'])){
$d=$a['format']['duration'];
$t=gmdate("H:i:s", $d);
}

foreach($a['format']['tags'] as $k => $v)
{
$$k=$v;
}
  
$fmime = mime_content_type($path);
$e=explode('/',$fmime);
$type=$e[0];
$screenshot = 'scrs/'.basename($path).'.jpg';
list($w,$h)=@getimagesize($screenshot);
?>
<!DOCTYPE html> 
<html> 
<head>
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0"/>
<title><?php echo basename($path);?></title>
</head>
<body> 
<video style="height:<?php echo $h; ?>px;max-height:95vh;max-width:100%;" autoplay controls poster="screen.php?path=<?php echo urlencode($path); ?>">
  <source src="file.php?path=<?php echo urlencode($path); ?>" type="<?php echo $fmime; ?>">

  Your browser does not support HTML video.
</video>
<?php
echo "
<h6>$title</h6>
<p>".makeClickableLinks($description)."</p>
<p>".makeClickableLinks($comment)."</p>
<p>$comment</p>
<p>$t</p>
";


?>

</body> 
</html>
