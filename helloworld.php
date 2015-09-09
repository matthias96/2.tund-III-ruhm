<?php
		$first_name="Matthias";
		$last_name="Kurs";

		echo $first_name." ".$last_name;
?>
<br>
<?php

		$age = 6;		
		
		//testib loogikat, juhul kui vanus on väiksem kui 18 siis kirjuta "alaealine",
		//muul juhul "täisealine"
		//if sisse loogikatehe
		if($age < 18) {
			//tõene
			
			echo "alaealine";
		} else {
			//väär
			
			echo "täisealine";
		}	
			
?>