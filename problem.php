<?php
$var_one = 56;
echo "your value is: $var_one";
?>

<?php
echo "<br>";
$country = "Bangladesh!";
echo strrev($country);
?>

<?php
echo "<br>";
$str =  "Hello Bangladesh";
echo str_replace("Bangladesh", "CIT", $str);
?>
<?php
echo "<br>";
$str = "Hello Bangladesh";
echo str_replace("Bangladesh", "CIT", $str);
?>
<?php
echo "<br>";
// $pi = 3.1416;

define("pi", 3.1416);
define("Pi", 3.14162);
$shohan = 50;
define("shohan", 50);
echo Pi;
?>
<?php
echo "<br>";
$num = 3;
if($num > 50){
    echo "Invalid";
}
else{
    if($num%2 == 0){
        echo "This is even number";
    }else{
        echo "This is odd number";
    }
}

?>

<?php
echo "<br>";
// $num = 0;
for($num = 10 ; $num >= -8; $num--){
    echo "$num<br>";
    // print_r($num);
}

?>