<?php

function isLowerCase($str) {
    return $str === strtolower($str);
}

// Usage example
$str1 = "hello";
$str2 = "Hello";

if(isLowerCase($str1)) {
    echo "The string '$str1' is all lowercase.";
} else {
    echo "The string '$str1' is not all lowercase.";
}

if(isLowerCase($str2)) {
    echo "The string '$str2' is all lowercase.";
} else {
    echo "The string '$str2' is not all lowercase.";
}

?>