<?php

require_once('DBClass.php');
require_once('m_siswa.php');
$id=$_GET['id'];

if (!is_numeric($id)){
	Exit('Akses Ditolak');
}

$siswa = new Siswa();
$data = $siswa->readSiswa($id);

if(empty($data)){
	Echo "Data berhasil dihapus";
}

?>
<br />
<a href="siswa.php">Kembali</a>
