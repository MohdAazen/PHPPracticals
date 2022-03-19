<?php
    $str = "Hello World!";
    $func = function($match)
    {
        return "PHP!!!";
    };
    $str = preg_replace_callback('/World/', $func, $str);
    echo $str;
    ?>