<?php

function getalbuns() {
    $albuns = glob('albuns/*');

    return $albuns;
}