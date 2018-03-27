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
$a=35;

$data = array(1, 1.14, NULL, new stdClass, 'foo', 2, 3, 5, 15, 20, $a);
function massChange($data=[]){
//echo "changeOn";
    $chislo=0;
    $chislo1=0;
    foreach ($data as $value) {

        if(gettype($value)!=="integer"){
            unset($data[$chislo]);
//            echo "+1";
        }
        $chislo++;
    }
    $data = array_values($data);

    foreach ($data as $key) {

        if ($key%5!==0) {
            echo $key . "<br/>";
            unset($data[$chislo1]);
        }
        $chislo1++;
    }
    $data = array_values($data);
    return $data;

}

$data = massChange($data);
print_r($data);


//второе задание со строкой
$str="sadf 0 osfoo sdofosa soos asdofas od fdsaof";

function ChangeStroka (& $stroka) {
    $stroka = str_replace(o, 0, $stroka);
    return $stroka;
}

ChangeStroka($str);
echo $str;


//это третье задание с факториалом
$ChisloForFactorial=5;
function getFactorial($Chislo) {
    static $FinalChislo=1;
    $FinalChislo*=$Chislo;
//    echo "<br/>";
//    echo $FinalChislo;
    if ($Chislo==1)
    {
        echo "<br/>" . $FinalChislo;

    }
    else {
        getFactorial($Chislo-1);
    }
}

getFactorial($ChisloForFactorial);

?>
</body>
</html>