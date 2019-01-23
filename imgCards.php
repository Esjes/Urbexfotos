<?php

    //CARD.PHP

    include "db_connection.php";        

    $sql_querie = "SELECT foto_src, foto_titel, foto_naamfotograaf, foto_datumgemaakt, foto_omschrijving FROM fotos";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        echo '<div class="fotoKaartje">' .
        '<div class="foto"><img src="' . $row['foto_src'] . '" style="max-width: 100%; height: auto;"></div>' .
        '<div class="fotoTitel"><h1>' . $row['foto_titel'] . '</h1></div>' .
        '<div class="fotoFotograafnaam"><h2>' . $row['foto_naamfotograaf'] . '</h2></div>' .
        '<div class="fotoGemaakt"><h3>' . $row['foto_datumgemaakt'] . '</h3></div>' .
        '<div class="fotoOmschrijving"><p>' . $row['foto_omschrijving'] . '<p></div>' .
        '</div><br>';
        
             
    }       

    $conn = null;
  
?>

