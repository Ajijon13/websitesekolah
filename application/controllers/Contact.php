<?php
class Contact extends CI_Controller
{
	function index()
	{
		$this->data['main_view']   = 'depan/v_contact';
		$this->load->view('theme/template', $this->data);
	}
}
