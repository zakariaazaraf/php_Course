<?php
    $i = 0;
	echo '<div class ="navbar">';
	echo '<ul>';
	for($i=0;$i<10;$i++){
		echo '<li class ="liNumber"'.($i+1).'"> li element writen by php Number '.($i+1).'</li>';
		
	}
	echo '</ul>';

	echo '</div>';
	//This piece of code create 10 number of li element by php loop
?>