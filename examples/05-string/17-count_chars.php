<?php

// Input string
$text = "Hello, World!";

// Get character frequency
$charCount = count_chars($text, 1);

echo "Character frequency in '$text':" . PHP_EOL;
foreach ($charCount as $char => $count) {
    echo "'" . chr($char) . "' occurs $count time(s)" . PHP_EOL;
}

// Get unique characters
$uniqueChars = count_chars($text, 3);
echo PHP_EOL . "Unique characters: $uniqueChars" . PHP_EOL;

// Get unused ASCII characters
$unusedChars = count_chars($text, 4);
echo "Unused ASCII characters (in hex): " . bin2hex($unusedChars) . PHP_EOL;
