<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\ProductImage
 *
 * @property int $id
 * @property string $image
 * @property int $product_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @mixin Eloquent
 */
class ProductImage extends Model {
    use HasFactory;

    protected $table = 'product_images';

    protected $fillable = ['name', 'image', 'product_id'];

    public $timestamps = true;

    public function product(): BelongsTo {
        return $this->belongsTo(ProductImage::class);
    }
}
