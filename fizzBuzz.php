<?php
  echo "<pre>";print_r('Demo page');
  exit();
  	echo "<pre>";
    $totalNum = 100;
    for($i=1;$i<=$totalNum;$i++)
    {
        if( ($i%3==0) && ($i%5==0) ) {
           echo "FizzBuzz"."\n";

        }
        else if($i%3==0){
           echo "Fizz"."\n";;
        }
        else if($i%5==0) {
           echo "Buzz"."\n";;
        }
        else {
           echo $i."\n";;
        }
    }   
?>
