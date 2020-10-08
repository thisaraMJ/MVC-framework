<?php 

   $action = $this->getAction(); // in here $action is, view file name without .php

?>

<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Work Bench</title>
   <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="/test/app/css/main.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <script src="https://kit.fontawesome.com/yourcode.js"></script>
</head>

<body>
   <div>
      <nav class="head">
         <label class="logo">FADTS</label>
         <ul>
            <li><a href="#" >Home</li>
            <li><a href="#">About</li>
            <li><a href="#">Notifications</li>
            <li><a class="log_button" href="/test/home/index">
                  <?php
                        session_start();
                        session_unset();
                        session_destroy();
                  ?>
                  <B>LOGOUT</B>
            </li>
         </ul>
      </nav>
   </div>