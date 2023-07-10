<?php
class M_gaji extends CI_Model{
//method yang dibuat di controller untuk menampilkan data
	public function tampil_data()
	{
//pemanggilan data yang berada di tabel
		return $this->db->get('data_pegawai');
	}
//method yang dibuat di controller untuk menampilkan detail data
	public function detail_data($id_pegawai = null){
		$query = $this->db->get_where('data_pegawai', array('id_pegawai' => $id_pegawai))->row();
		return $query;
	}

}