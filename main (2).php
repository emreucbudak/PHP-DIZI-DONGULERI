<?php
/******************************************************************************

    Emre Üçbudak Karadeniz Teknik Üniversitesi

*******************************************************************************/
// PHP DIZI DONGULERI
$dizi = array("Emre","Üçbudak","Karadeniz","Teknik","Üniversitesi");
// 1. FOR EACH
foreach ($dizi as $kelime) {
    echo($kelime);
}
// 2. FOR DÖNGÜSÜ
for ($i = 0; $i < count($dizi); $i++) {
     echo($i." " . $dizi[$i]);
}
?>
