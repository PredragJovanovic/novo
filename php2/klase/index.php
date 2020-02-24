<?php 
/*
ova kalas prihvataa tacke i na osnovu tih tacaka prikazuje zatvoreni oblik
*/
 class Oblik {
 	public $crtac = false;
 	public $tacka = array();
 	public $oblik = array();
 	public $ivica = '1px solid red';
 	public $boja = '#fff';

 	public function __construct($ime_osobe){
        if(!$ime_osobe){
        	echo 'dalje ne mozes dok se ne predstavis';
        	return;
        }else{}
        echo 'cestitam crtas novi crtez'; 
 	}


 	/*
 	ovaj metod dodaje tacku
 	*/
 	public function dodajTacku(){

 	}
 	/*
 	ovaj metod prikazuje konacni oblik
 	*/
 	public function prikazi(){

 	}

 	/*
 	menjanje stila ivice
 	*/
 	public function promeniStilIvice (){

 	}/*
 	menjam fill boje
 	*/
 	public function promeniUnutrasnjuBoju (){

 	}

 }

 $moj_oblik_glave = new Oblik('igor');
 var_dump($moj_oblik_glave); 