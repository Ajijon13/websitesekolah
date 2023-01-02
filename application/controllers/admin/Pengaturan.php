<?php
class Pengaturan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('pengaturan_model');
		$this->load->library('upload');
	}


	function index(){
        
		$this->data['data']=$this->pengaturan_model->get_all_pengaturan();      
		
        
        $this->data['breadcrumb']  = 'Data Profil Sekolah';
            
        $this->data['main_view']   = 'admin/v_pengaturan';
            
        $this->load->view('theme/admintemplate',$this->data);
	}

	function simpan_pengaturan(){
		$visi=strip_tags($this->input->post('xvisi'));
		$misi=$this->input->post('xmisi');
        $sejarah=$this->input->post('xsejarah');
		$this->m_pengaturan->simpan_pengaturan($visi,$misi,$sejarah);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/pengaturan');
	}

	function update_pengaturan(){
		$kode=strip_tags($this->input->post('kode'));
		$visi=$this->input->post('xvisi');
		$misi=$this->input->post('xmisi');
        $sejarah=$this->input->post('xsejarah');
		$this->pengaturan_model->update_pengaturan($kode,$visi,$misi,$sejarah);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/pengaturan');
	}
	function hapus_pengaturan(){
		$kode=strip_tags($this->input->post('kode'));
		$this->pengaturan_model->hapus_pengaturan($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/pengaturan');
	}

}