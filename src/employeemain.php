<?php require_once"header.php"; ?>
<html>
<head>
  
    <title>Member</title>
    <link rel="stylesheet" type="text/css" href="main1.css">
</head>
<body class="bodyshow">
    <div class="signupct"></div>
    <div class="signup-left">.
    <h1 style="color:#638A55;padding:0 0 0 200px;">Sign up</h1>
    <table>
    <td>
    <form action="employee.php" method="post">
    Firstname<br>
    <input type="text" name="firstname" class="form-control" required="firstname"><br>
    Lastname<br>
    <input type="text" name="lastname" required><br>
    Email<br>
    <input type="text" name="email" required><br>
    Username<br>
    <input type="text" name="username" requiredr><br>
    Password<br>
    <input type="text" name="password" required><br>
    Level<br>
    <input style="font-family"type="text" name="level" value="admin identify=2 user identify=1"required><br>          
    Id<br>
    <input type="text" name="id" value="Enter the last 6 idcards." required><br>
    <br></br>
        <input type="submit" value="Submit">
        <input type="reset"  value="Cancel"></p>
    </td>
    <td>
          <img width="700px" height="auto" src="img/pics.gif">
    </td>
   </table>
    </form>
</div>
  
</div>
</body>
</html>
<?php require_once"footer.php"; ?>

