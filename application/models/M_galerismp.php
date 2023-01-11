<?php 
class M_galerismp extends CI_Model{

	function get_all_galerismp(){
		$hsl=$this->db->query("SELECT * FROM tbl_galerismp");
		return $hsl;
	}

	function simpan_galerismp($ket,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_galerismp (ket,foto) VALUES ('$ket','$photo')");
		return $hsl;
	}
	function simpan_galerismp_tanpa_img($ket){
		$hsl=$this->db->query("INSERT INTO tbl_galerismp (ket) VALUES ('$ket')");
		return $hsl;
	}

	function update_galerismp($kode,$ket,$photo){
		$hsl=$this->db->query("UPDATE tbl_galerismp SET ket='$ket',foto='$photo' WHERE id='$kode'");
		return $hsl;
	}
	function update_galerismp_tanpa_img($kode,$ket){
		$hsl=$this->db->query("UPDATE tbl_galerismp SET ket='$ket', WHERE id='$kode'");
		return $hsl;
	}
	function hapus_galerismp($kode){
		$hsl=$this->db->query("DELETE FROM tbl_galerismp WHERE id='$kode'");
		return $hsl;
	}

	//front-end
	function galerismp(){
		$hsl=$this->db->query("SELECT * FROM tbl_galerismp");
		return $hsl;
	}
	function galerismp_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_galerismp limit $offset,$limit");
		return $hsl;
	}

}