<?php
/*
15. Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число.
Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
На экран выводить результат в зависимости от значений этих переменных.
Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.
*/

function calculate($a,$b,$operator){
    if ($operator == '+'){
        $sum = $a+$b;
        echo "The sum is: $sum";
    } elseif ($operator == '-'){
        $subtr = $a-$b;
        echo "The substracion is: $subtr";
    } elseif ($operator == '/'){
        if ($b === 0){echo "No division at 0!";}
        else{
            $divide = $a/$b;
            echo "The division is: $divide";
        }
    } elseif ($operator == '*') {
        $multiply = $a*$b;
        echo "The multiplication is: $multiply";
    } elseif ($operator == '%') {
        $modulo = $a%$b;
        echo "The modulo is: $modulo";
    } else {
        echo 'Enter the correct operator!';
    }
}

calculate(10,3,'+'); /*result: 13*/ echo "<br>";
calculate(10,3,'-'); /*result: 7*/ echo "<br>";
calculate(10,5,'/'); /*result: 2*/ echo "<br>";
calculate(10,0,'/'); /*result: no operation*/ echo "<br>";
calculate(10,3,'%'); /*result: 1*/ echo "<hr>";

//---------------------------------------------------------------------------------------------------------

//task 15 using switch-case
function calculate_new($a,$b,$operator){
    switch ($operator) {
        case '+':
            $sum = $a+$b;
            echo "The sum is: $sum";
            break;
        case ($operator == '-'):
            $subtr = $a-$b;
            echo "The substracion is: $subtr";
            break;
        case '*':
            $multiply = $a*$b;
            echo "The multiplication is: $multiply";
            break;
        case '/':
            if ($b === 0){
                echo "No division at 0!";
            } else {
                $divide = $a/$b;
                echo "The division is: $divide";
            }
            break;
        case '%':
            $modulo = $a%$b;
            echo "The modulo is: $modulo";
        default:
            echo 'Enter the correct operator!';
            break;
    }
}

calculate_new(10,5,'/'); /*result: 2*/ echo "<br>";
calculate_new(10,0,'/'); /*result: no*/ echo "<br>";