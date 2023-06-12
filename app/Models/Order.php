<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Ramsey\Uuid\Uuid;

class Order extends Pivot
{
    public $incrementing = false;
    public $keyType = 'string';
    // public $timestamps = true;

    public function newUniqueId(): string
    {
        return (string) Uuid::uuid4();
    }


    public function uniqueIds(): array
    {
        return ['uuid'];
    }

    public function barangs()
    {
        return $this->belongsTo(Barang::class, 'barang_id', 'id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
