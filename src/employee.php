<html>
   <head>
   <link rel="stylesheet" type="text/css" href="main1.css">
   </head>
<body style="background-color:#FDFAF2;" class="bodys">
<?php require_once"header.php"; ?>
<?php
require_once "config.php";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$level=$_POST['level'];
$id=$_POST['id'];

$userquery="INSERT INTO member(id,firstname,lastname,email) 
value('$id','$firstname','$lastname','$email')";
$result=mysqli_query($connect,$userquery);

$userquery1="INSERT INTO systemuser(username,password,level,id) 
value('$username','$password','$level','$id')";
$result1=mysqli_query($connect,$userquery1);
?>
<div class="backlogin">
<?php
if(!$result1)
{
   die("Could not successfully run the query $userquery1".mysqli_error($connect));
}
else
{
   echo "<br><a href = \"login.php\"><p>Go back to login click here !</p></a>";
}
?>
</div>
<div class="img-gif">
      <p align="center"> <img  width="1000px" height="auto" src="img/sucess1.gif"></p>
</div>
  </body>
</html>