<?php
    $str = "hello world!";
    $lambda = create_function('$match', 'return "friend!";');
    $str = preg_replace_callback('/world/',$lambda,$str);
    echo $str;
    ?>