<?php

$recordFromDb = [
    'name' => 'Samir',
    'age' => 31,
    'location' => 'Austin'
];

foreach ($recordFromDb as $key => $thing) {
    echo ucfirst($key) . ': ' . $thing . "\n";
}
?>

<table border="1">

    <tr>
        <td>User's Name:</td>
        <td>
            <?php
            echo $recordFromDb['name'];
            ?>
        </td>
    </tr>

    <tr>
        <td>Person's Age:</td>
        <td>
            <?php
            echo $recordFromDb['age'];
            ?>
        </td>
    </tr>

    <tr>
        <td>Where they live:</td>
        <td>
            <?php
            echo $recordFromDb['location'];
            ?>
        </td>
    </tr>

</table>