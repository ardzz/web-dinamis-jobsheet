<?php
$favorite_drinks = [
    'Coffe Late',
    'Milk',
    'Red Wine',
    'Honey',
    'Hot Tea'
];

$last_element = array_pop($favorite_drinks);
echo "Deleted last element: $last_element " . PHP_EOL . PHP_EOL;
$add_element = array_push($favorite_drinks, 'Cola', 'Orange Juice');

echo "After added some elements: " . PHP_EOL . PHP_EOL;
foreach ($favorite_drinks as $drink) {
    echo "Drink: $drink " . PHP_EOL;
}
$first_element = array_shift($favorite_drinks);
echo "Deleted first element: $first_element" . PHP_EOL;