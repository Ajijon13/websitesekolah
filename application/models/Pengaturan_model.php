<?php
class Pengaturan_model extends CI_Model{

	function get_all_pengaturan(){
		$hsl=$this->db->query("SELECT * FROM tbl_pengaturan");
		return $hsl;
	}

	function simpan_pengaturan($sambutan,$visi,$misi,$sejarah,$foto){
		$hsl=$this->db->query("INSERT INTO tbl_pengaturan (sambutan,visi,misi,sejarah,foto) VALUES ('$sambutan','$visi','$misi','$sejarah','$foto')");
		return $hsl;
	}
	function simpan_pengaturan_tanpa_img($sambutan,$visi,$misi,$sejarah){
		$hsl=$this->db->query("INSERT INTO tbl_pengaturan (sambutan,visi,misi,sejarah) VALUES ('$sambutan,$visi,$misi,$sejarah')");
		return $hsl;
	}

	function update_pengaturan($kode,$sambutan,$visi,$misi,$sejarah,$foto){
		$hsl=$this->db->query("UPDATE tbl_pengaturan SET sambutan='$sambutan', visi='$visi', misi='$misi', sejarah='$sejarah', foto='$foto' WHERE id='$kode'");
		return $hsl;
	}
	function update_pengaturan_tanpa_img($kode,$sambutan,$visi,$misi,$sejarah){
		$hsl=$this->db->query("UPDATE tbl_pengaturan SET sambutan='$sambutan', visi='$visi', misi='$misi', sejarah='$sejarah' WHERE id='$kode'");
		return $hsl;
	}
	function hapus_pengaturan($kode){
		$hsl=$this->db->query("DELETE FROM tbl_pengaturan WHERE id='$kode'");
		return $hsl;
	}

	//front-end


	
	function get_pengaturan_home(){
		$hsl=$this->db->query("SELECT * FROM tbl_pengaturan ORDER BY id DESC limit 3");
		return $hsl;
	}

	function pengaturan(){
		$hsl=$this->db->query("SELECT * FROM tbl_pengaturan");
		return $hsl;
	}
	function pengaturan_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_pengaturan limit $offset,$limit");
		return $hsl;
	}

}