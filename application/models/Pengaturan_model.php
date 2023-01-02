<?php
class Pengaturan_model extends CI_Model{

	function get_all_pengaturan(){
		$hsl=$this->db->query("select * from tbl_pengaturan");
		return $hsl;
	}
	function simpan_pengaturan($visi,$misi,$sejarah){
		$hsl=$this->db->query("INSERT INTO tbl_pengaturan(visi,misi,sejarah) VALUES ('$visi','$misi','$sejarah')");
		return $hsl;
	}
	function update_pengaturan($kode,$visi,$misi,$sejarah){
		$hsl=$this->db->query("UPDATE tbl_pengaturan SET visi='$visi',misi='$misi',sejarah='$sejarah' where id_pengaturan='$kode'");
		return $hsl;
	}
	function hapus_pengaturan($kode){
		$hsl=$this->db->query("DELETE FROM tbl_pengaturan WHERE id_pengaturan='$kode'");
		return $hsl;
	}

	//front-end

	function pengaturan(){
		$hsl=$this->db->query("SELECT * FROM tbl_pengaturan");
		return $hsl;
	}
	function pengaturan_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_pengaturan limit $offset,$limit");
		return $hsl;
	}


} 