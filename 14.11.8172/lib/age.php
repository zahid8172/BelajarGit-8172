<?php 

require_once('DBClass.php');
require_once('m_siswa.php');

$siswa = new Siswa();
$data = $siswa->readAllSiswa();

/*print '<pre>';
print_r($data);
print '</pre>';*/
 ?>

 <table border="1">
 	<tr>
 		<th>ID SISWA</th>
 		<th>FULL NAME</th>
 		<th>Date Of Birth</th>
 		<th>Age</th>
 		<th>NATIONALITY</th>
 	</tr>
 	<?php foreach($data as $a):?>
 	<tr>
 		<td><?php echo $a['id_siswa'] ?></td>
 		<td><?php echo $a['full_name'] ?></td>
 		<td><?php echo $a['date_ob'] ?></td>

 		<td> 
 				
		<?php
		$tgl_lahir=substr($a['date_ob'], 8,2);
		$bln_lahir=substr($a['date_ob'], 5,2);
		$thn_lahir=substr($a['date_ob'], 0,4);
		
		$tgl_ini = date('d');
		$bln_ini = date('m');
		$thn_ini = date('Y');
		
		$hari_lahir=gregoriantojd($bln_lahir,$tgl_lahir,$thn_lahir);
		
		$hari_ini=gregoriantojd($bln_ini, $tgl_ini, $thn_ini);
		
		$umur = $hari_ini - $hari_lahir;
		
		$tahun = $umur/365;
		$sisa = $umur%365;
		$bulan = $sisa/30;
		$hari = $sisa%30;
		
		echo floor($tahun)." tahun, " .floor($bulan). " bulan, $hari hari ";
		
		?>

 			 ?>
 		</td>
 		<td><?php echo $a['nationality'] ?></td>
 		<td><a href="dsiswa.php?id=<?php echo $a['id_siswa'] ?>">Detail</a></td>
 	</tr>
 <?php endforeach ?>
 </table>