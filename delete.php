<?php
// require "delete.php";


if(isset($_post['save_student'])) {
    $name = $_post['student_name'];
    $Age = $_post['student_age'];
    $Gender = $_post['student_gender'];


    $conn = mysqli_connect("localhost", "root", "", "dp.php");
    if($conn){
        echo"yes";
    }else{
        echo "no";
    }


    $insert_data = mysqli_query($conn, "INSERT INTO `students` (`Name`, `Age`, `Gender`) VALUES ('".$name."', '".$Age."', '".$Gender."'); ");

    if($insert_data){
        header("location: dp.php");
    }
}



?>