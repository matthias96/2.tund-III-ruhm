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
<br>
<?php

		//vastavalt vanusele trükime nii mitu korda välja sõna "palju"
		
		for($i = 0; $i <$age; $i=$i + 1)	{
			
			//tegevus mis kordub
			echo "palju".$i." ";
			
			
		}
		
		echo "õnne!";

?>