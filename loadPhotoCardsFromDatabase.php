<?php


    include "db_connection.php";        

    $sql_querie = "SELECT foto_src, foto_titel, foto_naamfotograaf, foto_datumgemaakt, foto_omschrijving, fotograaf_id FROM fotos";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            

        echo '<div class="fotoKaartje">' .
        '<div class="fotokaartje foto"><img src="' . $row['foto_src'] . '"></div>' .
        '<div class="fotokaartje Titel"><h1>' . $row['foto_titel'] . '</h1></div>' .
        '<div class="fotokaartje Titelsub"><p>by:</p>' . 
        '<a href="photographersPopup.php?id=' . $row['fotograaf_id'] . '"><h2>' . $row['foto_naamfotograaf'] . '</h2></a>' . 
        '</div>' .
        '<div class="fotokaartje dd"><h3>' . $row['foto_datumgemaakt'] . '</h3></div>' .
        '<div class="fotokaartje Omschrijving"><p>' . $row['foto_omschrijving'] . '</p><div><p>Alle foto´s van ' . $row['foto_naamfotograaf'] . ' <a href="photosFromNaam.php?id=' . $row['fotograaf_id'] . '"> >>> </a></p></div></div>' .
        '</div>';
        
    }       

    $conn = null;
  
?>