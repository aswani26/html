<?php
$students = array("Sinu", "Anu", "Manu", "Sahva", "Neira");
echo "<h3>Original Array:</h3>";
print_r($students);
asort($students);
echo "<h3> Ascending Order:</h3>";
print_r($students);
arsort($students);
echo "<h3>Descending Order:</h3>";
print_r($students);
?>


