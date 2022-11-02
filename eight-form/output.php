<?php

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
    
?>