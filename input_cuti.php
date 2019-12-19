<?php
include ("koneksi.php");//fungsi untuk gabung file
if(isset($_POST['simpan'])){
	$query_input_cuti="insert into form_cuti(NIK,Nama,Jabatan,Hak_Cuti)
	values('".$_POST['NIK']."',
		   '".$_POST['Nama']."',
		   '".$_POST['Jabatan']."',
		   '".$_POST['Hak_Cuti']."')"; 
	$proses_data=mysql_query($query_input_cuti);
    if($proses_data){
		echo 'Input Data Berhasil';
	} else {
		echo mysql_error ();
		
}

}
	
?>

<form method ="post" action=""><!--Form untuk kirim data ke DB-->
<table border="1"><!--name harus sama dengan database-->
	<tr>
		<td>NIK</td>
		<td><input name="NIK" type="number"></td>
	</tr>
	<tr>
		<td>Nama Karyawan</td>
		<td><input name="Nama" type="teks"></td>
	</tr>
	<tr>
		<td>Jabatan Karyawan</td>
		<td><input name="Jabatan" type="teks"></td>
	</tr>
	<tr>
		<td>Hak Cuti Karyawan</td>
		<td><input name="Hak_Cuti" type="teks"></td>
	</tr>
	<tr>
		<td><input name="simpan" type="submit"></td>
	</tr>
</table>
</form>