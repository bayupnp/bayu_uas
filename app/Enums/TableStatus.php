<?php

namespace App\Enums;

enum TableStatus: string
{
    case Pending = 'Pending';
    case Avalaiable = 'Avalaiable';
    case Unavaliable = 'Unavaliable';
}
