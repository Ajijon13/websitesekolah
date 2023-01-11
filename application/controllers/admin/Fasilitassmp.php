<?php
class Fasilitassmp extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_fasilitassmp');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
        
		$this->data['data']=$this->m_fasilitassmp->get_all_fasilitassmp();
        
        $this->data['breadcrumb']  = 'Data fasilitassmp';
            
        $this->data['main_view']   = 'admin/v_fasilitassmp';
            
        $this->load->view('theme/admintemplate',$this->data);
        
		
        
	}
	
	function simpan_fasilitassmp(){
				$config['upload_path'] = './style/img/fasilitassmp/'; //path folder
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
	                        $config['source_image']='./style/img/fasilitassmp/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './style/img/fasilitassmp/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $photo=$gbr['file_name'];
							$ket=strip_tags($this->input->post('xket'));

							$this->m_fasilitassmp->simpan_fasilitassmp($ket,$photo);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/fasilitassmp');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/fasilitassmp');
	                }
	                 
	            }else{
	            	$ket=strip_tags($this->input->post('xket'));

					$this->m_fasilitassmp->simpan_fasilitassmp_tanpa_img($ket);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/fasilitassmp');
				}
				
	}
	
	function update_fasilitassmp(){
				
	            $config['upload_path'] = './style/img/fasilitassmp'; //path folder
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
	                        $config['source_image']='./style/img/fasilitassmp/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './style/img/fasilitassmp/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
	                        $photo=$this->input->post('gambar');
							$path='./style/img/fasilitassmp/'.$photo;
							unlink($path);

	                        $photo=$gbr['file_name'];
	                        $kode=$this->input->post('kode');
							$ket=strip_tags($this->input->post('xket'));
							
							$this->m_fasilitassmp->update_fasilitassmp($kode,$ket,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/fasilitassmp');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/fasilitassmp');
	                }
	                
	            }else{
							$kode=$this->input->post('kode');
							$ket=strip_tags($this->input->post('xket'));
							$this->m_fasilitassmp->update_fasilitassmp_tanpa_img($kode,$ket);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/fasilitassmp');
	            } 

	}

	function hapus_fasilitassmp(){
		$kode=$this->input->post('kode');
		$photo=$this->input->post('gambar');
		$path='./style/img/fasilitassmp/'.$photo;
		unlink($path);
		$this->m_fasilitassmp->hapus_fasilitassmp($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/fasilitassmp');
	}

}