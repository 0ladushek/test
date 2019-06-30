<?php
require __DIR__.'/vendor/autoload.php';

$result = revertPunctuationMarks("Привет! Как твои дела?");
echo $result . PHP_EOL; // Привет? Как твои дела!