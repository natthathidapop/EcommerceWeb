<?php require_once"header.php"; ?>
<html>
    <head>
    <style>
        body {
            background-color:#FAFCF1;
        }
        .updatedata a {
            text-align: center;
            text-decoration: none;
            color: #638A55;
        }
        .updatedata a p {
            text-align: center;
            font-size:x-large;
        }
    </style>
    </head>
    <body>
    <div class="updatedata">
<?php
//session_start();
require_once "config.php";

 $id= $_GET['id']; //get $id from an update link
 $firstname = $_POST['firstname'];
 $lastname =$_POST['lastname'];
 $email=$_POST['email'];
 
 


 $userquery = " UPDATE member SET firstname = '$firstname',
                                   lastname ='$lastname',
                                    email ='$email'
                                
                                where id = '$id'";

$result = mysqli_query($connect,$userquery);
if(!$result)
{
    die("Could not successfully run the query $userquery".mysqli_error($connect));
}
else
{

    echo "<a href=\"show_update.php\"><p>Go back to display all information</p></a>";
}

?>
<p align="center"><img width="800px" height="auto" src="img/updatedata.gif"></p>
</div>    
</body>
</html>