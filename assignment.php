<?php
echo "This is a while loop";
echo "<br>";
echo "<br>";

// while loop
$no3=50;

while ($no3 <= 100) {
  echo"Nambari ya samaki ni: $no3 <br>";//while the condition is met the statement is echoed after 5 is added.
  $no3 +=5;// code...
}
echo "<br>";
echo "This is a do....while loop";
echo "<br>";
echo "<br>";

// do....while loop

$no4=51;
do {
  echo"Idadi ya wageni ni : $no4 <br>";
  $no4 +=5;// code...
} while ($no4 <= 100);
//the above loop echoes nambari ya wageni then adds 5 untill the while condition is met.




echo "<br>";
echo "This is the switch statement";
echo "<br>";
echo "<br>";

$mysport="Hockey";

switch ($mysport) {
  case 'Basketball':
    echo"I love Basketball";
    break;
  case 'Water Pollo':
    echo"This is the most amazing sport";
    break;
  case 'Triathlon':
    echo"Iron-man Cowboy James inspires me with his conquer 100 challenge";
    break;
  case 'Hockey':
    echo"Both field and ice hockey are very physical";
    break;
  case 'Football':
    echo"With me having a finesse trait,why not love it?";
  break;
  default:
    echo"Ooops! We dont recognize that sport here";
    break;
}
 ?>
