<?php 
class M_prestasisd extends CI_Model{

	function get_all_prestasisd(){
		$hsl=$this->db->query("SELECT * FROM tbl_prestasisd");
		return $hsl;
	}

	function simpan_prestasisd($ket,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_prestasisd (ket,foto) VALUES ('$ket','$photo')");
		return $hsl;
	}
	function simpan_prestasisd_tanpa_img($ket){
		$hsl=$this->db->query("INSERT INTO tbl_prestasisd (ket) VALUES ('$ket')");
		return $hsl;
	}

	function update_prestasisd($kode,$ket,$photo){
		$hsl=$this->db->query("UPDATE tbl_prestasisd SET ket='$ket',foto='$photo' WHERE id='$kode'");
		return $hsl;
	}
	function update_prestasisd_tanpa_img($kode,$ket){
		$hsl=$this->db->query("UPDATE tbl_prestasisd SET ket='$ket', WHERE id='$kode'");
		return $hsl;
	}
	function hapus_prestasisd($kode){
		$hsl=$this->db->query("DELETE FROM tbl_prestasisd WHERE id='$kode'");
		return $hsl;
	}

	//front-end

	function get_prestasisd_home(){
		$hsl=$this->db->query("SELECT * FROM tbl_prestasisd ORDER BY id DESC limit 4");
		return $hsl;
	}
	function prestasisd(){
		$hsl=$this->db->query("SELECT * FROM tbl_prestasisd");
		return $hsl;
	}
	function prestasisd_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_prestasisd limit $offset,$limit");
		return $hsl;
	}

}