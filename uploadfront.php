<?php
include('sql_session_connection.php');
?>
<html>
<style>
  *
 {
    margin:0;
     padding:0;
 }
 body
{
        background-color:#009865;
    height: 100vh;
    background-size: cover;
    background-position: center;
}
    .main
    {
        text-align:center;
        margin:100px auto 0px auto;
        width:500px;
    }
    h2
    {
        text-align:center;
        padding:5px;
        font-family:Century Gothic;
    }
    .register
    {
        background-color:white;
        width:100%;
        height:20vw;
        color:black;
        font-size:18px;
        border-radius:10px;
        margin-top:200px;
        border:1px solid rgba(255,255,255,0.3);
        box-shadow:2px 2px 15px;
    }
    form#register
    {
        margin:40px;
    }
    r1{
        position:fixed;
    }
    label
    {
        font-family:Century Gothic;
        font-size:18px;
        
    }
    input#name
    {   
        width:300px;
        padding:5px;
        font-size:15px;
        border:1px solid #ddd;
        border-radius:3px;
    }
    input#submit
    {
        width:200px;
        font-size:20px;
        color:white;
        background-color:#009865;
        font-weight:600;
        font-family:Century Gothic;
        cursor:pointer;
    }
    #submit:hover
    {
        background-color:white;
        color:black;
        transition:0.3s ease;
    }
    ul
    {
        position:absolute;
        margin-top:-13vw;
        margin-left:60vw;
        padding:0 3.7vw;
    }
    ul li
    {
        display:inline;
        float:right;
    }
    ul li a
{
    
  color:black;
    background-color:white;
    text-decoration:none;
    padding:5px 10px;
    border: 1px solid transparent;
    font-family:Century Gothic;
}
ul li a:hover
{
    color:black;
    transition:0.3s;
    background-color:#009865;
    font-family:Century Gothic;
}
</style>
    <head>

        
    </head>
    <body>
        <header>
        <ul>
             <li><a href="logout.php">Logout</a></li>
            <li><a href="downloadfront.php">Download Notes</a></li>
            <li><a href="uploadfront.php">Upload Notes</a></li>
            <li><a href="index.php">Home</a></li>
<!--            <li><a href="uploadsfront.php">Uploads</a></li>-->
        </ul>
        </header>
<div class="main">
   <div class="register" id="r1">
       <h2>Document Upload</h2>
     <form action="uploadback.php" method="post" id="register" enctype="multipart/form-data">     
    <input style="cursor:pointer" type="file" name="file" id="name" required><br><br>
         <input type="submit" value="Upload" name="submit" id="submit">
       </form>
   </div>
    </div>
</body>
</html>
