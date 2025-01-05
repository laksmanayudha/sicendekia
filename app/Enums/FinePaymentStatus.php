<?php

namespace App\Enums;

use App\Traits\HasOptions;

enum FinePaymentStatus: string
{
    use HasOptions;

    case PENDING = 'Tertunda';
    case SUCCESS = 'Sukses';
    case FAILED = 'Gagal';
}