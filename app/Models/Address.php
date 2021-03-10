<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Address extends Model {
    use HasFactory;

    protected $table = 'addresses';

    protected $fillable = ['city', 'district', 'ward', 'address', 'user_id'];

    public $timestamps = true;

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function order(): HasMany {
        return $this->hasMany(Order::class);
    }
}
