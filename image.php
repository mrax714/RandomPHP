<?PHP
include('inc/func.php');
include('inc/config.php');

$t='t/'.basename($path);
if(!file_exists($t))
{
		if(ext=='jpg'){imageEnhance($path,$path);}
	//  cropThumb($path,$t);
}
$mime=mime_content_type($path);
header('content-type: '. $mime);
$seconds_to_cache = 36000;
$ts = gmdate("D, d M Y H:i:s", time() +  $seconds_to_cache) . " GMT";
header("Expires: $ts");
header("Pragma: cache");
header("Cache-Control: max-age=$seconds_to_cache");

header("filesize: ".filesize($path));

header('Content-Disposition: inline; '.basename($path).'"');

	readfile($path);
