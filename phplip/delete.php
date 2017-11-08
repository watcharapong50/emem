<?php
  require_once 'retive.php';
  $id =$_POST['mid'];
  $sql ="delete from members where id = $id";
  $result = $conn->query($sql);


  $conn->close();
 ?>
