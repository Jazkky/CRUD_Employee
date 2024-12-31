<?php
require("dbconnect.php");

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$depart = $_POST["department"];
$skill = implode(", ", $_POST["skills"]);

$sql = "INSERT INTO employees (fname,lname,age,gender,department,skills) VALUES ('$fname','$lname','$age','$gender','$depart','$skill') ";
$result = mysqli_query($con,$sql);

if($result){
    header("location:showData.php");
    exit(0);
}else{
    echo mysqli_error($con);
}


?>