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
 * App\Models\Order
 *
 * @property-read Address $address
 * @property-read Collection|OrderDetail[] $orderDetail
 * @property-read int|null $order_detail_count
 * @property-read User $user
 * @mixin Eloquent
 * @method static Builder|Order newModelQuery()
 * @method static Builder|Order newQuery()
 * @method static Builder|Order query()
 * @property int $id
 * @property string $status
 * @property int $total
 * @property string $note
 * @property int $address_id
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Order whereAddressId($value)
 * @method static Builder|Order whereCreatedAt($value)
 * @method static Builder|Order whereId($value)
 * @method static Builder|Order whereNote($value)
 * @method static Builder|Order whereStatus($value)
 * @method static Builder|Order whereTotal($value)
 * @method static Builder|Order whereUpdatedAt($value)
 * @method static Builder|Order whereUserId($value)
 */
class Order extends Model {
    use HasFactory;

    protected $table = 'orders';

    protected $guarded = ['id'];

    protected $fillable = ['status', 'total', 'note', 'address_id', 'user_id'];

    public $timestamps = true;

    public function address(): BelongsTo {
        return $this->belongsTo(Address::class, 'address_id');
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function orderDetail(): HasMany {
        return $this->hasMany(OrderDetail::class);
    }
}
