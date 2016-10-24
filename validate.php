<?php
$item1=0;
$item2=0;
$item3=0;

if (isset($_POST["add1"]))
$item1=$_POST["add1"];
if (isset($_POST["add2"]))
$item2=$_POST["add2"];
if (isset($_POST["add3"]))
$item3=$_POST["add3"];
if (isset($_POST["q1"]))
$qty1=$_POST["q1"];
if (isset($_POST["q2"]))
$qty2=$_POST["q2"];
if (isset($_POST["q3"]))
$qty3=$_POST["q3"];

if($item1=="cart1" && $item2=="cart2" && $item3=="cart3")
	{
		echo "added successfully. Your total amount is:";
		$total=($qty1)*250+($qty2)*150+($qty3)*120;
		echo "Rs ".$total;
		
	}
	

else if($item1==0 && $item2==0 && $item3==0)
{
	echo "Pls select at least one item before checking out.";
}

else if(($item1==0 && $qty1!=0) || ($item2==0 && $qty2!=0)||($item3==0 && $qty3!=0))
{
		echo "You have to add to cart first before specifying quantity!";
}



	
?>