<html>
    <style>
        #name1
        {
            position:absolute;
            color:white;
        background-color:#009865;
        font-weight:600;
        font-family:Century Gothic;
        cursor:pointer;
            margin-top:1vw;
            margin-left:2vw;
            box-shadow:2px 2px 10px;
        }
        
         #name2
        {
            position:absolute;
            color:white;
        background-color:#009865;
        font-weight:600;
        font-family:Century Gothic;
        cursor:pointer;
            margin-top:1vw;
            margin-left:-7vw;
            box-shadow:2px 2px 10px;
        }
        
        #name1:hover
        {
            color:#009865;
        background-color:white;
            transition:0.3s ease;
            box-shadow:2px 2px 10px;
        }
        
        #name2:hover
        {
           
            color:#009865;
        background-color:white;
            transition:0.3s ease;
              box-shadow:2px 2px 10px;
        }
        
        ul li a:hover
   {
    color:white;
    transition:0.3s;
    background-color:#009;
        color:black;
    font-family:Century Gothic;
         box-shadow:2px 2px 10px;
   }
        
        #mc{
            margin-top: 10vw;
            margin-left: 25vw;
           position: absolute;
            background-color:#009865;
            width: 50vw;
            height: 28vw;
            border-radius:2vw;
            box-shadow:2px 2px 10px;
        }
        
    #slab
    {
        position: absolute;
       background-color:#009865;
        width:100vw;
        height:4vw;
        box-shadow:2px 2px 10px;
    }

    </style>
    <head>
        <title>Sidrive</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <header>
        <div id="slab">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="uploadfront.php">Upload Notes</a></li>
            <li><a href="downloadfront.php">Download Notes</a></li>
            <li><a href="logout.php">Logout</a></li>
<!--            <li><a href="uploadsfront.php">Uploads</a></li>-->
        </ul>
      </div>
        </header>
        
        
        <div id="mc">
        
            <div class="title">
            <h1>Sidrive</h1>
            </div>
            <div class="button">
                <a href="signupfront.php" id="name1">Signup</a>
                <a href="loginfront.php" id="name2">Login</a>
            </div>
        
        
        </div>
        
        
    </body>
</html>