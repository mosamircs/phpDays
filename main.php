<?php
/**
 * Created by PhpStorm.
 * User: mosamircs
 * Date: 1/2/2019
 * Time: 9:29 PM
 */

//playlist Videos
//1-echo
//day 1 in php
echo "hello mo<br><p><b>this text is bold</b></p>";
echo "<h1>Hello from header1 momsamircs</h1>";

//2-variables
//day 2 in php
$name="Mohamed Samir Mohamed Amin<br>";
echo "My Name is ",$name;

$age=22;
echo "My Age is $age years old<br>";
$collage="Facuty of Computer and information Science<br>";
echo "My Collage",$collage;

//3-splitting print
$first_name="Mohamed";
$last_name="Samir";
echo "My Name ",$first_name," ",$last_name,"<br>";

//4-comments
//this mosamircs first php comment
/*multiple line
comment from mosamircs*/

//5-single vs double quote
//using single quote
echo 'mosamircs from single quote<br>';
//using double quote
echo "mosamircs from douple quote<br>";
//it's the same thing

//the diffrence is when using variables
$nickname = "mosamircs";
//using single quote
echo '$nickname from single quote<br>';
//using double quote
echo "$nickname from douple quote<br>";

//to solve this problem we will use concatenation with single quote
echo 'hello '.$nickname.'<br>';

//6-performance
$link="google";
echo "<a href ='https://www.google.com'>$link</a><br>";

//backslash solution for single quote
echo 'hello I\'m good at programming \\ now \\mosmircs <br>';

//8-math operators
echo 15+16,'<br>';
$num1=15;
$num2=16;
//Addition
echo 'sum of 2 variables',$num1+$num2,'<br>';
//Substraction
echo 'sub of 2 variables',$num1-$num2,'<br>';
//Multiplication
echo 'mul of 2 variables',$num1*$num2,'<br>';
//Division
echo 'div of 2 variables',$num1/$num2,'<br>';
//using result variable
$result=$num2-$num1;
echo 'the result is ',$result,'<br>';

//before
echo 'num1 before increment',$num1,'<br>';
//increment value
$num1++;
echo 'num1 after increment',$num1,'<br>';

//before
echo 'num2 before decrement',$num2,'<br>';

//decrement value
$num2--;
echo 'num2 after decrement',$num2,'<br>';

//9-if statement Decision making
//if (condition)
//= one equal is assign operator
//== double equals is checking equality operator in if condition
//example (1)
if ($name =="mosamircs")
    echo "hello",$name,"<br>";

//10-else and else if
else//else is just like if but with no condition
    echo "Hello",$name,"<br>";

//example (2)
if ($num1==$num2) {
    echo "equal numbers","<br>";
}
else if ($num1 > $num2 )//we can add anther condition here
{
    echo "num1 > num2",'<br>';
}
else if ($num1 < $num2 )//we can add anther condition here
{
    echo "num1 < num2",'<br>';
}
else
{
    echo "Not specified",'<br>';
}

//11-comparison operators (> and < and >= and <= and ==)
if ($num1 > $num2)
{
    print($num1);
}
elseif ($num1<$num2)
{
    print($num2);
}
else if ($num1==$num2)
{
    print($num1+'='+$num2+'<br>');
}

//12-logical operator (and , or)
$name="name";
$password="password";
if ($name=="name" and $password=="password")
{
    echo "login successfuly hello from and<br>";
}
if ($first_name=='Mohamed' or $password=='password')
{
echo "hello from or<br>";
}

//13- Arrays php:MULTIPLE variable within on family
//my first array in php
//day 3 in php
$mynames=array("MO","mosamircs","mosamirsc","Mohamed","Samir","Amin","Hamada");
/*
 * Array inside in memory save
[0]MO
[1]mosamircs
[2]mosamirsc
[3]Mohamed
[4]Samir
[5]Amin
[6]Hamada
*/
echo "ordinary array<br>";
echo $mynames[0],'<br>';
echo $mynames[1],'<br>';
echo $mynames[2],'<br>';
echo $mynames[3],'<br>';
echo $mynames[4],'<br>';
echo $mynames[5],'<br>';
echo $mynames[6],'<br>';

//another array type associative array
//first associative array in php
//it uses a key and value like dictionary in other languages
$myranks = array("MO"=>1,'mosamircs'=>2,"mosamirsc"=>3,"Mohamed"=>4,"Samir"=>5,"Amin"=>6,"Hamada"=>7);
echo "associative array<br>";
echo $myranks['MO'],"<br>";
echo $myranks['mosamircs'],"<br>";
echo $myranks['mosamirsc'],"<br>";
echo $myranks['Mohamed'],"<br>";
echo $myranks['Samir'],"<br>";
echo $myranks['Amin'],"<br>";
echo $myranks['Hamada'],"<br>";
echo $mynames[0].'is ranked'.$myranks['MO'].'<br>';
echo $mynames[1].'is ranked'.$myranks['mosamircs'].'<br>';
echo $mynames[2].'is ranked'.$myranks['mosamirsc'].'<br>';
echo $mynames[3].'is ranked'.$myranks['Mohamed'].'<br>';
echo $mynames[4].'is ranked'.$myranks['Samir'].'<br>';
echo $mynames[5].'is ranked'.$myranks['Amin'].'<br>';
echo $mynames[6].'is ranked'.$myranks['Hamada'].'<br>';
print_r($mynames);
echo "<br>";
print_r($myranks);
echo "<br>";
?>
