<?php
class Ekstrasmp extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_ekstrasmp');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
        
		$this->data['data']=$this->m_ekstrasmp->get_all_ekstrasmp();
        
        $this->data['breadcrumb']  = 'Data Ekstra SMP';
            
        $this->data['main_view']   = 'admin/v_ekstrasmp';
            
        $this->load->view('theme/admintemplate',$this->data);
        
		
        
	}
	
	function simpan_ekstrasmp(){
				$config['upload_path'] = './style/img/ekstrasmp/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./style/img/ekstrasmp/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './style/img/ekstrasmp/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $photo=$gbr['file_name'];
							$ket=strip_tags($this->input->post('xket'));

							$this->m_ekstrasmp->simpan_ekstrasmp($ket,$photo);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/ekstrasmp');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/ekstrasmp');
	                }
	                 
	            }else{
	            	$ket=strip_tags($this->input->post('xket'));

					$this->m_ekstrasmp->simpan_ekstrasmp_tanpa_img($ket);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/ekstrasmp');
				}
	}
	
	function update_ekstrasmp(){
				
	            $config['upload_path'] = './style/img/ekstrasmp'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./style/img/ekstrasmp/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './style/img/ekstrasmp/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
	                        $photo=$this->input->post('gambar');
							$path='./style/img/ekstrasmp/'.$photo;
							unlink($path);

	                        $photo=$gbr['file_name'];
	                        $kode=$this->input->post('kode');
							$ket=strip_tags($this->input->post('xket'));
							
							$this->m_ekstrasmp->update_ekstrasmp($kode,$ket,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/ekstrasmp');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/ekstrasmp');
	                }
	                
	            }else{
							$kode=$this->input->post('kode');
							$ket=strip_tags($this->input->post('xket'));
							$this->m_ekstrasmp->update_ekstrasmp_tanpa_img($kode,$ket);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/ekstrasmp');
	            } 

	}

	function hapus_ekstrasmp(){
		$kode=$this->input->post('kode');
		$photo=$this->input->post('gambar');
		$path='./style/img/ekstrasmp/'.$photo;
		unlink($path);
		$this->m_ekstrasmp->hapus_ekstrasmp($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/ekstrasmp');
	}

}