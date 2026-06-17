<?php
    $monthName = date('F');

    if ($monthName) {
        echo "The current month is " . $monthName . ".";
    } else {
        echo "Could not retrieve the current month.";
    }
?>