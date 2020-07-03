<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
<! Bootstrap for CSS >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<link rel="stylesheet" href="stylelogin.css" class="css">



</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 form-div login">
        <form action="login.php" method="post">
        <h3 class="text-center">Login</h3>

     <!--   <div class="alert alert-danger">
        <li>Username required</li>


        </div> 

      for later                 -->


        <div class="form-group">
        <label for="username">Username        </label>
        <input type="text" name="username" class="form-control-lg">
        </div>
        <div class="form-group">
        <label for="password">Password        </label>
        <input type="password" name="password" class="form-control-lg">
        </div>

         <div class="form-group">
        <button type="submit" name="login_btn" class="btn btn-primary btn-block btn-lg">Login</button>
        </div>  

        <p class="text-center">Not yet a Member? <a class="LogInButton" href="signup.php">Sign Up</a></p>


        </form>
        </div>
    </div>
</div>
    <title>Sign Up</title> 
</body>
</html>