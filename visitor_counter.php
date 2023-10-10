<?php
$count_file = 'counter.txt';

// Read the current count from the file
$count = (int) file_get_contents($count_file);

// Increment the count by 1
$count++;

// Save the new count back to the file
file_put_contents($count_file, $count);

// Display the current count


?>
