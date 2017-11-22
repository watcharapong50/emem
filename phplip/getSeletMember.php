<?php
  require_once 'retive.php';
  $id =$_POST['mid'];
  $sql ="SELECT * from members where id = $id";
  $query = $conn->query($sql);
  $result=$query->fetch_assoc();
  echo json_encode($result);

//  var_dump($result);
  $conn->close();
 ?>
