<?php
class BangunRuang{

/*
	function get_panjang(){
		$panjang=$this->panjang;
		return $panjang;		
	}

	function get_lebar(){
		$lebar=$this->lebar;
		return $lebar;		
	}

	function get_tinggi(){
		$tinggi=$this->tinggi;
		return $tinggi;		
	}
*/
	public function tampil($panjang, $lebar, $tinggi){
		$hitung=$panjang*$lebar*$tinggi;
		echo "Hasil 	:".$hitung;
	}
}
?>