<!DOCTYPE html>
<html lang="en">
<body>

<?php

	$favdish = date("D");

	    switch ($favdish) {

		case 'Mond':
			
			echo "Biryani";

			break;

		case 'Tue':

		     echo "Pasta";
			
			break;

	    case 'wed':

		     echo "Tikka Party";
			
			break;

		case 'Thu':

		     echo "Fish Fry";
			
			break;

	    case 'Fri':

		     echo "Mutton";
			
			break;

		case 'Sat':

		     echo "Chinese Rice";
			
			break;

		case 'Sun':

		     echo "Qorma";
			
			break;

        default:

			echo "niether pasta nor qorma";
    }

?>

</body>
</html>