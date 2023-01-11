<?php
class Galerismp extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_galerismp');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
        
		$this->data['data']=$this->m_galerismp->get_all_galerismp();
        
        $this->data['breadcrumb']  = 'Data Galeri SMP';
            
        $this->data['main_view']   = 'admin/v_galerismp';
            
        $this->load->view('theme/admintemplate',$this->data);
        
		
        
	}
	
	function simpan_galerismp(){
				$config['upload_path'] = './style/img/galerismp/'; //path folder
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
	                        $config['source_image']='./style/img/galerismp/'.$gbr['file_name'];

	                        $config['new_image']= './style/img/galerismp/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $photo=$gbr['file_name'];
							$ket=strip_tags($this->input->post('xket'));

							$this->m_galerismp->simpan_galerismp($ket,$photo);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/galerismp');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/galerismp');
	                }
	                 
	            }else{
	            	$ket=strip_tags($this->input->post('xket'));

					$this->m_galerismp->simpan_galerismp_tanpa_img($ket);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/galerismp');
				}
	}
	
	function update_galerismp(){
				
	            $config['upload_path'] = './style/img/galerismp'; //path folder
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
	                        $config['source_image']='./style/img/galerismp/'.$gbr['file_name'];
	                        
	                        $config['new_image']= './style/img/galerismp/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
	                        $photo=$this->input->post('gambar');
							$path='./style/img/galerismp/'.$photo;
							unlink($path);

	                        $photo=$gbr['file_name'];
	                        $kode=$this->input->post('kode');
							$ket=strip_tags($this->input->post('xket'));
							
							$this->m_galerismp->update_galerismp($kode,$ket,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/galerismp');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/galerismp');
	                }
	                
	            }else{
							$kode=$this->input->post('kode');
							$ket=strip_tags($this->input->post('xket'));
							$this->m_galerismp->update_galerismp_tanpa_img($kode,$ket);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/galerismp');
	            } 

	}

	function hapus_galerismp(){
		$kode=$this->input->post('kode');
		$photo=$this->input->post('gambar');
		$path='./style/img/galerismp/'.$photo;
		unlink($path);
		$this->m_galerismp->hapus_galerismp($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/galerismp');
	}

}