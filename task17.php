<?php
//1.program to print string a value using echo and print Conditions: You cannot use any variable. 

echo"Franka"."Keerthana"."<br>";
print"keerthana"."<br>";

//2.program to print in a single statement by assigning two values to two variables

$x=77;$y=99;
echo"$x"."$y"."<br>";

//3.program for sum of 2 numbers without using functions
$a=55;$b=77;
echo $a+$b."<br>";

//4.program to assign some different values on different data types and print them with datatype and values

$k="LIVE LIFE FULLY"; $f=100;
var_dump($k."");
echo "<br>";
var_dump($f);
echo "<br>";


//5.program for Checking the difference errors that occurs at which conditions by using the comments too


//Warning error occurs due to unexisting file
include ("demo_file.php");
//Notice error occurs due to undefined variable
$q="RDJ"; 
echo $w."<br>";
//Parse error or syntax errors

//e="white";
 echo $e;
//Fatal error occurs calling undefined function

 /*function sam(){
 	$r=5; $t=5;
 	echo $r+$t;
 }
surya();*/


//6.program for local variables

echo "<br>";

function prabhas(){
	$u=99; //local variable
	echo"Here u is inside the function :$u"."<br>";
}
prabhas();
echo"Here u is outside the function :$u"."<br>";

?>

<?php
//7.Global variables

$i=77; //declared globally
function darling(){
	echo "here i is called inside function:$i"."<br>";
} 
darling();
   echo "here i is called outside function:$i"."<br>";
   //To use globally declared variables with in function we need to use global key word.
   $v="10";
   function world(){
   	global $v;
   	echo "v is called within function:$v"."<br>";
   }
   world();
   echo "v is called outside function:$v"."<br>";
?>

<?php 
//8.static variables
function start(){
	//without static keyword
	$o=1;
	echo"$o"."<br>";
	$o++;
}
start();
start();
start();
function st(){
	//with static keyword
	static $o=1;
	echo"$o"."<br>";
	$o++;
}
st();
st();
st();

?>

<?php 
//9.program for 2 or more values assigned to the different variables and use all the athematic operations and print all the values

$ss=7; $kk=5;
echo $ss+$kk."<br>"; //       7+5=12
echo $ss-$kk."<br>"; //       7-5=2
echo $ss*$kk."<br>"; //       7*5=35
echo $ss/$kk."<br>"; //       7/5=1.4
echo $ss%$kk."<br>"; //       7%5=2

?>

<?php 
//10.program for addition of 2 numbers and that should be stored in already existing variable
$h=7; $j=7;
$g=$h+$j; //7+7=14
echo $g."<br>";
$g+=$h+$j; // $g=$g+$h+$j 14+7+7=28
echo"$g"."<br>";

?>
 
 <?php 
 //11.Program for show the difference between “==” and “===”

 $n=79; $m="79"; 
 var_dump($n==$m);  //it checks the value
 print_r($n==$m); //returns 1 because it is true
 echo "<br>";
 $n=79; $m="79"; 
 var_dump($n===$m);  //it checks the value and data type
 //print_r($n===$m); //returns 0 because it is false
 echo "<br>";
 print_r($n===$m); //returns 0 because it is false
 ?>

<?php

//12.Increment and decrement 
$x=10;
echo ++$x; //1+10=11 pre increment 
echo "<br>";
echo $x++; //11+1=12 //11 post increment
echo "<br>";
echo --$x; //1-12=11 pre decrement 
echo"<br>";
echo $x--; //11-1=10 //11 post decrement
?>