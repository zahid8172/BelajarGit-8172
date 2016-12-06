<?php

	$cookie = $_COOKIE;
	
	if(!empty($cookie['usr']) && !empty($cookie['pwd'])){
		
		echo '<h1>Administrator Page</h1>';
		echo 'Selamat Datang User '.$cookie['usr'];
		echo "<br /> <br />";
		echo '<a href="logout.php">Klik disini untuk logout</a>';
	}else{
		
		echo '<h1>Access Forbiden</h1>';
		echo 'Anda tidak dapat membuka halaman ini!!';

		header('Refresh: 3; URL=login.php');
	}
?>