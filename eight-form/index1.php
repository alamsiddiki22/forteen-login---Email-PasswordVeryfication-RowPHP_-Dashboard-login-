<?php
$arr = [565, 675,854, 34, 3243,56,7,56,4,34,234,5434];
echo count($arr)."<br>";
function greeting(){
    echo "Hello World <br>";
}
greeting();
?>
<?php
$arr = [565, 675,854, 34, 3243,56,7,56,4,34,234,5434];
// echo count($arr)."<br>";

// custom count function
function rahmatulla_count($arr){
    // print_r($arr);
    foreach($arr as $key => $value){
        // echo $key;
    }
    return $key+1;
}
echo rahmatulla_count($arr)."<br>";
?>
<?php
// print_r($_SERVER['DOCUMENT_ROOT']);
foreach($_SERVER as $key => $value) {
    echo $key."<br>";
}

?>