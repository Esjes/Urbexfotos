<?php

$id = $_GET['id'];

    include "db_connection.php";        

    $sql_querie = 'SELECT
    fotograaf_naam,
    fotograaf_favofoto,
    GROUP_CONCAT(foto_src SEPARATOR "|") AS afbeeldingen
FROM
    fotografen
INNER JOIN fotos ON fotografen.fotograaf_id = fotos.fotograaf_id
WHERE fotografen.fotograaf_id = ' . $id . ' 
GROUP BY
    fotografen.fotograaf_id';
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        $afbeeldingen = explode('|', $row['afbeeldingen']);
        $afbeeldingen_length = count($afbeeldingen);
        $show_afbeeldingen = '';
        for($i = 0; $i < $afbeeldingen_length; $i++){
            $show_afbeeldingen .= '<img src="' . $afbeeldingen[$i] . '">';
        }
        echo '<div class="alleFotos">' . 
        '<div class="naam">'.
        '<div><h1>' . $row['fotograaf_naam'] . '</h1></div>'.
        '<div><a href="photoCards.php"><p><<<</p></a></div>' .
        '</div>' .
        '<div class="fotos"><img src="' . $row['fotograaf_favofoto'] . '">' . $show_afbeeldingen . '</div>' .
        '</div>';
        
    }       

    $conn = null;
  
?>

