<?php

namespace App\Enums;

enum CustomerRole: string
{
    case SILVER = 'silver';
    case GOLD = 'gold';
    case PLATINUM = 'platinum';
    case DIAMOND = 'diamond';
}
