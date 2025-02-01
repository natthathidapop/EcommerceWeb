
<?php require_once"header.php"; ?>
<html>
    <head>
    <style>
        body {
            background-color:#FAFCF1;
        }
        .deletemember a {
            text-align: center;
            text-decoration: none;
            color: #638A55;
        }
        .deletemember a p {
            text-align: center;
            font-size:x-large;
        }
    </style>
    </head>
    <body>
<div class="deletemember">
<?php
require_once "config.php";

$id =$_GET['id']; //get $id from an update link

$userquery = "DELETE from member where id = '$id'";
$result = mysqli_query($connect,$userquery);

if(!$result)
{
    die("Could not successfully run the query $userquery".mysqli_error($connect) );
}
else{
    echo "<a href=\"show_update.php\"><p>Go back to display all information</p></a>";
}
?>
<p align="center"><img width="500px" height="auto" src="img/deletedata.gif"></p>
</div>    
</body>
</html>