<?php
$dbhost = "localhost";//Standard as per server credentials
 $dbuser = "root";//Standard as per server credentials
 $dbpass = "";//Standard as per database password
 $db = "sidrive_clone";//Standard as per database name
 $conn =mysqli_connect($dbhost,$dbuser,$dbpass,$db);// return true or false as per db connection establishment, values passed should be in same order.
if($conn==false)
{
    echo"Server Error";
}
else
{
    if(isset($_POST['submit']))
    {
        $email=$_POST['mail'];
        $pass=$_POST['pass'];
        $query="insert into signup(email,pass) values('$email','$pass')";
        if(mysqli_query($conn,$query))
        {
            ?>
            <Script>
           alert("Signup Successful");
                window.location.href='loginfront.php';
            </Script>
          <?php
        }
       else
       {
           ?>
           <Script>
          alert("This Email Id already exist");
            window.location.href='signupfront.php';
            </Script>
            <?php
       }
        //}
        
    }
}
?>