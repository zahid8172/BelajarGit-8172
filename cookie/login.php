<?php

if (!empty($_POST['submit'])) {
	$input_username = 'abc123';
	$input_password = 'rahasia';

	if ($_POST['in_usr']==$input_username && $_POST['in_pwd']==$input_password) {
		setcookie('usr', $input_username, time()+3600);
		setcookie('pwd', $input_username, time()+3600);

		header('location:admin.php');
	}else{

		echo '<h1>Login Gagal</h1>';
	}
}

?>
<h1>Form Login</h1>
<form action="login.php" method="post">
	<label>Username</label><br />
		<input type="text" name="in_usr"><br />
	<label>Password</label><br />
		<input type="password" name="in_pwd"><br />

		<input type="submit" value="login"><br />
</form>