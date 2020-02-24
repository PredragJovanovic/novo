<?php 
include 'header.php';

 ?>

     <h1>registracija</h1>
        <?php 
            $polja = array('ime', 'prezime', 'email', 'password', 'username');
            generisi_formu($polja, 'registruj');
         ?>
     


    
   </body>
</html>
