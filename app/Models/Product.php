<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Product
 *
 * @property int $id
 * @property string $name
 * @property int $price
 * @property string $desc
 * @property int $category_id
 * @property int $brand_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|ProductHasAttribute[] $attributes
 * @property-read int|null $attributes_count
 * @property-read Brand $brand
 * @property-read Category $category
 * @property-read Collection|Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read Collection|Rating[] $ratings
 * @property-read int|null $ratings_count
 * @mixin Eloquent
 */
class Product extends Model {
    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['name', 'price', 'desc', 'category_id', 'brand_id'];

    public $timestamps = true;

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function brand(): BelongsTo {
        return $this->belongsTo(Brand::class);
    }

    public function attributes(): HasMany {
        return $this->hasMany(ProductHasAttribute::class);
    }

    public function comments(): HasMany {
        return $this->hasMany(Comment::class);
    }

    public function ratings(): HasMany {
        return $this->hasMany(Rating::class);
    }
}
