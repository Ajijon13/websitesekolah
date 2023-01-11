<?php 
class M_prestasismp extends CI_Model{

	function get_all_prestasismp(){
		$hsl=$this->db->query("SELECT * FROM tbl_prestasismp");
		return $hsl;
	}

	function simpan_prestasismp($ket,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_prestasismp (ket,foto) VALUES ('$ket','$photo')");
		return $hsl;
	}
	function simpan_prestasismp_tanpa_img($ket){
		$hsl=$this->db->query("INSERT INTO tbl_prestasismp (ket) VALUES ('$ket')");
		return $hsl;
	}

	function update_prestasismp($kode,$ket,$photo){
		$hsl=$this->db->query("UPDATE tbl_prestasismp SET ket='$ket',foto='$photo' WHERE id='$kode'");
		return $hsl;
	}
	function update_prestasismp_tanpa_img($kode,$ket){
		$hsl=$this->db->query("UPDATE tbl_prestasismp SET ket='$ket', WHERE id='$kode'");
		return $hsl;
	}
	function hapus_prestasismp($kode){
		$hsl=$this->db->query("DELETE FROM tbl_prestasismp WHERE id='$kode'");
		return $hsl;
	}

	//front-end

	function get_prestasismp_home(){
		$hsl=$this->db->query("SELECT * FROM tbl_prestasismp ORDER BY id DESC limit 4");
		return $hsl;
	}
	function prestasismp(){
		$hsl=$this->db->query("SELECT * FROM tbl_prestasismp");
		return $hsl;
	}
	function prestasismp_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_prestasismp limit $offset,$limit");
		return $hsl;
	}

}