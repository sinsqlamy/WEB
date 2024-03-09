<?php

// Original code from another developer
$very_bad_unclear_name = "Initial value"; // Variable with unclear name

// Your part of the code
$order = &$very_bad_unclear_name; // Create a reference to the variable $very_bad_unclear_name
$order .= " additional string"; // Concatenate a string using the concatenation operator

// Print the value of the variable $very_bad_unclear_name
echo $very_bad_unclear_name;

// 2
$integer_variable = 10;
echo $integer_variable;

echo "\n";

$floating_variable = 5.5;
echo $floating_variable;

echo 10 + 2;

$last_month = 1187.23;
$this_month = 1089.98;
$expenses_difference = $last_month - $this_month;
echo "\nExpenses difference: " . $expenses_difference;

// 11
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language;

// 12
echo 8 ** 2;

// 13
$my_num = 5;
$answer = $my_num;

$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;

echo $answer;

// 14
$a = 10;
$b = 3;
echo $a % $b;

if ($a % $b == 0) {
    echo "\nДелится: " . ($a / $b);
} else {
    echo "\nДелится с остатком: " . ($a % $b);
}

$st = 2 ** 10;
echo "\n$st";
echo "\n" . sqrt(245);

$array = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($array as $value) {
    $sum += $value ** 2;
}
echo "\n" . sqrt($sum);

$c = 379;
echo "\n" . round(sqrt($c));
echo "\n" . round(sqrt($c), 1);
echo "\n" . round(sqrt($c), 2);

$result = ['floor' => floor(sqrt(587)), 'ceil' => ceil(sqrt(587))];
echo "\n" . json_encode($result);

$array = [4, -2, 5, 19, -130, 0, 10];
echo "\nMin: " . min($array);
echo "\nMax: " . max($array);

echo "\nСлучайное число от 1 до 100: " . rand(1, 100);

$random_numbers = [];
for ($i = 0; $i < 10; $i++) {
    $random_numbers[] = rand();
}
echo "\nСлучайные числа: " . implode(", ", $random_numbers);

$a = 5;
$b = 8;
echo "\nМодуль разности $a и $b: " . abs($a - $b);

$array = [1, 2, -1, -2, 3, -3];
foreach ($array as &$value) {
    $value = abs($value);
}
unset($value);
echo "\nМассив с положительными числами: " . implode(", ", $array);

$num = 30;
$divisors = [];
for ($i = 1; $i <= $num; $i++) {
    if ($num % $i == 0) {
        $divisors[] = $i;
    }
}
echo "\nДелители числа $num: " . implode(", ", $divisors);

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$count = 0;
foreach ($array as $value) {
    $sum += $value;
    $count++;
    if ($sum > 10) {
        break;
    }
}
echo "\nКоличество элементов для суммы > 10: $count";

// 15
function printStringReturnNumber($str) {
    echo $str;
    return intval($str);
}

$my_num = printStringReturnNumber("123");
echo $my_num;

// 16
function increaseEnthusiasm($str) {
    return $str . "!";
}

function repeatThreeTimes($str) {
    return $str . $str . $str;
}

$string = "Li-Wi";
echo increaseEnthusiasm($string) , "\n";
echo repeatThreeTimes($string) , "\n";

echo increaseEnthusiasm(repeatThreeTimes($string)) , "\n";

function cut($str, $length = 10) {
    return substr($str, 0, $length);
}

echo cut("pivo", 7) , "\n";

function printArray($array, $index = 0) {
    if ($index < count($array)) {
        echo $array[$index] , "\n";
        printArray($array, $index + 1);
    }
}

$array = [1, 2, 0, 0, 4];
printArray($array);

function sumDigits($curr) {
    $sum = array_sum(str_split($curr));
    if ($sum > 9) {
        return sumDigits($sum);
    } else {
        return $sum;
    }
}

echo sumDigits(803) , "\n";
?>
