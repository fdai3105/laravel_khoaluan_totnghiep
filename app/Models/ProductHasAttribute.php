<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\ProductHasAttribute
 *
 * @property int $id
 * @property string $attribute
 * @property int $product_id
 * @property int $attribute_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Attribute $attributee
 * @property-read Product $product
 * @mixin Eloquent
 */
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
