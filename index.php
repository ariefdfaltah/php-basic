<html>

<head>
    <title>Hello World</title>
</head>

<body>
<?php

$b = "halo halo bandung"."<br>";
//$c = "0000";
//$d = 00000;
//
//die();

//echo $b;

//for($i = 0; $i <= 10; $i++) {
//    echo $i." ".$b;
//}

////$a = "Halo Tata";
//
////var_dump($b);
//
//die();
//var_dump($b);
//var_dump($c);die();
//var_dump($d);

for($i = 0; $i <= 10; $i++) {
    if($i % 2 == 0){
        echo $i." ".$b;
    } else {
        echo "i = ganjil"."<br>";
    }
}

for($i = 0; $i <= 10; $i++) {
    if($i % 2 == 0){
        echo $i." ".$b;
    } else if ($i % 3 == 0) {
        echo "bilangan kelipatan 3"."<br>";
    } else {
        echo "bilangan ganjil"."<br>";
    }
}

?>
</body>

</html>