<?php
require_once("Ship.class.php");
final Class Chaos extends Ship
{
    protected $_name = "Chaos";
    protected $_img = "img/ship3.png";
    protected $_speed = 20;
    public $damage = 20;
    public $hp = 700;

    public function __construct()
    {
        return;
    }
    public function shoot()
    {
        $diapason = 200 + $this->getSpeed();
        return ($diapason);
    }
}
?>
