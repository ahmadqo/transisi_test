<?php

$str = "TranSISI";
$countLwer =  preg_match_all("/[a-z]/", $str);

echo 'Jumlah huruf kecil pada string "' . $str . '" adalah ' . $countLwer;
