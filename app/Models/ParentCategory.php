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
 * App\Models\ParentCategory
 *
 * @property int $id
 * @property string $name
 * @property string|null $image
 * @property string|null $desc
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|Category[] $sub
 * @property-read int|null $sub_count
 * @method static Builder|ParentCategory newModelQuery()
 * @method static Builder|ParentCategory newQuery()
 * @method static Builder|ParentCategory query()
 * @method static Builder|ParentCategory whereCreatedAt($value)
 * @method static Builder|ParentCategory whereDesc($value)
 * @method static Builder|ParentCategory whereId($value)
 * @method static Builder|ParentCategory whereImage($value)
 * @method static Builder|ParentCategory whereName($value)
 * @method static Builder|ParentCategory whereUpdatedAt($value)
 * @mixin Eloquent
 */
class ParentCategory extends Model
{
    use HasFactory;

    protected $table = 'parent_categories';

    protected $fillable = ['name', 'image', 'desc'];

    public $timestamps = true;

    public function sub(): HasMany {
        return $this->hasMany(Category::class,'parent_id');
    }
}
