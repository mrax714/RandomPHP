
</div>

</div><!-- END GRID -->

<!-- ===================================== START FOOTER ===================================== -->
<div class="clear"></div>
<div id="footer">
<?php
$time_end = microtime(true);

//dividing with 60 will give the execution time in minutes otherwise seconds
$execution_time = ($time_end - $time_start);

//execution time of the script
echo '<b>Total Execution Time:</b> '.number_format($execution_time, 5).' secs<br/>' ;
// if you get weird results, use number_format((float) $execution_time, 10) 
?>
&copy; Copyright 2011–2012 All Rights Reserved. This website was built with <a href="http://www.99lime.com">HTML KickStart</a>
</div>

</body></html>
