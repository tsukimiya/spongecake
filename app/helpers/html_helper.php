<?php

function eh($string)
{
    if (!isset($string)) {
        return;
    }
    echo htmlspecialchars($string, ENT_QUOTES);
}