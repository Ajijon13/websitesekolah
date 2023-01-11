<?php 
class M_fasilitassmp extends CI_Model{

	function get_all_fasilitassmp(){
		$hsl=$this->db->query("SELECT * FROM tbl_fasilitassmp");
		return $hsl;
	}

	function simpan_fasilitassmp($ket,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_fasilitassmp (ket,foto) VALUES ('$ket','$photo')");
		return $hsl;
	}
	function simpan_fasilitassmp_tanpa_img($ket){
		$hsl=$this->db->query("INSERT INTO tbl_fasilitassmp (ket) VALUES ('$ket')");
		return $hsl;
	}

	function update_fasilitassmp($kode,$ket,$photo){
		$hsl=$this->db->query("UPDATE tbl_fasilitassmp SET ket='$ket',foto='$photo' WHERE id='$kode'");
		return $hsl;
	}
	function update_fasilitassmp_tanpa_img($kode,$ket){
		$hsl=$this->db->query("UPDATE tbl_fasilitassmp SET ket='$ket', WHERE id='$kode'");
		return $hsl;
	}
	function hapus_fasilitassmp($kode){
		$hsl=$this->db->query("DELETE FROM tbl_fasilitassmp WHERE id='$kode'");
		return $hsl;
	}

	//front-end
	function fasilitassmp(){
		$hsl=$this->db->query("SELECT * FROM tbl_fasilitassmp");
		return $hsl;
	}
	function fasilitassmp_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_fasilitassmp limit $offset,$limit");
		return $hsl;
	}

}