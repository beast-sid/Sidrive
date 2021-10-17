<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['pass']);
session_destroy();
?>
  <script>
      alert("Logged out succesfully");
      window.location.href="loginfront.php";
  </script>
<?php

?>