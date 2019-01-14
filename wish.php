<?php 


	$name = "Komol!";
	$text = "Welcome";

	function greeting ($text1,$text2){

		$greet = $text1." ".$text2;
		return $greet;
	}

	$wish = greeting($text,$name);

	echo $wish;

 ?>