<?php

include("setb12.php");



$n1=$_POST['n1'];
$n2=$_POST['n2'];


$opt=$_POST['radio'];


if($opt=='a')
{
	              

                if($n1 && $n2)
		echo"Answer".add($n1,$n2);
	elseif($n1)
		echo"Answer".add($n1);
	elseif($n2)
		echo"answer".add($n2);
       
}
if($opt=='s')
{
	if($n1 && $n2)
		echo"Answer".sub($n1,$n2);
	
	elseif($n1)
		echo"Answer".sub($n1);
	elseif($n2)
		echo"answer".sub($n2);
}

if($opt=='m')
{
	if($n1 && $n2)
		echo"Answer".mul($n1,$n2);
	
	elseif($n1)
		echo"Answer".mul($n1);
	elseif($n2)
		echo"answer".mul($n2);
}

if($opt=='d')
{
	if($n2==0)
		echo"Division by zero is not possible";
	else
        {
	if($n1 && $n2)
		echo"Answer".div($n1,$n2);
	
	elseif($n1)
		echo"Answer".div($n1);
	elseif($n2)
		echo"answer".div($n2);
	}
}
?>
