<?php

namespace App\Enums;

enum TableLocation: string
{
    case Front = 'Teras';
    case Inside = 'Lantai 1';
    case Outside = 'Lantai 2';
}
