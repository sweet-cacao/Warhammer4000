<?php
require_once("Ship.class.php");
final Class Ultimate extends Ship
{
    protected $_name = "Ultimate";
    protected $_img = "img/ship5.png";
    protected $_speed = 10;
    public $damage = 0;
    public $hp = 500;

    public function __construct()
    {
        return;
    }
    public function shoot()
    {
        $diapason = 50 + $this->getSpeed();
        return ($diapason);
    }
}
?>