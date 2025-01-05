<?php

namespace App\Enums;

use App\Traits\HasOptions;

enum ReturnBookStatus: string
{
    use HasOptions;

    case RETURNED = 'Dikembalikan';
    case CHECKED = 'Pengecekan';
    case FINE = 'Denda';
}