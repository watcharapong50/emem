<?php

    require_once('retive.php');
    $sql="SELECT * from members";
    $result = $conn->query($sql);

$output = [];
while($row=$result->fetch_assoc()){
    // echo $row['id']." : ".$row['fname']." : " .$row['lname']." : " .$row['contact']."<br>";
    $output[]=array($row['id'],$row['fname'],$row['lname'],$row['contact']);
}
echo "<br>";
$conn->close();
?>
