<?php

// Get the contents of https://gist.githubusercontent.com/Keeguon/2310008/raw/bdc2ce1c1e3f28f9cab5b4393c7549f38361be4e/countries.json
$countriesJson = file_get_contents('https://gist.githubusercontent.com/sameg14/378564ffcb2597622edb/raw/1ae615262bcbc166dbebf07fb63f50e23bd2b2c0/sdasdadas');

// Convert the JSON document to an array
// json_encode(); // you want to convert an array into JSON
// json_decode(); // when you have json and want an stdClass (or an array)

$countryData = json_decode($countriesJson, true);
$translations = $countryData['translations'];

//echo '<pre>';
//print_r($translations);
//die();
?>

<table border="1">

    <tr>
        <th>Country Code</th>
        <th>Country Name</th>
        <th>Common</th>
    </tr>

    <?php

    foreach ($translations as $countryCode => $translationArray) {

        echo '<tr>';

        echo '<td>' . $countryCode . '</td>';
        echo '<td>' . $translationArray['official'] . '</td>';
        echo '<td>' . $translationArray['common'] . '</td>';

        echo '</tr>';
    }

    ?>

</table>