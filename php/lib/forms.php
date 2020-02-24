<?php  



function generisi_formu($polja, $submit_label){
    
	echo '<form method="post" action="">';
	 for ($i=0; $i < count($polja); $i++) { 
	 	echo '<p>';
	 	echo '<label >'.ucfirst($polja[$i]).'</label>';
	 	if($polja[$i] == 'password'){
	 		$tip_je = 'password';
	 		/*echo '<input type="password" name="'.$polja[$i].'">';*/
	 	}else if($polja[$i] == 'email'){
	 		$tip_je = 'password';
	 		/*echo '<input type="email" name="'.$polja[$i].'">'*/;} 
	 	else{
	 		$tip_je = 'password';
        /*echo '<input type="text" name="'.$polja[$i].'">';*/
        }
        echo '<input type="text" name="'.$polja[$i].'">';
	 	echo '</p>';
	 }
	 /*   echo '<p>';
        echo '<input type="'.$tip_je.'" value="'.$submit_label.'">';
	 	echo '</p>';
	 	
	*/
	echo '</form>';

}