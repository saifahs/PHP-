<!DOCTYPE html>
<html>
<body>

<?php
          
            $d = date("l");

            $m = "Monday";
            $t = "Tuesday";
            $w = "Wednesday";
            $tt = "Thursday";
            $f = "Friday" ;
            $s = "Saturday";
            $ss = "Sunday";

          
     
            if ($d == $m) {

			    echo "Qorma";
			}

			elseif ($d== $t) {

			    echo "Mutton";
			}

			elseif ($d== $w) {

			    echo "Nihari";
			}

			elseif ($d== $tt) {

			    echo "Sri Pai";
			}

			elseif ($d== $f) {

			    echo "Biryani";
			}

			elseif ($d== $s) {

			    echo "Chinese rice";
			}

			else {

			    echo "Pasta";
			}	

?>

</body>
</html>
