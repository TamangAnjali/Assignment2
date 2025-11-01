<?php
echo "Odd numbers 1-20: ";
for ($m = 1; $m <= 20; $m++) {
    if ($m % 2 == 0) {
        continue;
    }
    echo "$m ";
}
echo "<br>";