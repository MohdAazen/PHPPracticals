<?php
    function simple(){
        echo "In simple()<br />\n";
    }
    function data($arg = " ")
    {
        echo "In data(); argument was '$arg'.<br>\n";
    }
    $func = 'simple';
    $func();
    $func = 'data';
    $func('test');
    ?>