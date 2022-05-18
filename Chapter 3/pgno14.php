<?php
class Fruit
{
    public $name;
    public $col;
    function set_name($name)
    {
        $this->name=$name;
    }
    function get_name()
    {
        return $this->name;
    }
    function set_color($color)
    {
        $this->col=$color;
    }
    function get_color()
    {
        return $this->col;
    }
}
    $apple = new Fruit();
    $apple->set_name('Apple');
    $apple->set_color('Red');
    echo "Name: ".$apple->get_name();
    echo "<br>";
    echo "Color: ".$apple->get_color();
    echo "<br>";
    $pineapple = new Fruit();
    $pineapple->set_name('Pine-Apple');
    $pineapple->set_color('Yellow');
    echo "Name: ".$pineapple->get_name();
    echo "<br>";
    echo "Color: ".$pineapple->get_color();
    echo "<br>";
    $orange = new Fruit();
    $orange->set_name('Orange');
    $orange->set_color('Orange');
    echo "Name: ".$orange->get_name();
    echo "<br>";
    echo "Color: ".$orange->get_color();
?>