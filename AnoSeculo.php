<?php
function AnoSeculo($ano){
$seculo=ceil($ano/100);

return 'Ano '. $ano . ' = '.'Século ' .$seculo ;
}

echo AnoSeculo(1905);
echo '</br>';
echo AnoSeculo(1700);


?>