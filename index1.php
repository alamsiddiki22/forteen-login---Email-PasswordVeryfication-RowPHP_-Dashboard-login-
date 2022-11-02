<?php
$A = "Roni";
$B = 20;
$C = 50.50;
echo $C + $B;
echo $A ."+". $B;
echo $A."<br>" ."+". $B;
echo "Hello World!"."<br><br>"; 

$num_one = 40;
$num_one = $num_one+10;
$num_one = $num_one+10;
$num_one = $num_one+10;
echo $num_one ."<br><br>";

$num_one = 40;
$num_one = $num_one*10;
$num_one = $num_one*10;
$num_one = $num_one*10;
// echo $num_one ."<br><br>";

$num_one = 40;
$num_one+=20;
$num_one+=20;
$num_one+=20;
// echo $num_one ."<br><br>";

$num_one = 80;
$num_one-=20;
$num_one-=20;
$num_one-=20;
// echo $num_one ."<br><br>";

$num_one = 2000;
$num_one/=10;
$num_one/=10;
$num_one/=10;
echo $num_one ."<br><br>";

$num_one = 50;
echo $num_one++ ."<br><br>";

$num_one = 50;
echo ++$num_one ."<br><br>";

$num_one = 50;
$num_one++;
echo $num_one ."<br><br>";

echo " *********** SECOND CLASS ***********<br>";

echo "<br>";

//*********** Second class ************

$num = "31";
if($num == 0){
    echo "This is number zero <br><br>";
}
else if($num == 1 ){
    echo "This is number One <br><br>";
}
elseif($num == 2 ){
    echo "This is number Two <br><br>";
}
elseif($num == 3 ){
    echo "This is number Three <br><br>";
}
elseif($num == 4 ){
    echo "This is number Four <br><br>";
}
elseif($num == 5 ){
    echo "This is number Five <br><br>";
}
elseif($num == 6){
    echo "This is number Six <br><br>";
}
elseif($num == 7){
    echo "This is number Seven <br><br>";
}
elseif($num == 8){
    echo "This is number Eight <br><br>";
}
elseif($num == 9){
    echo "This is number Nine <br><br>";
}
elseif($num == 10){
    echo "This is number Ten <br><br>";
}

else{
    echo "This is something else <br><br>";
}


$Marks = 60;
if($Marks >= 80 && $Marks <= 100){
    echo "I am A+";
}
else if($Marks >= 70 && $Marks<80){
    echo "I am A";
}
else if($Marks >= 60 && $Marks<70){
    echo "I am A-";
}
else if($Marks >= 50 && $Marks<60){
    echo "I am B";
}
else if($Marks >= 40 && $Marks<50){
    echo "I am C";
}
else if($Marks >= 33 && $Marks<40){
    echo "I am D";
}
else{
    echo "You Fail";
}
echo "<br><br>";

$location = "khulna";
$gender = "mail";
if($location == "khulna"){
    if($gender == "mail"){
        echo "You are eligible";
    }
    else{
        echo "You have to be a male";
    }
}
else{
    echo "You are not from Dhaka";
}
echo "<br><br>";

$num = 5;
if($num == 5){
    echo "This is number Five";
}
else{
    echo "This is something else";
}
echo "<br><br>";

echo ($num == 5) ? "This is number five" : "This is something else";

echo "<br><br>";

echo " ************ THIRD CLASS ************<br>";

echo "<br>";

// $char = "A";
$char = strtolower("A");
if($char == "a" || $char == "e" || $char == "i" || $char == "o" || $char == "u"){
    echo "This is vowel";
}
else{
    echo "This is consonent";
}
echo "<br><br>";

// function greetings($name){
//     echo "Hello ". $name ."<br>";
// }
// greetings("Roni");

function greeting($name){
// function greeting($name ="Shohan"){
    // return "Hello ". $name ."<br>";
    return "Hello $name <br>";
}
echo greeting("Robi");
echo greeting("Sobi");
echo greeting("Hobi");
// echo greeting();

$name = "MD.Rahomatulla";
echo str_word_count($name)."<br>";

echo strlen($name)."<br>";

echo strrev($name)."<br>";
echo strtolower($name)."<br>";
echo strtoupper($name)."<br>";
echo ucfirst($name)."<br>";
echo lcfirst($name)."<br>";

echo ucwords(strtolower($name))."<br>";

echo str_repeat($name."<br>",2);


$char = 3;
if(gettype($char) == "string"){
    $char_a = strtolower($char);
    if($char_a == "a" || $char_a == "e" || $char_a == "i" || $char_a == "o" || $char_a == "u"){
        echo "This is vowel";
    }
    else{
        echo "This is consonent";
    }
}
else{
    echo "This is not valid";
}




// array
$our_first_array = [
    34,
    24.9,
    1 => 35,
    46,
    1 => 34,
    98,
];
print_r($our_first_array);


$first_arr = [4, 534, 234, 23, 43,20];
$end = count($first_arr) - 1;
for ($start=0; $start<=$end; $start++){
    echo $first_arr[$start]."<br>";
}
?> 
 