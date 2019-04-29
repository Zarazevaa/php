<?php
session_start();
include("function.php");
echo check_login();
 ?>

 <!DOCTYPE html>
 <html lang="" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Praktek login session</title>
   </head>
   <body>
     <h1>Selamat datang!</h1>\
     <h3><a href="profil.php">edit Profil</a></h3>
     <h3><a href="logout.php">logout!</a></h3>
   </body>
 </html>
