<?php require_once"header.php"; ?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="main1.css">
    <title>loginpage</title>
    </head>
    <body class="bodyshow">
    <form action="check-login.php" method="post">
        <div class="container">
        <div class="login-left">
            <div class="loginheader">
                <h1 style="color:#638A55;text-shadow: gray 0.1em 0.1em 0.2em">Welcome to our website</h1> 
                <p  style="color:#638A55;text-shadow: gray 0.1em 0.1em 0.2em">Please login to use the platform</p>
            </div>
            <form class="login-form"> 
            <div class="login-form-content">
                <div class="form-item">
                    <label for="username">Username</label><br>
                    <input type="text" name="username" id="username">
                    <br></br>
                </div>
            <div class="form-item">
            <label for="password">Password</label><br>
                    <input type="password" name="password" id="password">
                    <br></br>
            </div>
            <div class="form-item">
              <div class="checkbox">
                <input type="checkbox" name="remember" id="remember" checked>
                <label for="remember" id="remember">Remember me</label>
              </div>
              <br></br>
              <div class="signup">
                Do not have a account yet ? 
                <a href="employeemain.php">Click here to sign up</a>
              </div>
              <br></br>
            </div>
            <input type="submit" value="Sign In"clss="btn1"></input>
            </div>
         
            </form>
            </div>
            <div class="login-right">
                <img width="1500px" height="auto" src="img/pic8.gif">
            </div>
        </div>
        
    </body>
</html>