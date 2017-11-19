<?php

class blog_cont extends CI_Controller{
	
	function index(){
		
		$this->load->view("blog_view");
		
	}
	
	function olustur(){
		
		if ($_POST){
			
			$baslik = $this->input->post("baslik");
			$icerik = $this->input->post("icerik");
			
			if (!$baslik || !$icerik){
				
				$veri["baslik"] = "Hata Oluştu!";
				$veri["icerik"] = "Lütfen tüm alanları doldurunuz...";
				$this->load->view("goruntu", $veri);
				
			}else{
				
				$degerler = array($baslik, $icerik);
			
				$this->load->model("blog_model");
				$kayit = $this->blog_model->olustur($degerler);
				
				if($kayit){
					$veri["baslik"] = "Başarılı!";
					$veri["icerik"] = "İçeriğin başarılı bir şekilde yüklendi..";
					$this->load->view("goruntu", $veri);
				}else{
					echo "Kayıtta bi sıkıntı çıktı be kanka.. Daha sonra geliver.";
				}
				
			}
			
		}else{
			echo "olmadı be kanka";
		}
		
	}
	
	function guncelle(){
		
		$this->load->model("blog_model");
		$this->blog_model->guncelle();
		
	}
	
	function sil(){
		
		$this->load->model("blog_model");
		$this->blog_model->sil();
		
	}
	
}

?>