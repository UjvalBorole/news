<?php
if($_SESSION["role"] == '0'){ 
    header("Location: {$hostname}/admin/post.php");
  }

include "config.php";

$category_id  = $_GET['id'];

$sql = "DELETE FROM category WHERE category_id = {$category_id}";

if(mysqli_query($conn,$sql)){
    header("Location: {$hostname}/admin/category.php");
}else{
    echo "Connection Failed";
}

mysqli_close($conn);
?>
