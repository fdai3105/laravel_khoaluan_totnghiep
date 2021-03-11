<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Attribute
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|ProductHasAttribute[] $productAttribute
 * @property-read int|null $product_attribute_count
 * @mixin Eloquent
 */
class Attribute extends Model {
    use HasFactory;

    protected $table = 'attributes';

    protected $fillable = ['name'];

    public $timestamps = true;

    public function productAttribute() : HasMany {
        return $this->hasMany(ProductHasAttribute::class);
    }
}
