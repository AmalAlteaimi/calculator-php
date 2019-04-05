<?php
	if(isset($_GET['submit'])){
		$numbers1=$_GET['number1'];
		$numbers2=$_GET['number2'];
		$operators=$_GET['operator'];

		switch($operators){
			case "none": echo "Please choose a valid operator!"; break;
			case "addition": echo $numbers1 + $numbers2; break;
			case "subtraction": echo $numbers1 - $numbers2; break;
			case "multiplication": echo $numbers1 * $numbers2; break;
			case "division": echo $numbers1 / $numbers2; break;
		}
	}
?>
