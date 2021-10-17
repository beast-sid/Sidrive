<?php
 include('sql_session_connection.php');
 $query=mysqli_query($conn,"select * from files");
?>
<html>
<style>
    h1
    {
        font-family:'Quicksand',sans-serif;
        color:#009865;
        text-align:center;
    }
    ul
    {
        position:absolute;
        margin-top:-3.5vw;
        margin-left:68vw;
    }
        ul li
    {
        display:inline;
        float:right;
        padding:0.2vw;
    }
    ul li a
{
    
  color:white;
    background-color:#009865;
    text-decoration:none;
    border: 1px solid transparent;
    font-family:Century Gothic;
}
ul li a:hover
{
    color:black;
    transition:0.3s;
    background-color:white;
    font-family:Century Gothic;
}
    .content-table
    {
        position:absolute;
        margin:25px 0;
        font-size:0.9em;
        min-width:50vw;
        font-family:'Quicksand',sans-serif;
    }
    .content-table th
    {
        background:#009865;
        color:#ffff;
        text-align:left;
        font-weight:bold;
        font-size:1.3vw;
    }
    .content-table th,.content-table td
    {
        padding:20px 65px;
    }
    .content-table tr
    {
        border-bottom:2px solid #009865;
        
    }
    .content-table tr:nth-of-type(odd)
    {
        background-color:#009865;
        color:white;
    }
    .content-table tr:last-of-type
    {
        border-bottom-color:#009879;
    }
    .k1
    {
        color:black;
        border:1px solid transparent;
        font-size:1.2vw;
    }
    .k1:hover
    {
        color:white;
        background-color:#009879;
    }
</style>
    <body>
        <h1>Download Notes</h1>
        <ul>
             <li><a href="logout.php">Logout</a></li>
            <li><a href="downloadfront.php">Download Notes</a></li>
            <li><a href="uploadfront.php">Upload Notes</a></li>
            <li><a href="index.php">Home</a></li>
<!--            <li><a href="uploadsfront.php">Uploads</a></li>-->
        </ul>
    <table class="content-table">
        <th>Index</th>
        <th>Name</th>
        <th>Size</th>
        <th>UploadedBy</th>
        <th>Downloads</th>
        <?php
        if($query)
        {
            $i=0;
            while($row=mysqli_fetch_array($query,MYSQLI_NUM))
            {
                $i++;
                ?>
              
              <tr id="1">
                  <td><?php echo $i ?>.</td>
                  <td><?php echo $row[0] ?></td>
                  <td><?php echo $row[1] ?></td>
                  <td><?php echo $row[2] ?></td>
                  <td><a href="uploads/<?php echo $row[0]?>" download="<?php echo $row[0] ?>" class="k1"> Download</a>                                                              </td>
              </tr>
              <?php
            }
        }
        else
        {
            ?>
           <Script>
               alert("Server Error");
               window.location.href("uploadfront.php");
            </Script>
           <?php
        }
        ?>
    </table>
    </body>
</html>