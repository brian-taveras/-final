<?php
  session_start();
  if ($_SESSION["user"] == ""){
    echo  '<script language="javascript">
          location.href = "login.php";

       </script>';
  }else{
    session_unset();
    echo  '<script language="javascript">
          location.href = "index.php";

       </script>';
  }
 ?>
