<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
 */
class Rating extends Model {
    use HasFactory;

    protected $table = 'ratings';

    protected $fillable = ['rating', 'comment', 'product_id', 'user_id'];

    public $timestamps = true;

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
