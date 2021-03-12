<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\OrderDetail
 *
 * @property int $id
 * @property int $quantity
 * @property int $total
 * @property int $product_id
 * @property int $order_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Order $order
 * @property-read Product $product
 * @mixin Eloquent
 * @method static Builder|OrderDetail newModelQuery()
 * @method static Builder|OrderDetail newQuery()
 * @method static Builder|OrderDetail query()
 * @method static Builder|OrderDetail whereCreatedAt($value)
 * @method static Builder|OrderDetail whereId($value)
 * @method static Builder|OrderDetail whereOrderId($value)
 * @method static Builder|OrderDetail whereProductId($value)
 * @method static Builder|OrderDetail whereQuantity($value)
 * @method static Builder|OrderDetail whereTotal($value)
 * @method static Builder|OrderDetail whereUpdatedAt($value)
 */
class OrderDetail extends Model {
    use HasFactory;

    protected $table = 'order_details';

    protected $fillable = ['quantity', 'total', 'product_id', 'order_id'];

    public $timestamps = true;

    public function product(): BelongsTo {
        return $this->belongsTo(Product::class);
    }

    public function order(): BelongsTo {
        return $this->belongsTo(Order::class);
    }
}
