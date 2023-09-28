<?php 
    require 'animal.php';
    require 'frog.php';
    require 'ape.php';
    // membuat instance dari class animal
    $sheep = new animal('shaun');
    echo $sheep -> infoanimal();
    // echo $sheep -> name."<br/>";
    // echo $sheep -> legs."<br/>";
    // echo $sheep -> cold_blooded;
    echo "<br/>";
    echo "<br/>";
    $kodok = new frog('buduk');
    // echo $kodok ->name."<br/>";
    echo $kodok -> infoanimal();
    echo $kodok -> jump();
    echo "<br/>";
    echo "<br/>";
    $sunggokong = new ape('kera sakti');
    // 
    echo $sunggokong -> infoanimal();
    echo $sunggokong -> yell();
?>