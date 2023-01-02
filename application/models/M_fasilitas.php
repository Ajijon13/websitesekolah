<?php 
class M_fasilitas extends CI_Model{

	function get_all_fasilitas(){
		$hsl=$this->db->query("SELECT * FROM tbl_fasilitas");
		return $hsl;
	}

	function simpan_fasilitas($ket,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_fasilitas (ket,foto) VALUES ('$ket','$photo')");
		return $hsl;
	}
	function simpan_fasilitas_tanpa_img($ket){
		$hsl=$this->db->query("INSERT INTO tbl_fasilitas (ket) VALUES ('$ket')");
		return $hsl;
	}

	function update_fasilitas($kode,$ket,$photo){
		$hsl=$this->db->query("UPDATE tbl_fasilitas SET ket='$ket',foto='$photo' WHERE id='$kode'");
		return $hsl;
	}
	function update_fasilitas_tanpa_img($kode,$ket){
		$hsl=$this->db->query("UPDATE tbl_fasilitas SET ket='$ket', WHERE id='$kode'");
		return $hsl;
	}
	function hapus_fasilitas($kode){
		$hsl=$this->db->query("DELETE FROM tbl_fasilitas WHERE id='$kode'");
		return $hsl;
	}

	//front-end
	function fasilitas(){
		$hsl=$this->db->query("SELECT * FROM tbl_fasilitas");
		return $hsl;
	}
	function fasilitas_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_fasilitas limit $offset,$limit");
		return $hsl;
	}

}