<?php
session_start();
unset($_SESSION["ID"]);
unset($_SESSION["PASSWORD"]);
unset($_SESSION["NICKNAME"]);
 header("Location:http://localhost/Hankki/index.php");
 ?>
