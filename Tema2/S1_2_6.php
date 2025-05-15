<?php
function isBitten() {
    $randomNumber = rand(0, 1);
    if ($randomNumber === 1) {
        return true;
    } else {
        return false;
    }
}

// Simulant la mossegada de Charlie
// (0 = no mossegat, 1 = mossegat)
$bitten = isBitten();
if ($bitten) {
    echo "Charlie t'ha mossegat el dit!";
} else {
    echo "Charlie no t'ha mossegat el dit.";
}
?>
