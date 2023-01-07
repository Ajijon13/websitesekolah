<?php
class Banner extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		};
		$this->load->model('banner_model');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index()
	{

		$this->data['data'] = $this->banner_model->get_all_banner();

		$this->data['breadcrumb']  = 'Data Banner';

		$this->data['main_view']   = 'admin/v_banner';

		$this->load->view('theme/admintemplate', $this->data);
	}

	function simpan_banner()
	{
		$config['upload_path'] = './style/img/banner/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './style/img/banner/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['new_image'] = './style/img/banner/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$photo = $gbr['file_name'];
				$title = strip_tags($this->input->post('xtitle'));
				$text = strip_tags($this->input->post('xtext'));

				$this->banner_model->simpan_banner($title, $text, $photo);
				echo $this->session->set_flashdata('msg', 'success');
				redirect('admin/banner');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/banner');
			}
		} else {
			$title = strip_tags($this->input->post('xtitle'));
			$text = strip_tags($this->input->post('xtext'));

			$this->banner_model->simpan_banner_tanpa_img($text, $title);
			echo $this->session->set_flashdata('msg', 'success');
			redirect('admin/banner');
		}
	}

	function update_banner()
	{

		$config['upload_path'] = './style/img/banner'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './style/img/banner/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '100%';
				$config['width'] = 300;
				$config['height'] = 300;
				$config['new_image'] = './style/img/banner/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$photo = $this->input->post('gambar');
				$path = './style/img/banner/' . $photo;
				unlink($path);

				$photo = $gbr['file_name'];
				$kode = $this->input->post('kode');
				$title = strip_tags($this->input->post('xtitle'));
				$text = strip_tags($this->input->post('xtext'));

				$this->banner_model->update_banner($kode, $title, $text, $photo);
				echo $this->session->set_flashdata('msg', 'info');
				redirect('admin/banner');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/banner');
			}
		} else {
			$kode = $this->input->post('kode');
			$title = strip_tags($this->input->post('xtitle'));
			$text = strip_tags($this->input->post('xtext'));
			$this->banner_model->update_banner_tanpa_img($kode, $title, $text);
			echo $this->session->set_flashdata('msg', 'info');
			redirect('admin/banner');
		}
	}

	function hapus_banner()
	{
		$kode = $this->input->post('kode');
		$photo = $this->input->post('gambar');
		$path = './style/img/banner/' . $photo;
		unlink($path);
		$this->banner_model->hapus_banner($kode);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/banner');
	}
}
