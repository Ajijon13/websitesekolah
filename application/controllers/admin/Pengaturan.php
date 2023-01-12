<?php
class Pengaturan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		};
		$this->load->model('pengaturan_model');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index()
	{

		$this->data['data'] = $this->pengaturan_model->get_all_pengaturan();

		$this->data['breadcrumb']  = 'Data pengaturan';

		$this->data['main_view']   = 'admin/v_pengaturan';

		$this->load->view('theme/admintemplate', $this->data);
	}

	function simpan_pengaturan()
	{
		$config['upload_path'] = './style/img/pengaturan/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './style/img/pengaturan/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['new_image'] = './style/img/pengaturan/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$foto = $gbr['file_name'];
				$sambutan = strip_tags($this->input->post('xsambutan'));
				$visi = strip_tags($this->input->post('xvisi'));
				$misi = strip_tags($this->input->post('xmisi'));
				$sejarah = strip_tags($this->input->post('xsejarah'));

				$this->pengaturan_model->simpan_pengaturan($sambutan, $visi, $misi, $sejarah,  $foto);
				echo $this->session->set_flashdata('msg', 'success');
				redirect('admin/pengaturan');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/pengaturan');
			}
		} else {
			$sambutan = strip_tags($this->input->post('xsambutan'));
			$visi = strip_tags($this->input->post('xvisi'));
			$misi = strip_tags($this->input->post('xmisi'));
			$sejarah = strip_tags($this->input->post('xsejarah'));

			$this->pengaturan_model->simpan_pengaturan_tanpa_img($sambutan, $visi, $misi, $sejarah);
			echo $this->session->set_flashdata('msg', 'success');
			redirect('admin/pengaturan');
		}
	}

	function update_pengaturan()
	{

		$config['upload_path'] = './style/img/pengaturan'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './style/img/pengaturan/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['new_image'] = './style/img/pengaturan/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$foto = $this->input->post('gambar');
				$path = './style/img/pengaturan/' . $foto;
				unlink($path);

				$foto = $gbr['file_name'];
				$kode = $this->input->post('kode');
				$sambutan = strip_tags($this->input->post('xsambutan'));
				$visi = strip_tags($this->input->post('xvisi'));
				$misi = strip_tags($this->input->post('xmisi'));
				$sejarah = strip_tags($this->input->post('xsejarah'));

				$this->pengaturan_model->update_pengaturan($kode, $sambutan, $visi, $misi, $sejarah, $foto);
				echo $this->session->set_flashdata('msg', 'info');
				redirect('admin/pengaturan');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/pengaturan');
			}
		} else {
			$kode = $this->input->post('kode');
			$sambutan = strip_tags($this->input->post('xsambutan'));
			$visi = strip_tags($this->input->post('xvisi'));
			$misi = strip_tags($this->input->post('xmisi'));
			$sejarah = strip_tags($this->input->post('xsejarah'));
			$this->pengaturan_model->update_pengaturan_tanpa_img($kode, $sambutan, $visi, $misi, $sejarah);
			echo $this->session->set_flashdata('msg', 'info');
			redirect('admin/pengaturan');
		}
	}

	function hapus_pengaturan()
	{
		$kode = $this->input->post('kode');
		$foto = $this->input->post('gambar');
		$path = './style/img/pengaturan/' . $foto;
		unlink($path);
		$this->pengaturan_model->hapus_pengaturan($kode);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/pengaturan');
	}
}
