<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <title>Random Number</title>
 </head>
 <body>
 <p>Generating a random number between 1 and 10:
 <?php
 echo rand(1, 10);
 
 echo  '<br>this is a <strong>test</strong>! <br>';
 
 echo "<a href=\"http://www.sitepoint.com\">Click here</a>";


echo  $tetsvariabme = '<br>3 <br>';
$age = 20;
$eval = $age > 12 ? "yes 20" : "no 21" ;
echo $eval; 

$roll =  rand(1,6);
echo '<p> You rolled a ' .$roll . '</p>';
if ($roll == 6) {
  echo '<p>You Win! <p>';
}
else {
  echo '<p> sorry,you didn\'t win , better luck next time !</p>';
  
}
echo '<p>Thanks for playing </p>';


//for ($count = 1; $count <=10; $count ++) {
  //$roll = rand(1,6);
  //echo '<p>You rolled a ' . $roll . '</p>';
  //if ($roll ==6) {
  //echo '<p>You win!</p>';
  //}
  //else {
    //echo '<p>Sorry, you didn\'t win, better luck next time ! </p>';
  //}
  //echo '<p>Thanks for playing </p>';
//}

while ($count <= 10) {
  echo $count . ' ' ;
  ++$count;
  
}
'sorry,you didn\'t win , better luck next time !</p>';
  

echo '<p>Thanks for playing </p>';


//for ($count = 1; $count <=10; $count ++) {
  //$roll = rand(1,6);
  //echo '<p>You rolled a ' . $roll . '</p>';
  //if ($roll ==6) {
  //echo '<p>You win!</p>';
  //}
  //else {
    //echo '<p>Sorry, you didn\'t win, better luck next time ! </p>';
  //}
  //echo '<p>Thanks for playing </p>';
//}

//while ($count <= 10) {
  //echo $count . ' ' ;
  //++$count;
  
//}

//do {
  //$roll = rand(
  //1,//
  //6);//
  //echo 'You rolled a ' .
  //$roll . '';
 //if (
  //$roll == 6
  //)
  //{
 // echo 'You win!';
  //}
  //else
  //{
  //echo 'Sorry, you didn\'t win, better luck next
 // time!';
 // }
 //}
 //while ($roll != 6);//



 $myArray = ['one', 2 ,"3"];
 echo $myArray[0];
 echo $myArray[1];
 echo $myArray[2];

 $myArray[1] = 'two';
 $myArray[3] = 'four';
 $myArray[]='five';
 echo $myArray[4];

 $roll = rand(1, 6);
if ($roll == 1) {
 $english = 'one';
}
else if ($roll == 2) {
 $english = 'two';
}
else if ($roll == 3) {
 $english = 'three';
}
else if ($roll == 4) {
 $english = 'four';
}
else if ($roll == 5) {
 $english = 'five';
}
else if ($roll == 6) {
 $english = 'six';
}
echo '<p>You rolled a ' . $english . '</p>';
if ($roll == 6) {
 echo '<p>You win!</p>';
}
else {
 echo '<p>Sorry, you didn\'t win, better luck next time!</p>';
}
 
$english = [];
$english[1] = 'one';
$english[2] = 'two';
$english[3] = ' three ';
$english[4] = 'four';
$english[5] = 'five';
$english[6] = ' six ';
echo $english[3]; 
echo $english[5];



$var1 = 3;
$var2 = 5;
echo $english[$var1];
echo $english[$var2]; 
 
 


$english = [
  1 => 'one',
  2 => 'two',
  3 => 'three',
  4 => 'four',
  5 => 'five',
  6 => 'six'
 ];
 $roll = rand(1, 6);
echo '<p>You rolled a ' . $english[$roll]
 . '</p>';
if ($roll == 6) {
 echo '<p>You win!</p>';
}
else {
 echo '<p>Sorry, you didn\'t win, better luck
 next time!</p>';
}

$roll1 = rand(1, 6);
$roll2 = rand(1, 6);
if ($roll1 == 1) {
 $english = 'one';
}
else if ($roll1 == 2) { 
 $english = 'two';
}
else if ($roll1 == 3) {
 $english = 'three';
}
else if ($roll1 == 4) {
 $english = 'four';
}
else if ($roll1 == 5) {
 $english = 'five';
}
else if ($roll1 == 6) {
 $english = 'six';
}
if ($roll2 == 1) {
 $englishRoll2 = 'one';
}
else if ($roll2 == 2) {
 $englishRoll2 = 'two';
}
else if ($roll2 == 3) {
 $englishRoll2 = 'three';
}
else if ($roll2 == 4) {
 $englishRoll2 = 'four';
}
else if ($roll2 == 5) {
 $englishRoll2 = 'five';
}
else if ($roll2 == 6) {
 $englishRoll2 = 'six';
}
echo '<p>You rolled a ' . $english . ' and a '
 . $englishRoll2 . '</p>';

 $birthdays['Kevin'] = '1978-04-12';
$birthdays['Stephanie'] = '1980-05-16';
$birthdays['David'] = '1983-09-09';

$birthdays = [
  'Kevin' => '1978-04-12',
  'Stephanie' => '1980-05-16',
  'David' => '1983-09-09'
 ];
 echo 'Kevin\'s birthday is: ' . $birthdays['Kevin'];

 


 ?>
 </p>
 </body>
</html>