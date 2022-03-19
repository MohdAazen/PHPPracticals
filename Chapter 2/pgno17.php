<?php
    $mobile = array
    (
        array("LG",20,18),
        array("Sony",30,13),
        array("Redmi",10,2),
        array("Samsung",40,15),
    );

    for ($row=0; $row < 4; $row++) 
    { 
        echo "<p><b>Row Number $row</b></p>";
        echo "<ul>";
        for ($col=0; $col < 3 ; $col++) { 
            echo "<li>".$mobile[$row][$col]."</li>";
        }
        echo "</ul>";
    }
    ?>