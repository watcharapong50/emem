<?php
  /*  echo  $_POST['id'];
    echo $_POST['fname'];
    echo $_POST['lname'];
    echo $_POST['contact'];*/
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['contact'];
    $sql = "INSERT into members(id,fname,lname,contact) value($id,'$fname','$lname','$contact')";
    //echo $sql;
     require_once 'retive.php';
     $result = $conn->query($sql);
     if($result == TRUE){
       header("Location:http://localhost/crudExample/emem");
     }else {
       die("can't con");
     }
     $conn->close();

?>
