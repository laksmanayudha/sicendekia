<?php

namespace App\Models;

use App\Enums\ReturnBookCondion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReturnBookCheck extends Model
{
    protected $fillable = [
        'return_book_id',
        'condition',
        'notes'
    ];

    protected function casts(): array
    {
        return [
            'condition' => ReturnBookCondion::class
        ];
    }

    public function returnBook(): BelongsTo
    {
        return $this->belongsTo(ReturnBook::class);
    }
}
