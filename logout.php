<?php 
if (session_start()) {
    session_destroy();

} 

echo "<meta http-equiv='refresh' content = '0; url = ../login1.php'/>";


?>