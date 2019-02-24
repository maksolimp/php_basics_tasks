<?php
<?php
//task 1
$name = "Maks";
//task 2
$age = 25;
//task 3
echo "My name is: $name" . "<br>";
//task 4
echo 'My age is: ' . $age . "<br>";
//task 5-8
if ($age >= 18 and $age <= 59){
    echo "You need to work and work, man";
} elseif (!is_numeric($age) or $age < 0) {
    echo "Age is not defined";
} elseif ($age < 18 && $age >= 0) {
    echo "You are to young to work...";
} else {
    echo "You are to old to work";
};
echo "<br>";

//task 9-12
$day = 7;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "It is a working day";
        break;
    case 6:
    case 7:
        echo "It is a weekend";
        break;
    default:
        echo "Unknown day";
        break;
}

//task 13
$s = 100; // distance in km that the car has been covered
$t = 2.5; // time in hours that the car has been covered

function get_distance ($s,$t){
    $v = $s/$t;
    echo $v;
}
echo "<hr>";
get_distance($s,$t);
echo "<hr>";

//task 14
$foo = 'bar';
$bar = 10;
echo $$foo . "<hr>";

//task 15
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

//task 16
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
get_max(45,-45);/*45 bigger*/ echo "<br>";

//task 17
$a = '78';
$b = 78;
if ($a == $b){
    echo "They are the same type";
} else {
    echo "Not the same type";
}
echo "<br>";
//task 18 (checking if they are equal)
if ($a === $b){
    echo "They are equal";
} else {
    echo "They are not equal";
}
echo "<br>";

//task 19
var_dump($a === $b);
echo "<hr>";
//task 20-22
$number = 20;
var_dump((boolean) $number); // 20 is in bool is TRUE
echo "<br>";
$number_two = 0;
var_dump((bool) $number_two); // 0 is in bool type is FALSE
echo "<br>";
$number3 = -20;
var_dump((bool) $number3); // minus in bool type is TRUE
echo "<hr>";
//task 23
$str1 = 'first string to type via echo';
$str2 = 'second string to type via print';
$str3 = 'third string to type via printf';
echo $str1; echo "<br>";
print $str2; echo "<br>";
printf($str3); echo "<hr>";

//task 24
//This first comment type
#this is second comment type
/*This is thirdd comment type*/

//task 25
// <?php отличается от <?= тем, что второй - это сокращенный вариант записи <?php echo, также для нее необходимо включить в конфиг-файле php.ini

//task 26
const DAYS_COUNT = 7;
define ('MONTH_COUNT', 12);
echo "This const is defined via const: " . DAYS_COUNT;
echo "<br>";
echo "This const deined via define: " . MONTH_COUNT;