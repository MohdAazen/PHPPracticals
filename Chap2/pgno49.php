<?php
    $sem3 = array("Object Oriented Programming", "Principle of Database", "Data Structure");
    $sem4 = array("Database Management", "Java Programming", "Software Engg.", "Computer Network");

    $subject = array_merge($sem3,$sem4);

    foreach ($subject as $value) {
        echo "Subject: $value<br>";
    }
    ?>