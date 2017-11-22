<?php
    require_once 'retive.php';

    $id = $_POST['hid'];
    $fname = $_POST['efname'];
    $lname = $_POST['elname'];
    $contact = $_POST['econtact'];

    $sql = "UPDATE  members SET fname='$fname',lname='$lname',contact='$contact' WHERE id=$id";
    //echo $sql;

    $result = $conn->query($sql);
    $result = $conn->query($sql);
    if($result==TRUE){
        header("Location:http://localhost/crudExample/emem/index.php");
    }else{
        die('Cannot Insert into Database');
    }

    $conn->close();
?>
