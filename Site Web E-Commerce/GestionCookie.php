<?php
setcookie("cookIdent", "", time()-3600);
header('location: index.php');
exit();
?>