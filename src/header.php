<?php session_start();?>
<html>
    <head>
        <style>
    .header ul {
    text-align: center;
    padding : 30px 0 30px 0;
    background-color: #638A55;
    border-radius: 60px;
    box-shadow: 10px 10px 5px rgba(0,0,0,.2);
}
.header ul li
{
    text-align: center;
    list-style: none;
    display: inline;
    text-decoration: none;
}
.header ul li a{
    text-align: center;
    text-decoration: none;
    padding: 10px 30px 10px 30px;
    font-size: 20px;
    font-weight: bolder;
    font-family:url("https://fonts.googleapis.com/css2?family=Inter:wght@300;600&display=swap");
    color: #000 ;
    letter-spacing: 0.5px;
    position: relative;
    padding: 0 10px;
    text-shadow: gray 0.1em 0.1em 0.2em"
}
.header ul li a::after {
    content: "";
    position: absolute;
    background-color:#fafcf1  ;
    height: 3px;
    width: 0%;
    left:0;
    bottom: -10px;
    transition:0.3s

}
.header ul li a:hover:after {
    width: 100%;


}</style></head>
    <body>
        
    <div class="header">

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
    </div>
</body>
</html>