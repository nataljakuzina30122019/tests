header("Content-Type:text/html; charset=utf-8");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php

$firstName = "name";
$lastName = "lastname";
$fullName = $firstName . $lastName; //оператор конкатенции
//$fullName =$firstName. " - " .$lastName ;<?php


echo $fullName;

//** $a = 6;
//$b = 5 ;
//if  ($a == $b){
//    echo ' A не равно B';
//} else 
//    echo ' A = B ';//

$a = 5;
$b = 6;
$c = 8;
$d = 9;

if ($a == $b ) {
    echo ' A = B ';
}elseif ($a == $c) {
   echo " A = C ";
}elseif ($a == $d)   
 {
echo ' A = C ';
} else if ( $a == $d ){
   echo " A = D ";
} else {
    echo ' A ne ravno ';
    
    switch ($a){
    case $b;
    echo 'A ravno B ';
    break;
    case $s;
    echo 'A ravno B';
    break;
    case $c;
    echo "A ravno C";
    break;
    case $d;
        echo 'A ravno D ';
        break;
    default :
    echo 'A ravno D ';
        break;
        
    }
}

echo '<br>======================================================';
for ($i = 1; $i <101; $i = $i + 1 ){
    echo $i . '<br>';
    echo '<br>======================================================';
    
$myArray = array ('Privet','Mir','rodilsja','novyj','programist');
      foreach ($myArray as $value){
          echo $value . '<br>';
      }
}

