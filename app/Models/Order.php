<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Order extends Pivot
{
    protected $table = 'order';

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function barangs()
    {
        return $this->belongsTo(Barang::class, 'barang_id', 'id');
    }
}
