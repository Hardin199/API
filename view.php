<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head><h1>student's form</h1></head>
<body>
    
</body>
</html><br>
<form action="" method="post">
    <label for=""> name:</label>
    <input type="" name="student_name"><br><br>
    <label for=""> age:</label>
    <input type="" name="student_age"><br><br>
    <label for=""> password:</label>
                <input type="" pasword=""><br><br>
                <label for=""> emails:</label>
                <input type="" emails=""><br><br>
                <label for=""> mobile:</label>
                <input type="" mobile=""><br><br>
    <label for=""> gender:</label>
    <select name="" id="">
        <option value=""> gender</option>
            <option value="m"> male</option>
                <option value="f"> female </option>
</select><br>
<input type="button" value="sumit" name="sumit student">
</form>

<?php
$connect = ['localhost', 'root', '', 'dp_create'];
if($connect){
    echo "connected";
}else{
    echo "faled";
}
?>

<?php
$insert_data = ['']

?>