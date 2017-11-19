<?php

class site_model extends CI_Model{
	
	public function konu_goster(){
		
		if ($_GET["kategori"] == "PHP"){
			
			$this->db->where("bolum", "php");
			$query = $this->db->get("icerikler");
			
		}
		else if ($_GET["kategori"] == "AUTOCAT"){
			
			$this->db->where("bolum", "autocat");
			$query = $this->db->get("icerikler");
			
		}else if($_GET["kategori"] == "ADOBEPHOTOSHOP"){
			
			$this->db->where("bolum", "photoshop");
			$query = $this->db->get("icerikler");
			
		}
		
		return $query->result();
		
	}
	
	public function icerik_goster(){
		
		$id = $_GET["id"];
		
		$this->db->select("*");
		$this->db->where("icerikler.id", $id);
		$query = $this->db->get("icerikler");
		
		return $query->result();
		
	}
	
	public function yorum_goster(){
		
		$id = $_GET["id"];
		
		$this->db->select("*");
		$this->db->where("icerikler.id", $id);
		$this->db->join("icerikler", "yorum.content_id = icerikler.id");
		$query = $this->db->get("yorum");
		
		return $query->result();
		
	}
	
}

?>