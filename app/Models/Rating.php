<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\Rating
 *
 * @property int $id
 * @property float $rating
 * @property string $comment
 * @property int $product_id
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Product $product
 * @property-read User $user
 * @mixin Eloquent
 * @method static Builder|Rating newModelQuery()
 * @method static Builder|Rating newQuery()
 * @method static Builder|Rating query()
 * @method static Builder|Rating whereComment($value)
 * @method static Builder|Rating whereCreatedAt($value)
 * @method static Builder|Rating whereId($value)
 * @method static Builder|Rating whereProductId($value)
 * @method static Builder|Rating whereRating($value)
 * @method static Builder|Rating whereUpdatedAt($value)
 * @method static Builder|Rating whereUserId($value)
 */
class Rating extends Model {
    use HasFactory;

    protected $table = 'ratings';

    protected $fillable = ['rating', 'comment', 'product_id', 'user_id'];

    public $timestamps = true;

    public function product(): BelongsTo {
        return $this->belongsTo(Product::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
