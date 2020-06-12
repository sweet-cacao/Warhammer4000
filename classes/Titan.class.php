<?php
require_once("Ship.class.php");
final Class Titan extends Ship
{
    protected $_name = "Titan";
    protected $_img = "img/ship4.png";
    protected $_speed = 30;
    public $damage = 50;
    public $hp = 1500;

    public function __construct()
    {
        return;
    }
    public function shoot()
    {
        $diapason = 500 + $this->getSpeed();
        return ($diapason);
    }
}
?>