<?php

abstract Class Ship
{
    protected $_name;
    protected $_img;
    protected $_speed;
    protected $damage;
    protected $hp;
    public static $verbose = False;

    public function doc()
    {
        return file_get_contents("classes/".$this->getName().".doc.txt");
    }
    public function __construct($arr)
    {
        try
        {   
            $this->_name = $arr['name'];
            $this->_img = $arr['img'];
            $this->_speed = $arr['speed'];
            $this->setHP($arr['hp']);
            $this->setDamage($arr['damage']);
            if (self::$verbose)
                echo "Instance was constructed";
        }
        catch (Exception $e){
            echo("Unable to create class");
        }
    }
    public function __destruct()
    {
        if (self::$verbose)
            echo "Instance was destructed";
        return;
    }
    public function getName()
    {
        return $this->_name;
    }
    public function getImg()
    {
        return $this->_img;
    }
    public function getSpeed()
    {
        return $this->_speed;
    }
    public function getDamage()
    {
        return $this->damage;
    }
    public function getHP()
    {
        return $this->hp;
    }
    public function setHP($hp)
    {
        $this->hp = $hp;
    }
    public function setDamage($damage)
    {
        $this->damage = $damage;
    }
    public function getArray()
    {
        $new['name'] = $this->getName();
        $new['img'] = $this->getImg();
        $new['hp'] = $this->getHP();
        $new['damage'] = $this->getDamage();
        $new['speed'] = $this->getSpeed();
        return ($new);
    }
    public function __toString()
    {
        return "name = ".$this->getName()." img =".$this->getImg()." hp = ".$this->getHP()." damage = ".$this->getDamage()." speed = ".$this->getSpeed().PHP_EOL;
    }
    abstract function shoot();
    public function __invoke()
    {
        echo $this->getName()."\n";
    }
    public function __call($_name, $_param)
	{
        $methods = get_class_methods($this->getName());
        echo "No such method, the list of allowed methods is above:/n";
        foreach ($methods as $el)
        {
            echo $el.PHP_EOL;
        }
	}
}

?>