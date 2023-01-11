<?php
class M_ekstrasmp extends CI_Model
{

	function get_all_ekstrasmp()
	{
		$hsl = $this->db->query("SELECT * FROM tbl_ekstrasmp");
		return $hsl;
	}

	function simpan_ekstrasmp($ket, $photo)
	{
		$hsl = $this->db->query("INSERT INTO tbl_ekstrasmp (ket,foto) VALUES ('$ket','$photo')");
		return $hsl;
	}
	function simpan_ekstrasmp_tanpa_img($ket)
	{
		$hsl = $this->db->query("INSERT INTO tbl_ekstrasmp (ket) VALUES ('$ket')");
		return $hsl;
	}

	function update_ekstrasmp($kode, $ket, $photo)
	{
		$hsl = $this->db->query("UPDATE tbl_ekstrasmp SET ket='$ket',foto='$photo' WHERE id='$kode'");
		return $hsl;
	}
	function update_ekstrasmp_tanpa_img($kode, $ket)
	{
		$hsl = $this->db->query("UPDATE tbl_ekstrasmp SET ket='$ket', WHERE id='$kode'");
		return $hsl;
	}
	function hapus_ekstrasmp($kode)
	{
		$hsl = $this->db->query("DELETE FROM tbl_ekstrasmp WHERE id='$kode'");
		return $hsl;
	}

	//front-end
	function get_ekstrasmp_home()
	{
		$hsl = $this->db->query("SELECT * FROM tbl_ekstrasmp ORDER BY id DESC limit 4");
		return $hsl;
	}
	function ekstrasmp()
	{
		$hsl = $this->db->query("SELECT * FROM tbl_ekstrasmp");
		return $hsl;
	}
	function ekstrasmp_perpage($offset, $limit)
	{
		$hsl = $this->db->query("SELECT * FROM tbl_ekstrasmp limit $offset,$limit");
		return $hsl;
	}
}
