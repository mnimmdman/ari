<?php
 
$random_words = ["ape", "apple", "zoo", "pie", "elephant", "banana", "picnic", "eye", "hiyahhiyaahhiya"];
 
sort($random_words);
print_r($random_words);
/* Abjad */
 
function custom_sort($word_a, $word_b) {
    if (strlen($word_a) < strlen($word_b)) {
        return -1;
    }
    if (strlen($word_a) == strlen($word_b)) {
        return strcmp($word_a, $word_b);
    }
    if (strlen($word_a) > strlen($word_b)) {
        return 1;
    }
}
 
usort($random_words, "custom_sort");
print_r($random_words);
/* Terpendek => Teranjang */