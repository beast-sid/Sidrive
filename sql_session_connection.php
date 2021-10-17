<?php
session_start();
$dbhost='localhost';
$dbuser='root';
$dbpass="";
$db="sidrive_clone";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if($conn==false)
{
    ?>
    <Script>
    alert("Server Error");
    window.location.href='loginfront.php';
</Script>
    <?php
    exit();
}

if(!isset($_SESSION['email'])||!isset($_SESSION['pass']))
{
    ?>
    <Script>
    alert("Login Required");
    window.location.href='loginfront.php';
    </Script>
    <?php
    exit();
}
?>