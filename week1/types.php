<?php

$money = 12.44;

if (is_float($money)) {
    echo 'Variable is money!';
} else {
    echo 'Variable is not money!';
}

$userInput = null;

if (empty($userInput)) {

    echo '$money=' . $money . "\n";
    echo 'Please enter a something';
    die();
}