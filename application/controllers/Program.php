<?php
class Program extends CI_Controller
{
	function index()
	{
		$this->data['main_view']   = 'depan/v_program';
		$this->load->view('theme/template', $this->data);
	}
}
