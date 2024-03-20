<?php
// Create a variable $states with the value "Mississippi, Alabama, Massachusetts, Kansas"
$states = "Mississippi, Alabama, Massachusetts, Kansas";

// (a) Search for word in $states that ends in "xas"
preg_match('/\b\w*xas\b/', $states, $matches_a);
$word_ending_in_xas = $matches_a[0];

// (b) Search the word that begins with "M" and ends with "s"
preg_match('/\bM\w*s\b/', $states, $matches_b);
$word_starting_with_M_ending_with_s = $matches_b[0];

// (c) Convert the $states string into an array and output it
$statesArray = explode(", ", $states);

// Output the results
echo "(a) Word ending in 'xas': " . $word_ending_in_xas . "<br>";
echo "(b) Word starting with 'M' and ending with 's': " . $word_starting_with_M_ending_with_s . "<br>";
echo "(c) States Array: ";
print_r($statesArray);
?>
