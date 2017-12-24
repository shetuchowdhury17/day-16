<?php

 //Arithmatic Operator: Bainary
echo 'Arithmatic Operator: Bainary';
echo '<br/>';
    $x=30;
    $y=20;
    $z = $x + $y;
    echo $z;
    echo '<br/>';
    $z = $x - $y;
    echo $z;
    echo '<br/>';
    $z = $x * $y;
    echo $z;
    echo '<br/>';

    $a=30;
    $b=2;
    $c = $a / $b;
    echo $c;
    echo '<hr/>';

//Arithmatic Operator: Unary
echo 'Arithmatic Operator: Unary';
echo '<br/>';

    $x=30;
    $y=20;
    echo $x++;
    echo '<br/>';
    echo $x--;
    echo '<br/>';
    echo ++$x;
    echo '<br/>';
    echo --$x;
    echo '<hr/>';

//Assignment Operator
echo 'Assignment Operator';
echo '<br/>';

    $x=20;
    $y=20;
    echo $x+=$y;
    echo '<br/>';
    echo $x-=$y;
    echo '<br/>';
    echo $x*=$y;
    echo '<br/>';
    echo $x/=$y;
    echo '<br/>';
    echo $x%=$y;
    echo '<br/>';
    echo $x.=$y;
    echo '<hr/>';

//Conditional Operator
echo 'Conditional Operator';
echo '<hr/>';
    $x=20;
    $y=20;
    echo $x>$y;
    echo '<hr/>';
    echo $x>=$y;
    echo '<hr/>';
    echo $x<$y;
    echo '<hr/>';
    echo $x<=$y;
    echo '<hr/>';
    echo $x==$y;
    echo '<hr/>';
    echo $x!=$y;
    echo '<hr/>';
    echo $x===$y;
    echo '<hr/>';
    echo $x!==$y;
    echo '<hr/>';

//Logical Operator
echo 'Logical Operator';
echo '<br/>';
    $x=10;
    $y=20;
    $z=30;


    echo ($x<$y)&&($y<$z);
    echo '<hr/>';
    echo ($x>$y)&&($y<$z).'<hr/>';
    echo '<hr/>';
    echo ($x<$y)&&($y>$z).'<hr/>';
    echo '<hr/>';
    echo ($x>$y)&&($y>$z).'<hr/>';
    echo '<hr/>';

    echo ($x<$y)||($y<$z);
    echo '<hr/>';
    echo ($x>$y)||($y<$z).'<hr/>';
    echo '<hr/>';
    echo ($x<$y)||($y>$z).'<hr/>';
    echo '<hr/>';
    echo ($x>$y)||($y>$z).'<hr/>';
    echo '<hr/>';

    echo $x;
    echo '<hr/>';
    echo !$x;
    echo '<hr/>';

//Single line Statement
echo 'Single line Statement';
echo '<br/>';
    $x=10;
    $y=20;
    $z = $x + $y;
    echo $z;
    echo '<hr/>';

//Conditional Statement
echo 'Conditional Statement';
echo '<br/>';
    $x=10;
    $y=20;
    $z=30;

//    if($x<$y){
//        echo 'Hello World';
//    }

    if($x>$y){
        echo 'World Bank';

    } else{
        echo 'Bangladesh Bank';
        echo '<br/>';
    }

$a=50;
$b=10;
$c=30;

if($a<$b){
    echo 'Hello PHP';
}
else if($b<$c){
    echo 'Hello HTML';
}
else if($c<$a){
    echo 'Hello CSS';
}
else{
    echo 'Hello javaScript';
}

echo '<hr/>';

//Repeated Statement
echo 'Repeated Statement';
echo '<br/>';

$x;
for ($x=1;$x<5;$x++){
echo 'Hello jQuery'.'<br/>';
}

?>
