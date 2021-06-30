 <!DOCTYPE html>
<html lang="en">
<head>
<title>HTML KickStart Elements</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="description" content="" />
<meta name="copyright" content="" />

<link rel="stylesheet" type="text/css" href="/fontawesome/css/all.css" media="all" />     

<link rel="stylesheet" type="text/css" href="/css/kickstart.css" media="all" />                
<link rel="stylesheet" type="text/css" href="/css/style.css" media="all" />                         
<script src="/js/jquery.min.js"></script>
<script src="js/kickstart.js"></script>                               
<script>

/*
<a id="killr" onclick="killit()">Kill Daemon</a>

$("#killr").on('click', killit());

function killit(){

    $.ajax({
       url: 'pid.php',
       dataType: 'html',
       success: function(data){
	$('#kill').html(data);
       }
    });
    };


function pidstatus(e)
{
    $.ajax({
      type:"post",
      url:"daemon.php",
      datatype:"html",
      success:function(data)
      {
	$('#stat').html(data);
      }
    });
}
var e = 'e';

var pidstat = pidstatus
setInterval(pidstat, 10000);//time in milliseconds 
*/

</script>

</head><body>

<!-- Menu Horizontal -->
<ul class="menu">
<li class="current"><a href="/">Home</a></li>
<li><a href="">Item 2</a></li>
<li><a href="#"><span class="icon" data-icon="R"></span>Admin</a>
	<ul>
	<li><a href="bench.php"><i class="fa fa-car"></i> Benchmark</a></li>
	<li><a href="#"><i class="fa fa-arrow-circle-right"></i> System Info</a>
		<ul>
		<li><a href="?app=phpinfo"><i class="fab fa-php"></i> PHP Info</a></li>
		<li><a href="?app=nginx"><i class="fas fa-server"></i> Nginx Info</a></li>
		<li><a href="?app=cpuinfo"><i class="fas fa-microchip"></i> CPU Info</a></li>
		<li><a href="?app=meminfo"><i class="fas fa-memory"></i> Memory Info</a></li>
<li><a href="?app=pci"><i class="fas fa-microchip"></i> PCI Info</a></li>
<li><a href="?app=storage"><i class="fas fa-hdd"></i> Storage Info</a></li>





		</ul>
	</li>

	<li class="divider"><a href=""><i class="fa fa-file"></i> li.divider</a></li>
	</ul>
</li>
<li><a href="#"><i class="fa fa-arrow-circle-right"></i> Kickstart</a>
		<ul>
		<li><a href="/other/kickstart/elements.html"><i class="fa fa-comments"></i> Elements</a></li>
		<li><a href="/other/kickstart/example.html"><i class="fa fa-comments"></i> Example</a></li>
<li><a href="/other/kickstart/blank.html"><i class="fa fa-comments"></i> Blank</a></li>
		</ul>
	</li>
<li><a href="">Item 4</a></li>
</ul>

<div class="grid flex">
	
<!-- ===================================== END HEADER ===================================== -->
	 
<div class="col_12">
<?php
/*
$realm = 'Restricted area';

//user => password
$users = array('admin' => 'mypass', 'guest' => 'guest');


if (empty($_SERVER['PHP_AUTH_DIGEST'])) {
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Digest realm="'.$realm.
           '",qop="auth",nonce="'.uniqid().'",opaque="'.md5($realm).'"');

    die('Text to send if user hits Cancel button');
}


// analyze the PHP_AUTH_DIGEST variable
if (!($data = http_digest_parse($_SERVER['PHP_AUTH_DIGEST'])) ||
    !isset($users[$data['username']]))
    die('Wrong Credentials!');


// generate the valid response
$A1 = md5($data['username'] . ':' . $realm . ':' . $users[$data['username']]);
$A2 = md5($_SERVER['REQUEST_METHOD'].':'.$data['uri']);
$valid_response = md5($A1.':'.$data['nonce'].':'.$data['nc'].':'.$data['cnonce'].':'.$data['qop'].':'.$A2);

if ($data['response'] != $valid_response)
    die('Wrong Credentials!');

// ok, valid username & password
echo 'You are logged in as: ' . $data['username'];


// function to parse the http auth header
function http_digest_parse($txt)
{
    // protect against missing data
    $needed_parts = array('nonce'=>1, 'nc'=>1, 'cnonce'=>1, 'qop'=>1, 'username'=>1, 'uri'=>1, 'response'=>1);
    $data = array();
    $keys = implode('|', array_keys($needed_parts));

    preg_match_all('@(' . $keys . ')=(?:([\'"])([^\2]+?)\2|([^\s,]+))@', $txt, $matches, PREG_SET_ORDER);

    foreach ($matches as $m) {
        $data[$m[1]] = $m[3] ? $m[3] : $m[4];
        unset($needed_parts[$m[1]]);
    }

    return $needed_parts ? false : $data;
}
*/
?>
<div id="kill"></div>
<div id="stat"></div>


