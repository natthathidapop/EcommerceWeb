<?php
?>
<?php session_start();?>
<html>
    <head>
    <style>
    body {
        font-family: Georgia,'Arial';
         }
</style>
    <style>
    .headerhome ul {
    text-align: center;
    padding : 15px 0 15px 0;
    background-color: #ffffff;
    /*border-radius: 60px;*/
    font-family: Georgia,'Arial';
}
.headerhome ul li
{
    text-align: center;
    list-style: none;
    display: inline;
    text-decoration: none;
}
.headerhome ul li a{
    text-align: center;
    text-decoration: none;
    padding: 10px 30px 10px 30px;
    font-size: 20px;
    /*font-weight: bolder;*/
    font-family:url("https://fonts.googleapis.com/css2?family=Inter:wght@300;600&display=swap");
    color: #000;
    letter-spacing: 0.5px;
    position: relative;
    padding: 0 100px;
    text-shadow: gray 0.1em 0.1em 0.2em"
}
.headerhome ul li a::after {
    content: "";
    position: absolute;
    background-color:#fafcf1  ;
    height: 3px;
    width: 0%;
    left:0;
    bottom: -10px;
    transition:0.3s

}
.headerhome ul li a:hover:after {
    width: 100%;


}
.banner {
    padding: 0 auto 0 auto ;
}
.beforecontent {
    margin: 10px 0 0 0 ;
    background-color: #ffffff;
}
.beforecontent h3 {
    font-family: Georgia,'Arial';
    color:#638A55;
    text-shadow: gray 0.1em 0.1em 0.2em"
}

</style>
</head>
    <body>
    
        
    <div class="headerhome">
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="employeemain.php">Register</a></li>
        <li>
        
<?php
if (isset($_SESSION['username'])) {
    echo '<li><a href="logout.php">Logout -</a>';
    echo "<span class='user-desc'>&nbsp;[";
    echo $_SESSION['firstname']
        ." ".$_SESSION['lastname']
        ." -Level: ".$_SESSION['level'];
    echo "]</span></li>";
    }
    else {
        echo '<li><a href="login.php">Login</a></li>';
         }
        
?>

</li>
    </ul>
    <div class="banner">
    <img width="1000px" height="auto"src="img/bannernew.png">
    </div>
</div>
<div class="beforecontent">   
    <br>
    <h3 align="center">You must be logged in before placing an order.</h3>

</div>
</body>
</html>