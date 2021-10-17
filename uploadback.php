<?php
session_start();
include('sqlconnection.php');
if(isset($_POST['submit']))
{
    $file=$_FILES["file"];
    $name=$file["name"];
    $uploadedBy=$_SESSION['email'];
    $size=$file["size"];
    $temp=$file["tmp_name"];/*A temporary address where the file is located before processing the upload request*/
    $path="uploads/".$name;
    $query="insert into files values('$name','$size','$uploadedBy')";
    $result=mysqli_query($conn,$query);
    if(move_uploaded_file($temp,$path))
    {
        if($result)
        {
            ?>
            <Script>
            alert("File uploaded successfully");
            window.location.href="uploadfront.php";
            </Script>
            <?php
        }
        else
        {
            ?>
            <script>
                 alert("Server Error");
                 window.location.href="uploadfront.php";
            </script>
            <?php
        }
    }
    else
        {
            ?>
            <script>
                 alert("Server Error");
                 window.location.href="uploadfront.php";
            </script>
            <?php
        }
}
?>