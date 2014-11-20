<?php require 'includes/config.php';?>
<?php include 'includes/header.php';?>
<h1>Contattaci!</h1>
<p>Scrivi qualunque cosa che vuoi!</p>
<?php
if(isset($_POST['submit']))
{//if there's data, show it.
	//echo $_POST['FirstName'];
	
	$message = process_post();
	
	safeEmail('kfensk01@seattlecentral.edu','Test Subject',$message);
	echo 'Grazie per il vostro email!';

}else{//show the form.
	echo '
	<form action="contactus.php" method="post">
	<table align="left" width="500px">
		<tr>
			<td>Nome:</td>
			<td><input type="text" name="first_name" required="required" /></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" required="required" placeholder="Enter a valid email address" /></td>
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