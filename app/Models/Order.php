<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model {
    use HasFactory;

    protected $table = 'order';

    protected $fillable = ['status', 'total', 'note', 'address_id', 'user_id'];

    public $timestamps = true;

    public function address(): BelongsTo {
        return $this->belongsTo(Address::class, 'address_id');
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function orderDetail(): HasMany {
        return $this->hasMany(OrderDetail::class);
    }
}
