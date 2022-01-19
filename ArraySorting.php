<?php
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $Students=array('Aswin','Kannan','Arjun','Navya','Nikhila','Kiran','Akhil','Manoj','Ajay','Lakshmi');
    echo "Array of students: <br>";
    print_r($Students);
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "sorted Array of students by using 'asort': <br>";
    asort($Students);
    print_r($Students);
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "sorted Array of students by using 'arsort': <br>";
    arsort($Students);
    print_r($Students);
?>
