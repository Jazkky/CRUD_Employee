<?php
require("dbconnect.php");

$id = $_POST["id"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$depart = $_POST["department"];
$skill = implode(", " , $_POST["skills"]);

$sql = "UPDATE employees SET fname = '$fname' , lname = '$lname' , age = '$age' , gender = '$gender' , department = '$depart' , skills = '$skill' WHERE id = $id";
$result = mysqli_query($con,$sql);



if($result){
    header("location:showData.php");
    exit(0);
}else{
    echo mysqli_error($con);
}


?>