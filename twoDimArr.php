<?php
// Create a two-dimensional array of 4x4 elements
$salesRegions = array(
    array('North', 'South', 'East', 'West'),
    array('Bob', 'Sue', 'Nathan', 'Wanda'),
    array('Stef', 'Janice', 'Henry', 'Charles'),
    array('Ron', 'Will', 'Kimmy', 'Pete')
);

// Print section title
echo "Section 1: Two-Dimensional Array\n";

// Display the contents of the array by sales region
for ($i = 0; $i < count($salesRegions[0]); $i++) {
    echo $salesRegions[0][$i] . ":\n";
    for ($j = 1; $j < count($salesRegions); $j++) {
        echo "\t" . $salesRegions[$j][$i] . "\n";
    }
}
?>