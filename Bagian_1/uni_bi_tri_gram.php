<?php

$string = "Jakarta adalah ibukota negara Republik Indonesia";
$expl_string = explode(" ", $string);

// unigram
echo 'Unigram : ';
echo implode(', ', $expl_string);

echo '<br>';

// bigram
$bigrams = array();
for ($i = 0; $i + 1 < count($expl_string); $i += 2) {
  array_push($bigrams, $expl_string[$i] . ' ' . $expl_string[$i + 1]);
}
echo 'Bigram :  ';
echo implode(', ', $bigrams);

echo '<br>';

// trigram
$trigrams = array();
for ($i = 0; $i + 2 < count($expl_string); $i += 3) {
  array_push($trigrams, $expl_string[$i] . ' ' . $expl_string[$i + 1] . ' ' . $expl_string[$i + 2]);
}
echo 'Trigram :  ';
echo implode(', ', $trigrams);
