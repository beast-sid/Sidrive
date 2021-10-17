<?php
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
?>