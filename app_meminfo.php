<pre>
<strong>Uptime:</strong>
<?php system("uptime"); ?>
<br />
<strong>System Information:</strong>
<?php system("uname -a"); ?>
<br />
<strong>Memory Usage (MB):</strong>
<?php system("free -m"); ?>
<br />
<strong>Disk Usage:</strong>
<?php system("df -h"); ?>
<br />
<strong>CPU Information:</strong>
<ul>
<?php exec("cat /proc/cpuinfo | grep \"model name\\|processor\"",$d);
foreach($d as $l)
{
echo "<li>$l</li>"; 
}
?>
</ul>
<br />
<strong>CPU Information:</strong>
<ul>
<?php 
exec('lscpu',$d);
foreach($d as $l)
{
echo "<li>$l</li>";
}?></ul>
<br />
<strong>PCI Information:</strong>
<ul>
<?php 
exec('lspci',$d);
foreach($d as $l)
{
echo "<li>$l</li>";

}?></ul>
<br />
</pre>
