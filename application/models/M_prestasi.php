<?php 
class M_prestasi extends CI_Model{

	function get_all_prestasi(){
		$hsl=$this->db->query("SELECT * FROM tbl_prestasi");
		return $hsl;
	}

	function simpan_prestasi($ket,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_prestasi (ket,foto) VALUES ('$ket','$photo')");
		return $hsl;
	}
	function simpan_prestasi_tanpa_img($ket){
		$hsl=$this->db->query("INSERT INTO tbl_prestasi (ket) VALUES ('$ket')");
		return $hsl;
	}

	function update_prestasi($kode,$ket,$photo){
		$hsl=$this->db->query("UPDATE tbl_prestasi SET ket='$ket',foto='$photo' WHERE id='$kode'");
		return $hsl;
	}
	function update_prestasi_tanpa_img($kode,$ket){
		$hsl=$this->db->query("UPDATE tbl_prestasi SET ket='$ket', WHERE id='$kode'");
		return $hsl;
	}
	function hapus_prestasi($kode){
		$hsl=$this->db->query("DELETE FROM tbl_prestasi WHERE id='$kode'");
		return $hsl;
	}

	//front-end
	function prestasi(){
		$hsl=$this->db->query("SELECT * FROM tbl_prestasi");
		return $hsl;
	}
	function prestasi_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_prestasi limit $offset,$limit");
		return $hsl;
	}

}