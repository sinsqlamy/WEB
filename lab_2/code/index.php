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

?>
