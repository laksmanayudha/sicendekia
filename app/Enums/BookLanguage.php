<?php

namespace App\Enums;

use App\Traits\HasOptions;

enum BookLanguage: string
{
    use HasOptions;
    
    case ENGLISH = 'English';
    case INDONESIA = 'Indonesia';
    case JAPAN = 'Jepang';
}