<?php
    $course = array("CO","IF", "EJ", "ME", "CE");
    echo "Looping using foreach: <br>";
    foreach ($course as $val){
        echo $val. "<br>";
    }
    /* count() function is used to count the number of elements in an array */
    $total = count($course);
    echo "<br> The number of elements are $total <br>";
    /* Another way to loop through the array using for */
    echo "Looping using for: <br>";
    for ($n=0; $n < $total ; $n++) { 
        echo $course[$n], "<br>";
    }
    ?>