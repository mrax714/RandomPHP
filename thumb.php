<?PHP
include('inc/func.php');
include('inc/config.php');
$l='thumb.lock';
$t='t/'.basename($path);
if(!file_exists($t))
{


if(file_exists($l))
{
$locked=true;
}
else
{$locked=false;}



while($locked)
{
sleep(5);
if(time()-file_get_contents($l)>=30){unlink($l);$locked=false;break;}
if(file_exists($l))
{
$locked=true;
}
else
{$locked=false;}

}
//	if(ext=='jpg'){imageEnhance($path,$path);}
file_put_contents($l,time());

	cropThumb($path,$t,160,180);
unlink($l);
}
if(@getimagesize($t)){
//    header('content-type: image/jpeg');
$seconds_to_cache = 0.36000;
$ts = gmdate("D, d M Y H:i:s", time() +  $seconds_to_cache) . " GMT";
//header("Expires: $ts");
   //header("Pragma: no-cache");
   //header("Cache-Control: max-age=$seconds_to_cache");

header("filesize: ".filesize($t));

header('Content-Disposition: inline; '.basename($t).'"');

	readfile($t);}
