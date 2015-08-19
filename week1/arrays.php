<?php
// Arrays

// $fruits = array('Apple', 'Orange', "Mango");
$fruits = ['Apple', 'Orange', "Mango", 12, 4.23];

// This is how to debug print things
echo '<pre>';
print_r($fruits);

// Associative array, typical for DB records and API calls
$recordFromDb = [
    'name' => 'Samir',
    'age' => 31,
    'location' => 'Austin'
];

print_r($recordFromDb);