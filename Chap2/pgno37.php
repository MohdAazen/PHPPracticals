<?php
    $course[0] = "Computer Engg.";
    $course[1] = "Information Tech.";
    $course[2] = "Electronics and Telecomm.";
    echo "<h3>Before Deletion: </h3><br>";
    echo "$course[0]<br>";
    echo "$course[1]<br>";
    echo "$course[2]<br>";
    
    echo "<h3>After Deletion: </h3><br>";
    $course[2]="";

    for($i=0;$i<count($course);$i++)
    {
        echo $course[$i],"<br>";
    }
    ?>