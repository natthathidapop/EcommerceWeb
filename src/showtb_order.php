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
$userquery= "SELECT * from tb_order";
$result= mysqli_query($connect,$userquery);
?>
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
    echo "<table border =\"1\">";
    echo "<tr>
    <th>orderID</th>
    <th>Cus_name</th>
    <th>Adress</th>
    <th>Telephone</th>
    <th>Total_price</th>
    <th>Reg_date</th>
    <th>Delete</th>
    </tr>";
   
    {
    while ($row = mysqli_fetch_assoc($result)) 
    { 
    echo "<tr><td>".$row['orderID']."</td><td>"
        .$row['cus_name']."</td><td>"
        .$row['address']."</td><td>"
        .$row['telephone']."</td><td>"
        .$row['total_price']."</td><td>"
        .$row['reg_date']."</td>";
    //for update and delete
    echo "<td><a href=\"deletemember.php?id=".$row['orderID']."\">";
    echo "Delete</a></td></tr>";
    }
    }
    echo "</table>"; 
}
?>
</div>
<div class="backadmin1">
<?php
echo "<a href=\"admin.php\"><p>Back to admin homepage</p></a><br><br>";
mysqli_close($connect);
?> 
</div>
</body>
</html>
<?php require_once"footer.php"; ?>
