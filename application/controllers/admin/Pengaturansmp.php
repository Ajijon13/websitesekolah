<?php
class Pengaturansmp extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('pengaturansmp_model');
		$this->load->library('upload');
	}


	function index(){
        
		$this->data['data']=$this->pengaturansmp_model->get_all_pengaturansmp();      
		
        
        $this->data['breadcrumb']  = 'Data Profil SMP';
            
        $this->data['main_view']   = 'admin/v_pengaturansmp';
            
        $this->load->view('theme/admintemplate',$this->data);
	}



	function update_pengaturansmp(){
		$kode=strip_tags($this->input->post('kode'));
		$visi=$this->input->post('xvisi');
		$misi=$this->input->post('xmisi');
        $sejarah=$this->input->post('xsejarah');
		$this->pengaturansmp_model->update_pengaturansmp($kode,$visi,$misi,$sejarah);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/pengaturansmp');
	}
	

}