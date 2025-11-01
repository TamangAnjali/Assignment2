<?php
$j = 1;
echo "Even numbers: ";
do {
    if ($j % 2 == 0) {
        echo "$j ";
    }
    $j++;
} while ($j <= 20);
?>