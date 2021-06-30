<?PHP

include('inc/func.php');
include('inc/config.php');

$fext = ext($path);


if (file_exists($path))
{   
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
<style>body, body *, * {
padding:0;
margin:0;
}</style>
</head>
<body> 
 
<?php if($type=='image'){?>

<img style="max-height:99vh;" src='file.php?path=<?php echo urlencode($path); ?>'>

<?php } else { ?>
<video style="height:<?php echo $h; ?>px;max-height:95vh;max-width:100%;" autoplay controls poster="screen.php?path=<?php echo urlencode($path); ?>">
  <source src="file.php?path=<?php echo urlencode($path); ?>" type="<?php echo $fmime; ?>">

  Your browser does not support HTML video.
</video>
<?php } ?>

</body> 
</html>

  <?php  exit;
}
else
{
    die('File loading failed. ('.$path.')');
}
