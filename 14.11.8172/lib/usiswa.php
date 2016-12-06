<?php 
require_once('DBClass.php');
require_once('m_siswa.php');
require_once('m_nationality  /.php');


$id = $_GET['a'];


if (!is_numeric($id)) {
	exit('Access Forbiden');
}

$siswa = new Siswa();
$data = $siswa->readSiswa($id);

if (empty($data)) {
	exit('Siswa is not found');
}

$dt = $data[0];

 ?>

<h1>Edit Data Siswa</h1>
<form action="editsiswa" method="post" enctype="multipart/form-data">
	NIS:<br />
	<input type="text" name="in_nis" readonly="true"><br />
	Nama Lengkap:<br />
	<input type="text" name="in_name" value="<?php echo $dt['full_name'] ?>"><br />
	Email:<br />
	<input type="text" name="in_email" value="<?php echo $dt['email'] ?>"><br />
	Kewarganegaraan:<br />
	<select name="in_nation"><br />
		<option value=""> --pilih negara-- </option>
		<?php foreach($data_nation as $n): ?>
		<?php $s = ($dt['id_nationality'] == $n['id_nationality'])?"selected":""?>
		<option value="<?php echo $n['id_nationality'] ?>" <?php echo $s?>>
		<?php echo $n['nationality'] ?>
		</option>
	<?php endforeach ?>
	</select><br />
	Foto: <input type="file" name="in_foto" /><br />
	<input type="submit" name="kirim" value="Simpan">
</form>