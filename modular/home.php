<?php require 'rumus.php'; ?>
<?PHP error_reporting(E_ERROR)?>

<h1>Luas dan Keliling Persegi</h1>

<?php
	$input = $_POST;
	$luas = luas_persegi($input['panjang'], $input['lebar']);
	$kel= keliling_persegi($input['panjang'], $input['lebar']);
?>

<p>
	Luas Persegi <?php echo $luas?>
	dan Keliling Persegi <?php echo $kel?>
</p>

<form action='home.php' method="post">
	Panjang<br />
	<input type="text" name="panjang"><br />
	Lebar<br />
	<input type="text" name="lebar"><br />
	<input type="submit" value="Hitung">
</form>