<?php 


	$name1 = "Foysal";
	$name2 = "Komol";
	$name3 = "Azharul";

	$len1 = strlen($name1);
	$len2 = strlen($name2);
	$len3 = strlen($name3);

	if ($len1<$len2 && $len1<$len3) 
	{
		
		echo "The Shortest name is: ".$name1;
	} elseif ($len2<$len1 && $len2<$len3) 
	{
		echo "The Shortest name is: ".$name2;
	} else
	{
		echo "The Shortest name is: ".$name3;
	}

	echo "<br>";


	$name4 = "Apu";
	$name5 = "Aziz";
	$name6 = "Alamin";


	$len4 = strlen($name4);
	$len5 = strlen($name5);
	$len6 = strlen($name6);

	if ($len4 < $len5 && $len4 < $len6) {
		if ($len4 % 2 ==0) 
		{
			echo $name4." are general";
		}else
		{
			echo $name4." are different";
		}


	} elseif ($len5 < $len6 && $len5 < $len4) 
	{
		if ($len5 % 2 ==0) 
		{
			echo $name5." are general";
		}else
		{
			echo $name5." are different";
		}
	}else
	{
		if ($len6 % 2 ==0) 
		{
			echo $name6." are general";
		}else
		{
			echo $name6." are different";
		}
	}

	echo "<br>";

	function sum($var1){

		$total = $var1+1;

		echo $total."<br>";

		if ($total == 10) {
			exit();
		}

		sum ($total);

	}

	 sum (0);




 ?> 


 <!-- <?php 

	function sum($var1){

		$total = $var1+1;

		echo $total."<br>";

		if ($total == 10){

			exit();

		}

		sum($total);

		
	}

	sum (0);

 ?> -->



