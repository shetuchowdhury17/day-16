<?php

//$data = [10, 20, 30, 'Shetu', 'Khilkhet', 'Bangladesh'];
//echo $data[4];
//-----------------------------------------------------------------
//$data = [];
//$data [0] = 10;
//$data [1] = 20;
//$data [2] = 30;
//
//$data ['name'] = 'Shetu';
//$data ['city'] = 'Khilkhet';
//$data ['country'] = 'Bangladesh';
////
//echo $data;
//-----------------------------------------------------------------

//$data = [
//    'name' => 'Shetu',
//    'city' => 'Khilkhet',
//    'country' => 'Bangladesh',
//    'mobile' => '01672268920',
//    'gender' => 'Female',
//
//];
////echo  $data['city'];
//
////foreach ($data as $value){
////    echo $value.'<br/>';
////}
//
//echo '<pre>';  //if need to show including array index
////print_r($data);
//
//var_dump($data);

//---------------------------------------------------------------------

//$data = [];
//
//$data [0] [0]= 10;
//$data [0] [1]= 20;
//$data [0] [2]= 30;
//
//$data [1] [0]= 40;
//$data [1] [1]= 50;
//$data [1] [2]= 60;
//
//$data [2] [0]= 70;
//$data [2] [1]= 80;
//$data [2] [2]= 90;
//
//$data [3] [0]= 100;
//$data [3] [1]= 110;
//$data [3] [2]= 120;
//
//foreach ($data as $value){
////    echo $value[0].'<br/>';
////    echo $value[0].' '.$value[1].' '.$value[2].' '.$value[3].'<br/>';
//    foreach ($value as $v_value){
//        echo $v_value.' ';
//    }
//    echo '<br/>';
//}

//----------------------Build in array in php [8 super global array]-----------------------------------------------



//-----------------------------Function---------------------------------------------------------------------------
//
//function demo($firstName, $lastName=null){
////    $firstName  = "Shetu";
////    $lastName  = "Chowdhury";
//    $fullName  = $firstName.' '.$lastName;
////    echo $fullName;
//    return $fullName;
//}
////echo '<br/>.............................</br/>';
////demo();
//echo '<br/>.............................</br/>';
//demo('Shetu' );
//echo '<br/>.............................</br/>';
//demo('Sany', 'Chowdhury');
//echo '<br/>.............................</br/>';
//demo('Shahed', 'Chowdhury');
//
//echo '<br/>.............................</br/>';
//echo demo('Shetu' );
//echo '<br/>.............................</br/>';
//$res = demo('Sany', 'Chowdhury');
//echo 'Full Name is:'.$res;
//echo '<br/>.............................</br/>';
//$res = demo('Shahed', 'Chowdhury');
//echo '<h1>'.$res.'<h1/>';


//-----------------------------Class---------------------------------------------------------------------------

class Demo{
    public $name = 'Shetu Chowdhury';
    public $city = 'Khilkhet';

    function add(){
        echo 'In Add';
    }

    function hello(){
        echo 'In Hello';
    }
}
$demo = new Demo();

//$demo->hello();
echo $demo->name.'<br/>';
echo $demo->city;

//add();
//echo $name;