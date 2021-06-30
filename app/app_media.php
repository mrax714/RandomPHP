<?php 


$ls1=glob(MEDIA_DIR.'/'.$opt.'/*/*.*');
natsort($ls1);
 //ini_set('display_errors','On');
   //     error_reporting(E_ALL);


        
 
        // If we have an array with items
        if (count($ls1)) {
          // Create the pagination object
          $pagination = new pagination($ls1, (isset($_GET['page']) ? $_GET['page'] : 1), 4*6);
          // Decide if the first and last links should show
          $pagination->setShowFirstAndLast(true);
          // You can overwrite the default seperator
          $pagination->setMainSeperator(' ');
          // Parse through the pagination class
          $ls2 = $pagination->getResults();
          // If we have items 
          if (count($ls2) != 0) {
            // Create the page numbers
            $pageNumbers = '<div class="col_12 numbers">'.$pagination->getLinks($_GET).'</div>';






?>
<p class="col_12 left"><?php echo number_format(count($ls1)); ?></p>
<?php        echo "<div class='col_12 center'>";
           // print out the page numbers beneath the results
            echo $pageNumbers;
        echo'</div>'; ?>
<div id='media' class="col_12"><?php

foreach($ls2 as $i => $l)
{
   thumb($l);
}
echo'</div>';

        echo "<div class='col_12 center'>";
           //rint out the page numbers beneath the results
            echo $pageNumbers;
        echo'</div>';
          }
        }

?></div>
