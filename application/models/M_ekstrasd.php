<?php 
class M_ekstrasd extends CI_Model{

	function get_all_ekstrasd(){
		$hsl=$this->db->query("SELECT * FROM tbl_ekstrasd");
		return $hsl;
	}

	function simpan_ekstrasd($ket,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_ekstrasd (ket,foto) VALUES ('$ket','$photo')");
		return $hsl;
	}
	function simpan_ekstrasd_tanpa_img($ket){
		$hsl=$this->db->query("INSERT INTO tbl_ekstrasd (ket) VALUES ('$ket')");
		return $hsl;
	}

	function update_ekstrasd($kode,$ket,$photo){
		$hsl=$this->db->query("UPDATE tbl_ekstrasd SET ket='$ket',foto='$photo' WHERE id='$kode'");
		return $hsl;
	}
	function update_ekstrasd_tanpa_img($kode,$ket){
		$hsl=$this->db->query("UPDATE tbl_ekstrasd SET ket='$ket', WHERE id='$kode'");
		return $hsl;
	}
	function hapus_ekstrasd($kode){
		$hsl=$this->db->query("DELETE FROM tbl_ekstrasd WHERE id='$kode'");
		return $hsl;
	}

	//front-end
	function get_ekstrasd_home(){
		$hsl=$this->db->query("SELECT * FROM tbl_ekstrasd ORDER BY id DESC limit 4");
		return $hsl;
	}

	function ekstrasd(){
		$hsl=$this->db->query("SELECT * FROM tbl_ekstrasd");
		return $hsl;
	}
	function ekstrasd_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_ekstrasd limit $offset,$limit");
		return $hsl;
	}

}