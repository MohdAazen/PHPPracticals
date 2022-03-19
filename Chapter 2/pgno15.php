<?php
    $mobile = array
    (
        array("LG",20,18),
        array("Sony",30,13),
        array("Redmi",10,2),
        array("Samsung",40,15),
    );

    echo $mobile[0][0].": In Stock: ",$mobile[0][1].", sold: ".$mobile[0][2].".<br>";
    echo $mobile[1][0].": In Stock: ",$mobile[1][1].", sold: ".$mobile[1][2].".<br>";
    echo $mobile[2][0].": In Stock: ",$mobile[2][1].", sold: ".$mobile[2][2].".<br>";
    echo $mobile[3][0].": In Stock: ",$mobile[3][1].", sold: ".$mobile[3][2].".<br>";
    ?>