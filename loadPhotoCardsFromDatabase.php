<?php

    //CARD.PHP
    //" style="max-width: 100%; height: auto;"

    include "db_connection.php";        

    $sql_querie = "SELECT foto_src, foto_titel, foto_naamfotograaf, foto_datumgemaakt, foto_omschrijving FROM fotos";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        echo '<div class="fotoKaartje">' .
        '<div class="fotokaartje foto"><img src="' . $row['foto_src'] . '"></div>' .
        '<div class="fotokaartje Titel"><h1>' . $row['foto_titel'] . '</h1></div>' .
        '<div class="fotokaartje Titelsub"><p>by:</p><h2>' . $row['foto_naamfotograaf'] . '</h2></div>' .
        '<div class="fotokaartje dd"><h3>' . $row['foto_datumgemaakt'] . '</h3></div>' .
        '<div class="fotokaartje Omschrijving"><p>' . $row['foto_omschrijving'] . '</p></div>' .
        '</div><br>';
        
    }       

    $conn = null;
  
?>

