<?php session_start(); ?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8" >
    <title>EGY Talk</title>
</head>
<body>    
    <?php    
   	 if(isset($_SESSION['uid'])){
   		 include 'private.php';
   		 
   	 }else{
   		 include 'public.php';
   	 }
    ?>
</body>
</html>
