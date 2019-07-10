<!DOCTYPE html>
<html lang="en">
<body>

<?php

		$t = date("l");

		$days = array("Monday", "Tuesday", "Wednesday","Thursday", "Friday", "Saturday", "Sunday" );

		  

			if ($t==$days[0]) {

			    echo "Mutton !";
			} 

			elseif ($t==$days[1]) {

			    echo "Qorma !";
			}

			elseif ($t==$days[2]) {

			    echo "Nihari !";
			}

			elseif ($t==$days[3]) {

			    echo "Sri Pai !";
			}

			elseif ($t==$days[4]) {

			    echo "Biryani !";
			}

			elseif ($t==$days[5]) {

			    echo "Chinese rice !";
			}

			else {

			    echo "Pasta";
			}
?>
 
</body>
</html>
	
