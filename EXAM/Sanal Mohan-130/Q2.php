<?php
    echo "<br>";
    $students=array("Akhil","Arjun","Dheeraj","Vyshnav","Kiran","Arun","Shyam");

    echo "Array of Students: ";
    print_r($students);
    echo "<br>";
    echo "<br>";

    echo "Array of students after sorting using assort: ";
    asort($students);
    print_r($students);
    echo "<br>";
    echo "<br>";

    echo "Array of students after sorting using arsort: ";
    arsort($students);
    print_r($students);

?>