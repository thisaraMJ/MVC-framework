<?php 
   $action = $this->getAction(); 
   //print $action;
?>

<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Page title</title>
   <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="/test/app/css/main.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <script src="https://kit.fontawesome.com/yourcode.js"></script>
</head>

<body>
   <div>
      <nav>
         <label class="logo">FADTS</label>
         <ul>
            <li><a href="#" <?php echo ($action == 'index' ? 'class = active':'') ?>><B>Home</B></li>
            <li><a href="#"><B>About</B></li>
            <li><a href="#"><B>Notifications</B></li>
            <li><a class="log_button" href="/test/home/index"><B>Logout</B></li>
         </ul>
      </nav>
   </div>
