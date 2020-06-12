<?php
    session_start();
    require_once("rend.php");
    $ship_1 = $_SESSION['arr'][0];
    $ship_2 = $_SESSION['arr2'][0];
    $rend = new Render(array("html" => "index.html", "param" => array("name_1" => $ship_1['name'], "name_2" => $ship_2['name'], "damage_1" => $ship_1['damage'], "damage_2" => $ship_2['damage'], "hp_1" => $ship_1['hp'], "hp_2" => $ship_2['hp'], "img_1" => $ship_1['img'], "img_2" => $ship_2['img'])));
    echo $rend->getHtml();
?>
