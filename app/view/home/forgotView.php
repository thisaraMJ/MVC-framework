<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>forgot password</title>
   <link rel="stylesheet" type="text/css" href="/test/app/css/logFog.css">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
   <h2> FADTS | Forgot Password</h2>
   <div class="box">
      <form class="box" method="post" action="/test/app/model/home/loginModel.php">
         <fieldset style="padding: 35px 50px">
            <legend style="color: #218BDB"><B>Sign in to your account</B></legend>
            <div class="form-group">
               <label for="username"><B>User name</B></label>
               <input type="text" class="form-control" name="username" placeholder="Enter Username">
            </div>
            <div class="form-group">
               <label for="email"><B>Email</B></label>
               <input type="email" class="form-control" name="email" placeholder="Enter Email">
            </div>
            <button type="submit" name="fogsubmit" class="btn btn-primary"><B>Submit</B></button><br><br>
            <div class="new-account">
            </div>
         </fieldset>
      </form>
   </div>

</body>

</html>