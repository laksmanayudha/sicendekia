<?php

namespace App\Enums;

enum MessageType: string
{
    case CREATED = 'Berhasil menambahkan';
    case UPDATED = 'Berhasil memperbarui';
    case DELTED = 'Berhasil menghapus';
    case ERROR = 'Terjadi kesalahan. Silakan coba lagi nanti';

    public function message(string $entity = '', ?string $error = null): string
    {
        return $this === $this::ERROR && $error
            ? "{$this->value} {$error}"
            : "{$this->value} {$entity}";
    }
}