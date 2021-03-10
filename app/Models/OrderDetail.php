<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDetail extends Model {
    use HasFactory;

    protected $table = 'order_details';

    protected $fillable = ['quantity', 'total', 'product_id', 'order_id'];

    public $timestamps = true;

    public function product(): BelongsTo {
        return $this->belongsTo(Product::class);
    }

    public function order(): BelongsTo {
        return $this->belongsTo(Order::class);
    }
}
