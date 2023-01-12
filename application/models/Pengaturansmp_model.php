<?php
class Pengaturansmp_model extends CI_Model{

	function get_all_pengaturansmp(){
		$hsl=$this->db->query("select * from tbl_pengaturansmp");
		return $hsl;
	}
	function simpan_pengaturansmp($visi,$misi,$sejarah){
		$hsl=$this->db->query("INSERT INTO tbl_pengaturansmp(visi,misi,sejarah) VALUES ('$visi','$misi','$sejarah')");
		return $hsl;
	}
	function update_pengaturansmp($kode,$visi,$misi,$sejarah){
		$hsl=$this->db->query("UPDATE tbl_pengaturansmp SET visi='$visi',misi='$misi',sejarah='$sejarah' where id_pengaturansmp='$kode'");
		return $hsl;
	}
	function hapus_pengaturansmp($kode){
		$hsl=$this->db->query("DELETE FROM tbl_pengaturansmp WHERE id_pengaturansmp='$kode'");
		return $hsl;
	}

	//front-end

    function get_pengaturansmp_home(){
		$hsl=$this->db->query("SELECT * FROM tbl_pengaturansmp ORDER BY id_pengaturansmp DESC limit 3");
		return $hsl;
	}
	
	function pengaturansmp(){
		$hsl=$this->db->query("SELECT * FROM tbl_pengaturansmp");
		return $hsl;
	}
	function pengaturansmp_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_pengaturansmp limit $offset,$limit");
		return $hsl;
	}


} 