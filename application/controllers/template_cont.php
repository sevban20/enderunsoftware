<?php

class template_cont extends CI_Controller{
	
	public function index(){
		
		$veri["footer"] = $this->load->view("footer", "", TRUE);
		$veri["header"] = $this->load->view("header", "", TRUE);
		$this->load->view("anasayfa", $veri);
		
	}
	
}

?>