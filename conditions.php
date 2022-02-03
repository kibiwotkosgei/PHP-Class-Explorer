<?php

//if condition

$no1 =4;

if($no1>1){

  echo "The answer is true";

}
echo "<br>";
echo "<br>";
echo "<br>";
//if....else

$no1=65;
$no2=17;

if($no1<=$no2){

  echo "The answer is false";

}else {

  echo"The answer is true";
}
echo "<br>";
echo "<br>";
echo "<br>";
//if....elseif else Statement

$masaa = date("H");
if ($masaa<"30"){
    echo "Buenos días amigo";
}elseif($masaa<"21"){
  echo "Buenas tardes amigo";
}else{
  echo "Buenas noches amigo";
}
echo "<br>";
echo "<br>";
echo "<br>";

//another example
$grade=99;
if($grade<=40){
  echo "Oops! You have failed";
}elseif($grade<=60 and $grade >=41){
  echo"Ooh Lucky!You passed";
}elseif($grade<=80 and $grade >= 61){
  echo" Remarkable";
}elseif($grade>=81 and $grade <=90){
  echo"Outstanding";
}elseif($grade>=91 and $grade <=100){
  echo "Honorary" or "Distinction";
}else {
  echo "Out of range";
}
