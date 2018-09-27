<?php
include "koneksi.php";


if(!empty($_POST["username"])) {
    
    $sql_get_user = mysqli_query($conn,"SELECT * FROM user where username='".$_POST["username"]."'") or die (mysql_error());
    if(mysqli_num_rows($sql_get_user) == 0)
      {
        echo "<span class='status-available'> Username Available.</span>";
      }
      else {
        echo "<span class='status-not-available'> Username Not Available.</span>";
      }
}

if(!empty($_POST["email"])) {
    
    $sql_get_user = mysqli_query($conn,"SELECT * FROM user where email='".$_POST["email"]."'") or die (mysql_error());
    if(mysqli_num_rows($sql_get_user) == 0 && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
      {
        echo "<span class='status-available'> Email Available.</span>";
      }
      else {
        echo "<span class='status-not-available'> Email Not Available.</span>";
      }
}
?>