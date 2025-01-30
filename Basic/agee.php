<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $age = $_POST["age"];
        if (is_numeric($age)) {
            if ($age >= 18) {
                echo "You can vote.";
            } else {
                echo "You can't vote.";
            }
        } else {
            echo "Please enter a valid age.";
        }
    }
    ?>