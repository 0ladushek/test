<?php

function revertPunctuationMarks($str) {
    $marks = ['.', '?', '!', ',', ';', ':', '-', '"', '(', ')'];
    preg_match_all('/./us', $str, $strArr);
    $strArr = $strArr[0];

    $positions = [];
    $chars = [];

    foreach ($strArr as $key => $char) {
        if (in_array($char, $marks)) {
            $positions[] = $key;
            $chars[] = $char;
        }
    }

    foreach ($positions as $pos) {
        $strArr[$pos] = array_pop($chars);
    }

    return implode('', $strArr);
}


$result = revertPunctuationMarks("Привет! Как твои дела?");
echo $result . PHP_EOL; // Привет? Как твои дела!