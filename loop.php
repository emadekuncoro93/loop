<?php 

/**
 * Author : Emade
 */
class Loop
{
	function print_number(int $number){
		
		//validate number
		if($number < 1){
			echo 'the input number should be above 0';
			exit;
		}

		$marlin = 'Marlin';
		$booking = 'Booking';
		$count = 0;
		
		for ($i=1; $i <= $number; $i++) { 	
			if($i%3 == 0 && $i%5 == 0){
				$count+=1;
				echo 'No ' .$i. ' : Marlin Booking, count : '. $count;
				echo "<br>";
				if($count == 2){
					$marlin = "<b>Booking</b>";
					$booking = "<b>Marlin</b>";
				}
				if($count == 5){
					break;
				}
			}elseif($i%3 == 0){
				echo "No ". $i ." : {$marlin}<br>";
			}elseif($i%5 == 0){
				echo "No " .$i. " : {$booking}<br>";
			}

		}
	}
}