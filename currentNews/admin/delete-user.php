<?php
include "config.php";
if($_SESSION["role"] == '0'){ 
    header("Location: {$hostname}/admin/post.php");
  }
$userid  = $_GET['id'];

$sql = "DELETE FROM user WHERE user_id = {$userid}";

if(mysqli_query($conn,$sql)){
    header("Location: {$hostname}/admin/users.php");
}else{
    echo "Connection Failed";
}

mysqli_close($conn);
?>