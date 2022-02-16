<?php

function echoActiveIf($expression, $active = 'active')
{
    if (is_bool($expression) && $expression) {
        echo $active; return;
    }

    if (is_string($expression)) {
        echo request()->routeIs($expression) ? $active : '';
    }
}
