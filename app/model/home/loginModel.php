<?php 
if(isset($_POST['logsubmit'])){

   //echo ROOT;
   //exit();
   require ('../../conn/connection.php');   // database connection file calling

   $username = $_POST['username'];
   $password    = $_POST['password'];

   $sql = "SELECT username FROM user WHERE (username=?) AND (password=?)";
   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt,$sql)){
      echo "sql error";
      exit();
      //header('Location:/test/home/index?error=sql_error');
     
   }
   else{
      mysqli_stmt_bind_param($stmt,"ss",$username,$password);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultcheck = mysqli_stmt_num_rows($stmt);

      if($resultcheck == 1){
         echo "user found";
         header('Location: /test/home/index?user_found');
      }
      else{
         echo "results not found";
         header('Location:/test/home/index?error=wrong_username_or_password');
         exit();
      }
   }
   mysqli_stmt_close($stmt);
   mysqli_close($con);
}
else{
   header('Location:/test/home/index?error=direct_access_not_allowed');
   exit();
}