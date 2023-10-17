<?php
function hobi() {
    global $hobi;
    $hobi = "Membaca";
    echo "Hobi saya adalah $hobi\n";
}

$hobi = "Olahraga";

hobi();
echo "Hobi saya adalah $hobi";