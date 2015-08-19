<?php

$user = [
    'name' => 'Samir',
    'diet' => [
        'Vegetarian',
        'Vegan',
        'Gluten Free'
    ],
    'age' => 31,
    'preference' => [
        'fruit' => 'Apple',
        'car' => 'Honda',
        'color' => 'Blue'
    ]
];

foreach ($user as $label => $value) {

    if ($label == 'preference') {

        echo 'Your car is a ' . $value['car'] . "\n";
    }

    if (is_array($value)) {

        echo $label . '--' . print_r($value, true) . "\n";
    } else {

        echo $label . '--' . $value . "\n";
    }
}