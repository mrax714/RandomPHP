<nav>
            <ul>
                <?php
                    $navOptions = array('index', 'showcase','about','blog','contact','forums');
$ds=scandir('./');
                    foreach($ds as $d) {
                        
                       
                            echo "<li><a href='$d/'> ".ucfirst($d) ."</a> <a href='source.php?d=$d/index.html'>Source</a></li>";
        }
                    
                ?>              
              
            </ul>
       </nav>
