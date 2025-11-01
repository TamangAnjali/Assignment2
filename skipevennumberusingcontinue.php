<?php
echo "Odd numbers using continue: ";
for ($x = 1; $x <= 20; $x++) {
    if ($x % 2 == 0) {
        continue;
    }
    echo "$x ";
}
echo "<br>";

?>