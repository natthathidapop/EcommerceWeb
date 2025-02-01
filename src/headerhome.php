<?php
?>
<?php session_start();?>
<html>
    <head>
        <style>
    .headerhome ul {
    font-family: Georgia,'Arial';
    text-align: center;
    padding : 30px 0 30px 0;
    background-color: #fffff;
    box-shadow: 10px 10px 5px rgba(0,0,0,.2);
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
    
    color:rgb(0, 0, 0);
    letter-spacing: 0.5px;
    position: relative;
    padding: 0 10px;
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

.beforecontent{
    font-family: Georgia,'Arial';
    background-color: #fce7b2;
    padding="20px 0 20px 0";
    color:#638A55;
    font-weight:bolder;
    text-shadow: gray 0.1em 0.1em 0.2em"
    
}
</style>
</head>
    <body>
    
        
    <div class="headerhome">
    <ul>
        <li><a href="index.php">Home</a></li>
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
    <p align="center"><img width="1000px" width="auto"src="img/welcome.png"></p>
    </div>
</div>
<!--<div class="beforecontent">
    <br>
    <marquee direction="left" width="1300px" height="auto" scrollamount="10s" scrolldelay= "0.5s"><h1>WELCOME TO OUR WEBSITE PHRAE OTOP </h1></marquee>
</div>-->
</body>
</html>