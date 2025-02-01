<html>
<head>
<style>    
table  {
  border-radius:100px;
  background-color: beige;
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

table td, customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

table tr:nth-child(even){background-color: #CDDB86;}

table  tr:hover {background-color: #A4B07E;}

table  th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #638A56;
  color: white;

}
a{
    text-decoration: none;

}
a p{
    text-decoration: none;
    text-align: center;
    font-weight: bold;
    font-size: 18px;
    color: #638A55;
    padding:20px 0 0 0;
}
.record a p {
    color:#638A55;
    border:2px solid #638A55;
    border-radius: 200px;
    background-color: #f8f1de;
}
.backadmin1 a p {
    color:#638A55;
    border:2px solid #638A55;
    border-radius: 200px;
    background-color: #f8f1de;
}
.backadmin1 a p {
    color:#638A55;
    border:2px solid #638A55;
    border-radius: 200px;
    background-color: #f8f1de;
}
</style>
</head>
<body class="bodyshow">
<?php require_once"header.php"; ?>
<?php require_once"admin.php"; ?>
<?php
require_once "config.php";
?>
<div class="showdata">
<?php
$userquery= "SELECT * from systemuser";
$result= mysqli_query($connect,$userquery);
?>
<div class="record">
<?php
echo "<a href=\"employeemain.php\"><p>Add a new record click here!</p></a><br><br>";
?>
</div>
<div class="table">
<?php 
if(!$result){
    die("Could not successfully run the query $userquery".mysqli_error($connect) );
}
if(mysqli_num_rows($result)==0)
{
   echo "No record were found with query $userquery";
}
else
{
    echo "<table><tr>
    <th>username</th>
    <th>password</th>
    <th>level</th>
    <th>Update</th>
    <th>Delete</th>
    </tr>";
    {
    while ($row = mysqli_fetch_assoc($result)) 
    { 
    echo "<tr><td>".$row['username']."</td><td>"
        .$row['password']."</td><td>"
        .$row['level']."</td>";
    //for update and delete
    echo "<td><a href=\"updatedata_sys.php?id=".$row['user_id']."\">";
    echo "Update</a></td>";
    echo "<td><a href=\"delete_data.php?id=".$row['user_id']."\">";
    echo "Delete</a></td></tr>";
    }
    }
    echo "</table>"; 
}
?>
</div>

<div class="backadmin1">
<?php
echo "<a href=\"admin.php\"><p>Back to admin homepage click here!</p></a><br><br>";
mysqli_close($connect);
?> 
</body>
</html>
<?php require_once"footer.php"; ?>
