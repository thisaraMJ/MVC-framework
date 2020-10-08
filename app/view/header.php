<?php 
   $action = $this->getAction(); 
   //print $action;
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
            <li><a href="#" <?php echo ($action == 'indexView')? "class = active":'' ?>>Home</li>
            <li><a href="#">About</li>
            <li><a href="#">Notifications</li>
            <li><a class="log_button" href="/test/home/index">
            <button class="log_button" type="submit" name="logoutsubmit" ><B>LOGOUT</B></button>
            </li>
            <!-- <a href="http://www.stackoverflow.com">
               <input type="button" name="so_link" value="Click me!">
            </a> -->
         </ul>
      </nav>
   </div>