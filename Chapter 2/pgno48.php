<?php
    $course[0]="Computer Engineering";
    $course[1]="Information Technology";
    $course[2]="Electronics and Telecommunication";

    echo "<h3>Before splitting array: </h3>";
    echo $course[0], "<br>";
    echo $course[1], "<br>";
    echo $course[2], "<br>";

    echo "<h3>After splitting array: </h3>";
    $subarray = array_slice($course, 0,3);

    foreach ($subarray as $value) {
        echo "Course: $value<br>";
    }
    ?>