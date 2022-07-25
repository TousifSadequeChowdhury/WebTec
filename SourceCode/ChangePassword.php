<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
<?php
    include('Header.php');
?>
    <h1>Change Password</h1>
	<fieldset>
        <legend>Change Password</legend>
		<form action="../SourceCode/ChangePasswordCheck.php" method="post" novalidate>

			<label for="username">Valid User Name:</label>
			<input type="text" name="username" id="username" placeholder="Enter User Name" required>
			<br><br>
	
			<label for="password">New Password:</label>
			<input type="password" name="password" id="password" placeholder="Enter a New Password"required"required>
			<br><br>
	
			<input type="submit" name="submit" value="Change Password">
		</form>
    </fieldset>



</body>
</html>
<?php
    include('footer.php');
    ?>