<?php
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
require_once('lib/m_nationality.php');


$id = $_GET['id'];

if(!is_numeric($id)){
	exit('Access Forbiden');
}

$siswa = new Siswa();
$data = $siswa->readSiswa($id);

if(empty($data)){
	exit('Siswa is not found');
}

$dt = $data[0];

?>

<h1>Tambah Data Siswa</h1>
<form action="editsiswa.php" method="POST"> 
	NIS: <br />
	<input type="text" value="<?php echo $dt['id_siswa']?>" name="in_nis" readonly="true"> <br />
	Nama lengkap: <br />
	<input type="text" name="in_name" value="<?php echo $dt['full_name']?>"> <br />
	Email: <br />
	<input type="text" name="in_email" value="<?php echo $dt['email']?>"> <br />
	Kewarganegaraan: <br />
	<select name="in_nation">
		<option value="">--Pilih Negara--</option>
		<?php foreach($data_nation as $n): ?>
		<?php $s = ($dt['id_nationality'] == $n['id_nationality'])?"selected":""?>
		<option value="<?php echo $n['id_nationality']?>"> <?php echo $s?>
			<?php echo $n['nationality']?>
		</option>
		<?php endforeach?>
	</select> <br /> <br />
	<input type="submit" name="kirim" value="Simpan">
</form>
