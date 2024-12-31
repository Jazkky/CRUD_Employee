<?php
require("dbconnect.php");

$id = $_GET["id"];

$sql = "DELETE FROM employees WHERE id = $id";
$result = mysqli_query($con,$sql);

if($result){
    header("location:showData.php");
    exit(0);
}else{
    echo mysqli_error($con);
}

?>