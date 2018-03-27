<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//первое задание с массивом
$valueOfArray=35;

$myArray = array(1, 1.14, NULL, new stdClass, 'foo', 2, 3, 5, 15, 20, $valueOfArray);
function massChange($myArray=[]){
    $numberOfFirstForeach=0;
    $numberOfSecondForeach=0;
    foreach ($myArray as $value) {

        if(gettype($value)!=="integer"){
            unset($myArray[$numberOfFirstForeach]);
        }
        $numberOfFirstForeach++;
    }
    $myArray = array_values($myArray);

    foreach ($myArray as $key) {

        if ($key%5!==0) {
            unset($myArray[$numberOfSecondForeach]);
        }
        $numberOfSecondForeach++;
    }
    $myArray = array_values($myArray);
    return $myArray;

}

$myArray = massChange($myArray);
print_r($myArray);


//второе задание со строкой
$myString="sadf 0 osfoo sdofosa soos asdofas od fdsaof";

function ChangeStroka (& $string) {
    $string = str_replace('o', 0, $string);
    return $string;
}

ChangeStroka($myString);
echo "<br/>" . $myString;


//это третье задание с факториалом
$NumberForFactorial=5;
function getFactorial($Number) {
    static $FinalNumber=1;
    $FinalNumber*=$Number;
    if ($Number==1)
    {
        echo "<br/>" . $FinalNumber;

    }
    else {
        getFactorial($Number-1);
    }
}

getFactorial($NumberForFactorial);

?>
</body>
</html>