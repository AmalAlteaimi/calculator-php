<!DOCTYPE HTML>

<HTML>
<HEAD>
	<meta charset="utf-8">
	<title>Simple Calculator </title>
</HEAD>
<BODY>
	<div class="calc">
		<p>Calculator</p>
	</div>
	<form>
		<input type="text" name="number1" placeholder="First Number ">
		<input type="text" name="number2" placeholder="Second Number ">
		<select name="operator">
			<option>none</option>
			<option>addition</option>
			<option>subtraction</option>
			<option>multiplication</option>
			<option>division</option>
		</select><br>
		<button type="submit" name="submit" value="submit">CALCULATE</button>
	</form>
<p>The result is: <?php include ("core.php"); ?></p>
</BODY>
</HTML>
