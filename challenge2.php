<?php

    $fruits = ["りんご"=>100, "みかん"=>150, "桃" => 500];
    $quantity = [3, 1, 6];

    function sum($fruits, $quantity){
        $total= $fruits * $quantity;
        return $total;
     }

     foreach($fruits as $key => $value) {
        echo "{$key}は".sum($value, $quantity)."円です。<br>";
    }

?>