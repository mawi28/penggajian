<div class="content-wrapper">
	<section class="content">
		<h4><strong>DETAIL DATA PEGAWAI</strong></h4>
		<table class="table">
			<tr>
				<th>Nama Pegawai</th>
				<td><?php echo $detail->nama_pegawai ?></td>
			</tr>
			<tr>
				<th>Jenis Kelamin</th>
				<td><?php echo $detail->jenis_kelamin ?></td>
			</tr>
			<tr>
				<th>Jabatan</th>
				<td><?php echo $detail->jabatan ?></td>
			</tr>
			<tr>
				<th>Tanggal Masuk</th>
				<td><?php echo $detail->tanggal_masuk ?></td>
			</tr>
			<tr>
				<th>Status</th>
				<td><?php echo $detail->status ?></td>
			</tr>
			<tr>
				<th>Hak Akses</th>
				<td><?php echo $detail->hak_akses ?></td>
			</tr>
		</table>
		<a href="<?php echo base_url('data_pegawai/index'); ?>" class="btn btn-primary">Kembali</a>
		</section>
	</div>