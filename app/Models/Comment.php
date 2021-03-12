<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\Comment
 *
 * @property int $id
 * @property string $comment
 * @property int $product_id
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Product $product
 * @property-read User $user
 * @mixin Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Reply[] $reply
 * @property-read int|null $reply_count
 * @method static Builder|Comment newModelQuery()
 * @method static Builder|Comment newQuery()
 * @method static Builder|Comment query()
 * @method static Builder|Comment whereComment($value)
 * @method static Builder|Comment whereCreatedAt($value)
 * @method static Builder|Comment whereId($value)
 * @method static Builder|Comment whereProductId($value)
 * @method static Builder|Comment whereUpdatedAt($value)
 * @method static Builder|Comment whereUserId($value)
 */
class Comment extends Model {
    use HasFactory;

    protected $table = 'comments';

    protected $fillable = ['comment', 'product_id', 'user_id'];

    public $timestamps = true;

    public function product(): BelongsTo {
        return $this->belongsTo(Product::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function reply() {
        return $this->hasMany(Reply::class);
    }
}
