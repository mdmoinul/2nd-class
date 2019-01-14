

 <?php 

 	function recur($var2){

 		if ($var2 <= 5)
 		{

 		echo $var2."<br>";

 		recur($var2+2);

 		}

 	}
 	recur (1);
  ?>