<?php

echo mixedAdd(8,2);

function mixedAdd($parx,$pary){
    if (is_numeric($parx) && is_numeric($pary)){
        return $parx + $pary;
    }
    return $parx . $pary;
}
