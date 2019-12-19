<?php
include('koneksi.php');
$tampil_cuti =mysql_query("select * from form_cuti");

?>
<br>
<br>
<br>
    <div class="container">
	<a href = "input_cuti.php"/>Tambah Cuti</a>
<form method ="post" action=""><!--Form untuk kirim data ke DB-->
<table border="1"><!--name harus sama dengan database-->
	<tr>
		<td>NIK</td>
		<td>Nama Karyawan</td>
		<td>Jabatan Karyawan</td>
		<td>Hak Cuti Karyawan</td>
	</tr>
<?php
while($data = mysql_fetch_array($tampil_cuti)) { ?>
		<tr>
			<td><?php echo $data['NIK'];?></td>
			<td><?php echo $data['Nama'];?></td>
			<td><?php echo $data['Jabatan'];?></td>
			<td><?php echo $data['Hak_Cuti'];?></td>
	
			
		</tr>
		
<?php } ?>
</table>
</form>
</div>
<?php

