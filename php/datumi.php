<?php 


/*
$dan_u_mesecu = date('j');
$mesec_u_godini = date('n');
$godina = date('Y');*/

/*$datum = $dan_u_mesecu . "." . $mesec_u_godini . "." . $godina;*/
/*echo $datum;
echo "<br>";*/


/*$datum = date("j.n.Y");*/
/*echo $datum;*/

/*
$broj_godina = 15;
$status = 'nepoznat';
if ($broj_godina >= 18){
    $status = 'punoletan';
}else{
	$status = 'maloletan';
}

printf("imas %s godina, ti si %s", $broj_godina, $status);


$drzava = 'srbija';
$broj_godina = 55;
$status = 'maloletan';

if($drzava != 'amerika' &&  $broj_godina >= 18){
    $status = 'punoletan';
}else if($drzava == 'amerika' && $broj_godina >= 21){
       $status = 'punoletan';
}
printf("imas %s godina, ti si %s", $broj_godina, $status);
*/

$dan_u_mesecu = 1;
$mesec_u_godini = 1;

if (($dan_u_mesecu >= 21 && $mesec_u_godini == 12) || ($dan_u_mesecu <= 21 && $mesec_u_godini == 3) || ($mesec_u_godini == 1 || $mesec_u_godini == 2)) {
	
	$godisnje_doba = 'zima';

}else if (($dan_u_mesecu >= 21 && $mesec_u_godini == 3) || ($dan_u_mesecu <= 21 && $mesec_u_godini == 6) || ($mesec_u_godini == 4 || $mesec_u_godini == 5)) {
   
   $godisnje_doba = 'prolece';

}else if (($dan_u_mesecu >= 21 && $mesec_u_godini == 6) || ($dan_u_mesecu <= 21 && $mesec_u_godini == 9) || ($mesec_u_godini == 7 || $mesec_u_godini == 8)) {
     
      $godisnje_doba = 'leto';
}else {
      
       $godisnje_doba = 'jesen';
}
var_dump($godisnje_doba);


