<?php
class Home extends CI_Controller{
    
	function __construct(){
        
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_galeri');
		$this->load->model('m_pengumuman');
		$this->load->model('m_agenda');
		$this->load->model('m_pengunjung');
		$this->load->model('banner_model');
		$this->load->model('m_prestasisd');
		$this->load->model('m_prestasismp');
		$this->load->model('m_ekstrasd');
		$this->load->model('m_ekstrasmp');
		$this->m_pengunjung->count_visitor();
        
	}
    
	function index(){
        
            $this->data['main_view']   = 'depan/v_home';
        
			$this->data['berita']=$this->m_tulisan->get_berita_home();
			$this->data['pengumuman']=$this->m_pengumuman->get_pengumuman_home();
			$this->data['agenda']=$this->m_agenda->get_agenda_home();
			$this->data['prestasisd']=$this->m_prestasisd->get_prestasisd_home();
			$this->data['prestasismp']=$this->m_prestasismp->get_prestasismp_home();
			$this->data['ekstrasd']=$this->m_ekstrasd->get_ekstrasd_home();
			$this->data['ekstrasmp']=$this->m_ekstrasmp->get_ekstrasmp_home();
			$this->data['tot_guru']=$this->db->get('tbl_guru')->num_rows();
			$this->data['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
			$this->data['slide_banner']=$this->banner_model->get_banner_home();
			
			
        
			$this->load->view('theme/template',$this->data);
	}

}
