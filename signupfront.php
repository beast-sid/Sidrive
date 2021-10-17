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
        color:black;
        font-size:18px;
        border-radius:10px;
        border:1px solid #009865;
        box-shadow:2px 2px 15px;
    }
    form#register
    {
        margin:40px;
    }
    label
    {
        font-family:Century Gothic;
        font-size:18px;
        
    }
    input#name
    {
        width:300px;
        color:#009865;
        font-size:15px;
        border:1px solid #ddd;
        border-radius:3px;
    }
    input#submit
    {
        width:200px;
        font-size:20px;
        color:white;
        background-color:#009850;
        font-weight:400;
        font-family:sans-serif;
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
    float: right;
        margin-top:-5.5vw;
        margin-left:65vw;
}
    ul li
{
    display:inline-block;
}
ul li a
{
  color:black;
    background-color:white; 
    padding:5px 10px;
    border: 1px solid transparent;
    font-family:Century Gothic;
    text-decoration:none; 
}
ul li a:hover
{
    color:white;
    transition:0.3s;
    background-color:#009865;
    font-family:Century Gothic;
}
    
</style>
    <head>
<!--        <h1>Create Account</h1>-->
        
    </head>
    <body>
        <header>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="uploadfront.php">Upload Notes</a></li>
            <li><a href="downloadfront.php">Download Notes</a></li>
            <li><a href="logout.php">Logout</a></li>
<!--            <li><a href="uploadsfront.php">Uploads</a></li>-->
        </ul>
        </header>
<div class="main">
   <div class="register">
       <h2>Register here</h2>
     <form action="signupback.php" method="post" id="register">
         <label>Your Name: </label><br>
         <input type="text" required placeholder="Enter Your Name" name="fname" id="name"><br><br>
         <label>Mobile Number: </label><br>
         <input type="text" required placeholder="Enter Your Mobile Number" name="mnum" id="name"><br><br>
         <label>Email: </label><br>
         <input type="text" required placeholder="Enter Your Mail" name="mail" id="name"><br><br>
         <label>Set Password: </label><br>
         <input type="password" required placeholder="Enter Your Password" name="pass" id="name"><br><br>
         <label>Gender: </label><br>
         &nbsp;
         <input type="radio" required name="gender" id="name1">&nbsp;
         <span id="male">Male</span>&nbsp;&nbsp;&nbsp;
         <input type="radio" name="gender" id="name1">&nbsp;
         <span id="female">Female</span><br><br>
         <label>Known Languages:</label><br>
         <input type="checkbox" name="lang" id="eng">&nbsp;&nbsp;<span id="eng">English</span>
         <input type="checkbox" name="lang" id="hindi">&nbsp;&nbsp;<span id="hindi">Hindi</span>
         <input type="checkbox" name="lang" id="urdu">&nbsp;&nbsp;<span id="urdu">Urdu</span><br><br>
         <input type="submit" value="Submit" name="submit" id="submit">
       </form>
   </div>
    </div>
</body>
</html>
