<?php
//13. Заданы две переменные: s - длина участка, который проехал автомобиль; t - время движения в часах.
// Вывести скорость автомобиля на заданном участке в км/час и в м/сек.

$s = 100; // distance in km that the car has been covered
$t = 2.5; // time in hours that the car has been covered

function get_distance ($s,$t){
    $v = $s/$t;
    echo $v;
}

get_distance($s,$t);
