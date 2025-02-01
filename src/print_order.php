<?php 
session_start();
require_once("config.php");
$sql="select * from tb_order where orderID= '" . $_SESSION['order_id'] . "' ";
$result = mysqli_query($connect,$sql);
$rs=mysqli_fetch_array($result);
$total_price = $rs['total_price'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Success</title>
    <!--Bootsrap css-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!--main css-->
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="success"><b>Order Success</b><br></div>
            <div style="text-align:center">
            <div class="ooo">
                    Order No. :<?=$rs['orderID']?><br>
                    Name : <?=$rs['cus_name']?><br>
                    Address : <?=$rs['address']?><br>
                    Phone No. : <?=$rs['telephone']?><br><br>

                        <p>Total <?=number_format($total_price,2)?> Baht </p>
                        <img src="img/qr.jpg" width="150 px">
                        <p>Please make the payment within 24 hours.</p>
                        <a href="index.php"><button type="button" class="btn btn-outline-secondary">Back to Home</button></a>
                        
            </div></div>
        </div>
    </div>
    </div>
</body>
</html>   