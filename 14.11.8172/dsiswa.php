<?php 

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

$id=$_GET['id'];


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


 <table border="1">
 	<tr>
 		<td>ID Siswa</td>
 		<td><?php echo $dt['id_siswa'] ?></td>
 	</tr>
 	<tr>
 		<td>ID Siswa</td>
 		<td><?php echo $dt['full_name'] ?></td>
 	</tr>
 	<tr>
 		<td>ID Siswa</td>
 		<td><?php echo $dt['nationality'] ?></td>
 	</tr>
 </table>
 <br />
 <a href="siswa.php">Kembali</a>