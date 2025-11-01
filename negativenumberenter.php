<?php
$numbers = array(5, 10, 15, 20, -5, 25, 30); // Simulated input
echo "Numbers entered: ";
foreach ($numbers as $input) {
    if ($input < 0) {
        echo "[Negative number detected - stopping] ";
        break;
    }
    echo "$input ";
}
echo "<br>";

?>