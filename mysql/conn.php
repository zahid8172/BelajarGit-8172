<?php 

$conn = mysql_pconnect('localhost','root','') 
or die('tidak dapat terkoneksi ke server');

echo 'berhasil menghubungkan ke database mysql';

mysql_select_db('pwl_8172') or die('database tidak ditemukan');

echo '<br />';
echo "behasil menggunakan databse";

$query = "Select id_siswa, full_name, nationality from siswa s join nationality n on s.id_nationality = n.id_nationality";

$rows = mysql_query($query) or die ('Error Query: '.mysql_error());

$data = array();

echo '
<table border="1">
	<tr>
		<td>No Siswa</td>
		<td>Nama Siswa</td>
		<td>Asal Siswa</td>
	</tr>';
while($row = mysql_fetch_array($rows, MYSQL_ASSOC))
{
echo '
	<tr>
		<td>'.$row['id_siswa'].'</td>
		<td>'.$row['full_name'].'</td>
		<td>'.$row['nationality'].'</td>
	</tr>';
}

echo '</table>';

 ?>