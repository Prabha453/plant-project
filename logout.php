<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["uid"]);
   
   echo 'You Logout Successfully';
   header('Refresh: 1; URL = login.php');
?>