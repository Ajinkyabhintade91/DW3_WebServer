<?php
//1
echo'Declare an object and pass arguments';

echo '<br>';echo '<br>';echo '<br>';


//2
#I'm a shell style comment 
echo'a shell comment is placed on a single line';

echo '<br>';echo '<br>';echo '<br>';

//3
/* PHP Program
@auteur: PSL
@date: 2023-12-09 */
Echo  "This is my first PHP program"; 

echo '<br>';echo '<br>';echo '<br>';

//4
//Please keep the 2 lines of code below 
echo"it's so 
beautiful to share";

echo '<br>';echo '<br>';echo '<br>';

//5
//I'm a C++ style comment
echo'a C++ comment is placed on a single line';

echo '<br>';

//6
//Declare and assign values 
$class=(54%3)/2;


echo '<br>';

//7
//Output: Hello Sonic
$name='Sonic';
$msg="Hello $name";
echo $msg;

echo '<br>';
echo '<br>';echo '<br>';

//8
$img='image.gif';
echo "<img src='$img'>";

echo '<br>';
echo '<br>';echo '<br>';
//9
$messages['success']="Congratulations!";
$countSuccess=" 5 stars!";
//Expected exit: Congratulations! 5 stars!
echo "<p> {$messages['success']} $countSuccess</p>";

echo '<br>';

//10
echo  'I\'m always happy in my parent\'s house';

echo '<br>';
echo '<br>';

//11
$control='ready';
echo 'control = '.$control;

echo '<br>';

//12
echo "<p><a href=\"index.php\">OUR SERVICES</a></p>";


echo '<br>';

//13
$address = "Montreal,QC";
echo "Address: $address";


echo '<br>';

//14
function abc(){return"You WIN!";}
echo "<p>Result: ".abc()."</p>";

echo '<br>';


//15
$message['message'] = "Hello World";
echo $message['message'];

echo '<br>';


//16
function whatDate() { 
date_default_timezone_set('America/Toronto'); 
return getDate()['weekday'];
}

echo "<p>Date:". whatDate()."</p>";

echo '<br>';


//17
$arr =["Monday", 23,  "April"]; 
echo $arr[0].", ".$arr[2]." ".$arr[1]; 
//Expected Output: Monday, April 23 

echo '<br>';

//18
//Create a constant
define("POND_FINSESSION",0.4);
$noteFinSessionSur_40= 100*POND_FINSESSION;
echo $noteFinSessionSur_40;

echo '<br>';

//19
$salutation="Good morning"; echo $salutation;


echo '<br>';


//20
$size=strlen("error");             
$message='Error'." ". $size+1;
//Expected output: Error 6 
echo $message;

echo '<br>';
echo '<br>';
echo '<br>';
