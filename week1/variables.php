<?php

$name = 'Samir'; // string
$age = 31; // integer
$bankBalance = 0.25; // float
$bankBalance += 10; // 10.25

echo "bankbalance = " . $bankBalance . "\n\n\n\n";
echo "My bank balance is $bankBalance \n";

// Conditionals

$bankBalance = 50; // came from user input

// If the user has less than a hundred bucks, they cannot open an account
// If they have more than a 100 bucks, they can

if ($bankBalance >= 100) {
    echo 'You can open an account';
} else {
    echo 'You cannot open an account because your balance is ' . $bankBalance;
}

define('DAYS_IN_YEAR', 365);
echo 'Days in year ' . DAYS_IN_YEAR;

echo "\n";


