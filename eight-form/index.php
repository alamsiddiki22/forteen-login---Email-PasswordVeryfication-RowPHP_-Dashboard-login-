<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" placeholder="Math total marks" name="a">
        <input type="text" placeholder="English total marks" name="b">
        <button name="add_btn" type="submit">Add (+)</button>
        <button name="sub_btn" type="submit">Sub (-)</button>
        <button name="multi_btn" type="submit">multi (*)</button>
        <button name="divi_btn" type="submit">Divi (/)</button>
    </form>
</body>
</html>

<?php
if(isset($_POST['a']) && isset($_POST['b'])){
    if($_POST['a']){
        if($_POST['b']){
            if(isset($_POST['add_btn'])){
                echo $_POST['a'] + $_POST['b'];
            }
            if(isset($_POST['sub_btn'])){
                echo $_POST['a'] - $_POST['b'];
            }
            if(isset($_POST['multi_btn'])){
                echo $_POST['a'] * $_POST['b'];
            }
            if(isset($_POST['divi_btn'])){
                echo $_POST['a'] / $_POST['b'];
            }
        }else{
            echo "b value nai";
        }
    }else{
        echo "a value nai";
    }
       
}
 
?>