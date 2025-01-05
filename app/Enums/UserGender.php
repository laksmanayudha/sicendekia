<?php

namespace App\Enums;

use App\Traits\HasOptions;

enum UserGender: string
{
    use HasOptions;
    
    case MALE = 'Laki - Laki';
    case FEMALE = 'Perempuan';
}