<?php 


	// $x = 1;

	// while ( $x <= 10) {
	// 	echo $x."<br>";

	// 	$x++;
	// }

  ?>


 <?php 


// 	$x = 1;

// 	do {
// 		echo $x."<br>";

// 		$x++;
// 	} while ( $x <= 10);


// 	echo "<br>";




// 	for ($i=25; $i <26 ; $i++) { 
// 		for ($j=1; $j <11 ; $j++) { 
			
// 			echo $i."X".$j." = ".($i*$j)."<br>";
// 		}
// 	}



// 	$colors = array("red","yellow","green","white");

// 	foreach ($colors as $value) {

// 	echo "$value <br>";

// }

 
    // for($a = 0; $a <= 5; $a++) {
    //     for($b = 1; $b <= $a; $b++) {
    //         echo "*";
    //         if($b < $a) {
    //            echo " ";
    //         }
    //     }
    //     echo "<br />";
    // }


 //?>
<!-- <select>

<?php 

$months = array("January","February","March","April","May","June","July","August","September","October","November","December");

for ($i=0; $i <=11 ; $i++) { 
	echo "<option = $months>$months[$i]</option>";
}
 ?>


</select>
 -->


<!-- <?php 

    for ($i=0; $i < 10; $i++) { 

        for ($j=0; $j <= $i ; $j++) { 
            
            echo "*";

            if ($j < $i) {
                echo " ";
            }
        }
        
        echo "<br>";
    }

 ?> -->


 <!-- <?php 

    $person = "Moinul";
    echo "Today is his promotion day <br>";

    switch ($person) {
        case 'Arif':
           echo "So bring a chocolate <br>";
            break;
        case 'Maria':
           echo "So bring a rose please <br>";
            break;

            case 'Moinul':
           echo "So bring a chocolate <br>";
            break;


        default:
            echo "Happy Anniversary";
            break;
    }

  ?> -->
<!-- <table border = "2" cellpadding="5">
    
    <?php 

        for ($i=1; $i <=10; $i++) { 
            echo "<tr>";

            for ($k=1; $k <=10 ; $k++) { 
                echo "<td align = middle>".$i*$k."</td>";
            }
        }

        echo "</tr>"
     ?>


</table> -->

<!-- <?php 

    $start = 1;
    $end = 4;

    $sum = 0;

    for ($i=$start; $i <=$end ; $i++) { 
        $sum += $i;
    }

    echo "Sum from".$start." to ".$end." = ". $sum;

 ?> -->


 <!-- <?php 




 $sum = 0;

 for ($i=0; $i <=20 ; $i++) { 
     $sum += $i;

     
 }

 echo "The sum is: ".$sum;





  ?>

 -->

<!-- <?php 


    function recursion($n){

        if($n <= 5)
        {
            echo $n."<br>";

            recursion($n+1);

        }


    }

    recursion(1);
 ?>
 -->


<!--  <?php 

 function demo($n)
 {
    if ($n <= 25)
    {
        echo $n."<br>";

        demo ($n+1);
    }

 }

 demo (1);


?> -->

<?php 

    $sum = 0;

    for ($i=0; $i <=4 ; $i++) 
    { 
        $sum += $i;
    }

    echo "Grand Total is ".$sum;

 ?>


 <?php 

    $sum = 0;

    $start = 8;
    $end = 10;

    for ($i=$start; $i <=$end ; $i++) 
    { 
        $sum +=$i;
    }

    echo $sum;
  ?>














































