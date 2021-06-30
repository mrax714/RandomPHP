<pre>


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
