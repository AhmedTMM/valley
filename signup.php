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
        <div class="col-md-4 offset-md-4 form-div">
        <form action="signup.php" method="post">
        <h3 class="text-center">Register</h3>

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
        <label for="passwordConf">Confirm Password</label>
        <input type="password" name="passwordConf" class="form-control-lg">
        </div>

         <div class="form-group">
        <button type="submit" name="signup_btn" class="btn btn-primary btn-block btn-lg">Sign Up</button>
        </div>  

        <p class="text-center">Already a Member? <a class="LogInButton" href="login.php">Log In</a></p>


        </form>
        </div>
    </div>
</div>
    <title>Sign Up</title>
</body>
</html>