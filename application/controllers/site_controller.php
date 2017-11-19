<?php

class site_controller extends CI_Controller{
	
	public function index(){
		
		$this->load->view("site_anasayfa");
		
	}
	
	public function konu_goster(){
		
		$veri["title"] = $_GET["kategori"];
		
		$this->load->model("site_model");
		$veri["icerikler"] = $this->site_model->konu_goster();
		$this->load->view("site_konular", $veri);
		
	}
	
	public function icerik_goster(){
		
		$veri["title"] = $_GET["baslik"];
		
		$this->load->model("site_model");
		$veri["icerikler"] = $this->site_model->icerik_goster();
		$veri["yorumlar"] = $this->site_model->yorum_goster();
		$this->load->view("site_icerik", $veri);
		
	}
	
}

?>