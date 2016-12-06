<?php
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

if(!isset($_POST['kirim'])){
	exit('Access Forbiden');
}

print_r($_POST);

?>