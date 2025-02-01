<?php require_once"header.php"; ?>
<html >
<head>
<style>
.update h1 {
    font-size: xx-large;
    font-weight: bold;
    color: #35472e;
    text-align: center;
}
body {
    background-color:#f8f1de;

}
table  {
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
<div class="update">
<?php
    require_once "config.php";

    $id  = $_GET['id']; 
    $userquery = "SELECT * from member where id ='$id' ";
    $result = mysqli_query($connect, $userquery);

    if (!$result) {
        die("Could not successfully run the query $userquery" . mysqli_error($connect));
    } else {
        echo "<h1>Update data<br><br></h1>";
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
    </div>
    
<body>
            <form   method="post" action="update_data_submit.php?id=<?php echo $id;?>">
    <div class="updatedata">
                <table width="416" border="0">
                    <tr>
                        <td width="160">member_id</td>
                        <td width="246">Auto_Increment</td>
                    </tr>

                    <tr>
                        <td>firstname</td>
                        <td><input type="text" name="firstname" value="<?php echo $row['firstname']; ?>"></td>
                    </tr>

                    <tr>
                        <td>lastname</td>
                        <td><input type="text" name="lastname" value="<?php echo $row['lastname']; ?>"></td>
                    </tr>

                    <tr>
                        <td>email</td>
                        <td><input type="text" name="email" value="<?php echo $row['email']; ?>"></td>
                    </tr>

                    <tr>
                        <td align="right"><input type="submit" name="button" value="Submit"></td>
                        <td><input type="reset" value="Cancel"></td>
                    </tr>
                </table>
            </form>
        </div>
</body>
<?php
        }
    }
?>
</html>