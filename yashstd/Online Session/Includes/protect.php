<?php
function protect($string)
{
    $string=addslashes($string);
    return $string;
}
?>