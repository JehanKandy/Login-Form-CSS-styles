<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JehanKandy Login Form</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body class="login-body"> 
    <div class="center">
        <div class="content">
            <div class="title">Login Here</div>
            <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post" class="login-form">
                <div class="data">
                    <label for="username" class="login-label">Username</label>
                    <input type="text" name="username" name="username" class="login-input" required>
                </div>
                <div class="data">
                    <label for="password" class="login-label">Password</label>
                    <input type="password" name="password" name="password" class="login-input" required>
                </div>
                <div class="login-btn">
                    <div class="inner"></div>
                    <input type="submit" value="Login" name="login" class="submit-btn">
                </div>        
            </form>
            <div class="forget-pwd"><a href="#">Forget Password ?</a></div><br>
            <hr style="border-radius: 5px;"><br>
            <div class="signup-login">Don't have an Account ? <a href="#">Create One</a></div>
        </div>
    </div> 
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
