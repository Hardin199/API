<?php


$conn = mysqli_connect("localhost", "root", "", "dp.php");
if($conn){
    echo"yes";
}else{
    echo "no";
}


$insert_data = mysqli_query($student, " INSERT INTO Students{name,age,gender} values{'hardin','21','m'}");

if($insert_data){
    header("locaation: dp.php");
}
?>