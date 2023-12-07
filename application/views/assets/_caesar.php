<?php

function char_to_dec_caesar($a){
    $i=ord($a);
    if ($i>=97 && $i<=122){
        return ($i-96);
    } else if ($i>=65 && $i<=90){
        return ($i-38);
    } else {
        return null;
    }
}
 
function dec_to_char_caesar($a){
    if ($a>=1 && $a<=26){
        return (chr($a+96));
    } else if ($a>=27 && $a<=52){
        return (chr($a+38));
    } else {
        return null;
    }
}
 

?>