<?php

    //CARD.PHP
    //" style="max-width: 100%; height: auto;"

    include "db_connection.php";        

    $sql_querie = "SELECT fotograaf_favofoto, fotograaf_naam, fotograaf_ervaring, fotograaf_sinds, fotograaf_profiel FROM fotografen";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        echo '<div class="fotoKaartje">' .
        '<div class="foto"><img src="' . $row['fotograaf_favofoto'] . '"></div>' .
        '<div class="Titel"><p>De favoriete foto van:</p><h1>' . $row['fotograaf_naam'] . '</h1></div>' .
        '<div class="Titelsub"><h2>' . $row['fotograaf_ervaring'] . '</h2></div>' .
        '<div class="dd"><h3>fotografeerd sinds <i> ' . $row['fotograaf_sinds'] . '</i></h3></div>' .
        '<div class="Omschrijving"><p>' . $row['fotograaf_profiel'] . '</p></div>' .
        '</div><br>';
        
             
    }       

    $conn = null;
  
?>

