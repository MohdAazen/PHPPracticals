<?php
    $function = function(){
        echo 'Information Technology';
    };
    if(is_callable($function))
    {
      echo "It is Function";
    }
    else
    {
        echo "It is not Function";
    }
    $var = "IF";
    echo "<br>";
    if(is_callable($var))
    {
        echo "It is function";
    }
    else
    {
        echo "It is not function";
    }
    ?>