<?php
class Banner_model extends CI_Model{

	function get_all_banner(){
		$hsl=$this->db->query("SELECT * FROM tbl_banners");
		return $hsl;
	}

	function simpan_banner($title,$text,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_banners (title,text,photo) VALUES ('$title','$text','$photo')");
		return $hsl;
	}
	function simpan_banner_tanpa_img($title,$text){
		$hsl=$this->db->query("INSERT INTO tbl_banners (title,text) VALUES ('$title,$text')");
		return $hsl;
	}

	function update_banner($kode,$title,$text,$photo){
		$hsl=$this->db->query("UPDATE tbl_banners SET title='$title', text='$text', photo='$photo' WHERE id='$kode'");
		return $hsl;
	}
	function update_banner_tanpa_img($kode,$title,$text){
		$hsl=$this->db->query("UPDATE tbl_banners SET title='$title', text='$text' WHERE id='$kode'");
		return $hsl;
	}
	function hapus_banner($kode){
		$hsl=$this->db->query("DELETE FROM tbl_banners WHERE id='$kode'");
		return $hsl;
	}

	//front-end

	function get_banner_home(){
		$hsl=$this->db->query("SELECT * FROM tbl_banners ORDER BY id DESC limit 3")->result_object();
		return $hsl;
	}

	function banner(){
		$hsl=$this->db->query("SELECT * FROM tbl_banners");
		return $hsl;
	}
	function banner_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_banners limit $offset,$limit");
		return $hsl;
	}

}