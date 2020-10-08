<?php 
if(isset($_POST['logsubmit'])){

   require ('../../conn/connection.php');   // database connection file calling

   $username = $_POST['username'];
   $password    = $_POST['password'];
   // echo "test1";
   // exit();

   $sql = "SELECT * FROM user WHERE username=?";
   $stmt = mysqli_stmt_init($con);
   // echo "test1";
   // exit();

   if(!mysqli_stmt_prepare($stmt,$sql)){
      // echo "test1";
      // exit();
      header('Location:/test/home/index');
      exit();     
   }
   else{
      // echo "test2";
      // exit();
      mysqli_stmt_bind_param($stmt,"s",$username);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if($row = mysqli_fetch_assoc($result)){

         //$pwdcheck = password_verify($password,$row['password']);
         // echo $password."\n";
         // echo $row['password'];
         // exit();
         if($password != $row['password']){
            echo "test1";
            exit();
            header('Location:/test/home/index');
            exit();  
         }
         else{
            // echo "test2";
            // exit();
            session_start();
            $_SESSION['userID'] = $row['userid'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['userrole'] = $row['userrole'];

            if($_SESSION['userrole']=='villageofficer'){ $controller ='village'; }
            if($_SESSION['userrole']=='divisionalsec'){ $controller ='divisional'; }
            if($_SESSION['userrole']=='ministry'){ $controller ='ministry'; }
            if($_SESSION['userrole']=='auditor'){ $controller ='audit'; }
            
            header("Location:/test/$controller/index");
            exit();

         }

      }
      else{
         echo "results not found";
         exit();
         header('Location:/test/home/index');
         exit();
      }
   }
   mysqli_stmt_close($stmt);
   mysqli_close($con);
}
else{
   echo "submit obala na";
   exit();
   header('Location:/test/home/index?error=direct_access_not_allowed');
   exit();
}