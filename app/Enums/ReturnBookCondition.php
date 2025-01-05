<?php

namespace App\Enums;

use App\Traits\HasOptions;

enum ReturnBookCondion: string
{
    use HasOptions;

    case GOOD = 'Sesuai';
    case DAMAGED = 'Rusak';
    case LOST = 'Hilang';
}