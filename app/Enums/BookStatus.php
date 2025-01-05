<?php

namespace App\Enums;

use App\Traits\HasOptions;

enum BookStatus: string
{
    use HasOptions;

    case AVAILABLE = 'Tersedia';
    case UNAVAILABLE = 'Tidak Tersedia';
    case LOAN = 'Dipinjam';
    case LOST = 'Hilang';
    case DAMAGED = 'Rusak';
}