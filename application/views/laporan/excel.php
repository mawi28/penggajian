<?php
header ("Cache-Control: row->-cache, must-revalidate");
header ("Pragma: row->-cache");
header("Content-type: application/x-msexcel");
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=Data Pegawai.xls");
?>

<style type="text/css">
	table,th,td{
		border-collopse:  collapse;
		padding: 15px;
		margin: 10px;
		color: #000;
	}
</style>
<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>NIK</th>
			<th>Nama Pegawai</th>
			<th>Jenis Kelamin</th>
			<th>Jabatan</th>
			<th>Tanggal Masuk</th>
			<th>Status</th>
			<th>Hak Akses</th>
		</tr>
	</thead>
	<?php
	$no = 1;
	if ($data->num_rows() > 0) {
		foreach ($data->result() as $row) {
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row->nik; ?></td>
				<td><?php echo $row->nama_pegawai; ?></td>
				<td><?php echo $row->jenis_kelamin; ?></td>
				<td><?php echo $row->jabatan; ?></td>
				<td><?php echo $row->tanggal_masuk; ?></td>
				<td><?php echo $row->status; ?></td>
				<td><?php echo $row->hak_akses; ?></td>
			</tr>
			<?php
		}
	}
	?>
</table>
