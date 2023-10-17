<?php
$beer['taste'] = 'excellent';
$beer['color'] = 'amber';
$beer['alcohol'] = 4.5;

echo "Alcohol: {$beer['alcohol']}" . PHP_EOL;

$beer[4.5] = 'strong';
$beer['price'] = '$3.50';
echo "Alcohol: {$beer[4.5]}" . PHP_EOL;