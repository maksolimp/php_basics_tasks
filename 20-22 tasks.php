<?php
/*
20. Приведите число 20 к типу boolean. Объясните результат.
21. Приведите число 0 к типу boolean. Объясните результат.
22. Приведите число -20 к типу boolean. Объясните результат.
*/

$number = 20;
var_dump((boolean) $number); // 20 is in bool is TRUE
echo "<br>";
$number_two = 0;
var_dump((bool) $number_two); // 0 is in bool type is FALSE
echo "<br>";
$number3 = -20;
var_dump((bool) $number3); // minus in bool type is TRUE
