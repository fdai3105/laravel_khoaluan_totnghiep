<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Brand
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|Product[] $product
 * @property-read int|null $product_count
 * @mixin Eloquent
 * @method static Builder|Brand newModelQuery()
 * @method static Builder|Brand newQuery()
 * @method static Builder|Brand query()
 * @method static Builder|Brand whereCreatedAt($value)
 * @method static Builder|Brand whereId($value)
 * @method static Builder|Brand whereName($value)
 * @method static Builder|Brand whereUpdatedAt($value)
 * @property string|null $image
 * @property string|null $desc
 * @method static Builder|Brand whereDesc($value)
 * @method static Builder|Brand whereImage($value)
 */
class Brand extends Model {
    use HasFactory;

    protected $table = 'brands';

    protected $fillable = ['name','image','desc'];

    public function product(): HasMany {
        return $this->hasMany(Product::class);
    }
}
