<?php
//16. Создайте две переменные $a и $b, значения которых будут числами. Выведите максимальное число из этих двух.
function get_max($a,$b){
    if ($a > $b){
        echo "$a is bigger that $b";
    } elseif ($b == $a) {
        echo "They are equal";
    } else{
        echo "$b is bigger that $a";
    }
}
get_max(45,45);/*result: equal*/ echo "<br>";
get_max(45,-45);/*45 bigger*/;