<?php

function dateIDFormat($carbon, $format = 'd M Y'){
    return $carbon->translatedFormat($format);
}

?>
