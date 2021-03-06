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
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|Product[] $product
 * @property-read int|null $product_count
 * @mixin Eloquent
 * @method static Builder|Category newModelQuery()
 * @method static Builder|Category newQuery()
 * @method static Builder|Category query()
 * @method static Builder|Category whereCreatedAt($value)
 * @method static Builder|Category whereId($value)
 * @method static Builder|Category whereName($value)
 * @method static Builder|Category whereUpdatedAt($value)
 * @property string|null $image
 * @property string|null $desc
 * @property int|null $parent_id
 * @property-read Category|null $parent
 * @property-read Collection|Category[] $sub
 * @property-read int|null $sub_count
 * @method static Builder|Category whereDesc($value)
 * @method static Builder|Category whereImage($value)
 * @method static Builder|Category whereParentId($value)
 */
class Category extends Model {
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = ['name', 'image', 'desc', 'parent_id'];

    public $timestamps = true;

    public function product(): HasMany {
        return $this->hasMany(Product::class);
    }

    public function parent(): BelongsTo {
        return $this->belongsTo(ParentCategory::class);
    }
}
