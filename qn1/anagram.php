<?php

class Anagram {
        public static function isAnagram($str1, $str2) {
            // Remove spaces and convert to lowercase for case-insensitive comparison
            $str1 = strtolower(str_replace(' ', '', $str1));
            $str2 = strtolower(str_replace(' ', '', $str2));
            // return true if both strings are equal
            return (count_chars($str1, 1) == count_chars($str2, 1));          
        }
}
function testAnagramChecker() {
    // Test Case 1: Anagrams
    echo(Anagram::isAnagram("listen", "silent") === true);

    // Test Case 2: Not Anagrams
    echo(Anagram::isAnagram("hello", "world") === false);

    // Test Case 3: Anagrams with different cases
    echo(Anagram::isAnagram("Debit card", "Bad credit") === true);

    // Add more test cases as needed
    echo(Anagram::isAnagram("Debit ", "Bad credit") === true);
}

// Run the tests
testAnagramChecker();

?>