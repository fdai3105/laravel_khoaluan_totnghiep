<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductHasAttribute extends Model {
    use HasFactory;

    protected $table = 'product_has_attributes';

    protected $fillable = ['product_id', 'attribute_id', 'attribute'];

    public $timestamps = true;

    public function product(): BelongsTo {
        return $this->belongsTo(Product::class, 'attribute_id');

    }

    public function attributee(): BelongsTo {
        return $this->belongsTo(Attribute::class, 'attribute_id');
    }
}
