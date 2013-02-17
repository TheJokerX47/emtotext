<?php
session_start();
$_SESSION['doesExist'] = true;
?>

<html>
	<head><title>PHPText!</title></head>
		<body>
			<p class="header" id="header">PHPText!</p>
			<form name="bad" action="do.php" method="post">
				<p>Phone Number: (NO DASHES, SPACES, OR OTHER CHARS! JUST NUMBERS! 10 DIGITS!) </p><input type="textbox" name="num" id="num" />
				<p>Message: </p><input type="textbox" name="msg" id="msg" />
				<p>Carrier: </p><select name="carrier">
									<option value="att">AT&T</option>
									<option value="verizon">Verizon</option>
									<option value="tmobile">T-Mobile</option>
								</select><br/><br/>
				<input type="submit" value="Send!" name="submit" />
			</form>
	</body>
</html>