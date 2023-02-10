<?php
$connect = mysqli_connect("localhost", "root", "", "cforget");
 
  
if (isset($_POST['update'])) {
  $id = $_POST['id']; 
  $upd_count = $_POST['upd_count'];

  mysqli_query($connect, "UPDATE cf_users SET upd_count='$upd_count' WHERE id=$id");
  $_SESSION['message'] = "Address updated!"; 
  header('location: index.php');
}
  ?>