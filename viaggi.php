<?php require 'includes/config.php';?>
<?php include 'includes/header.php';?>
<h1>Viaggia con noi!</h1>
<p>Cosa vi interessa?</p>
<?php
if(isset($_POST['submit']))
{//if there's data, show it.
	//echo $_POST['FirstName'];
	
	$message = process_post();
	
	safeEmail('kfensk01@seattlecentral.edu','Test Subject',$message);
	echo 'Grazie per il vostro email!';

}else{//show the form.
	echo '
	<form action="viaggi.php" method="post">
	<table align="left" width="500px">
		<tr>
			<td>Nome:</td>
			<td><input type="text" name="first_name" required="required" /></td>
		</tr>
		<tr>
			<td>Cognome:</td>
			<td><input type="text" name="last_name" required="required" /></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" required="required" placeholder="Enter a valid email address" /></td>
		</tr>
		<tr>
			<td>Dove vuoi viaggiare?</td>
			<td>
				<input type="checkbox" name="Interests[]" value=" Torino" style="margin-top:7px" /> Torino<br />
				<input type="checkbox" name="Interests[]" value=" Napoli" style="margin-top:7px" /> Napoli<br />
				<input type="checkbox" name="Interests[]" value=" Roma" style="margin-top:7px" /> Roma<br />
				<input type="checkbox" name="Interests[]" value=" Venezia" style="margin-top:7px" /> Venezia<br />
				<input type="checkbox" name="Interests[]" value=" Firenze" style="margin-top:7px" /> Firenze<br />
			</td>
		</tr>
		<tr>
			<td>Vuoi sentire da noi?</td>
			<td>
				<input type="radio" name="mailing_list" value="Yes" style="margin-top:7px" /> Si <br />
				<input type="radio" name="mailing_list" value="No" style="margin:7px 0" /> No <br />
			</td>
		</tr>
		<tr>
			<td>Commenti:</td>
			<td><textarea name="comments" cols="40" rows="4"></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" value="Clicca qui!" name="submit" /></td>
			<td></td>
		<tr>
	</table>
	</form>
	';
}
?>
<?php include 'includes/footer.php';?>