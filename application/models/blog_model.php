<?php

class blog_model extends CI_Model{
	
	function olustur($degerler){
		
		$eklenecek = array(
			"baslik" => $degerler[0],
			"icerik" => $degerler[1],
			"tarih" => date("d.m.Y")
		);
		
		$ekle = $this->db->insert("icerikler" ,$eklenecek);
		
		if($ekle){
			return true;
		}else{
			return false;
		}
		
	}
	
	function guncelle(){
		
		$guncel = array(
			"baslik" => "Güncel Başlık",
			"icerik" => "Güncel İçerik"
		);
		$this->db->update("icerikler", $guncel, array("id"=>2));
		
	}
	
	function sil(){
		
		$this->db->delete("icerikler", array("id"=>6));
		
	}
}

?>