<?php
    $course = array("CO", "IF", "EJ", "ME", "CE");
    echo "<h3>Before Deletion: </h3><br>";
    echo "$course[0]<br>";
    echo "$course[1]<br>";
    echo "$course[2]<br>";
    echo "$course[3]<br>";
    echo "$course[4]<br>";

    unset($course[3]);
    echo "<h3>After Deletion: </h3><br>";
    print_r($course);

    echo "<h3>Delete entire array elements: </h3><br>";
    unset($course);
    ?>