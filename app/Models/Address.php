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
 * App\Models\Address
 *
 * @property int $id
 * @property string $city
 * @property string $district
 * @property string $ward
 * @property string $address
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|Order[] $order
 * @property-read int|null $order_count
 * @property-read User $user
 * @mixin Eloquent
 * @method static Builder|Address newModelQuery()
 * @method static Builder|Address newQuery()
 * @method static Builder|Address query()
 * @method static Builder|Address whereAddress($value)
 * @method static Builder|Address whereCity($value)
 * @method static Builder|Address whereCreatedAt($value)
 * @method static Builder|Address whereDistrict($value)
 * @method static Builder|Address whereId($value)
 * @method static Builder|Address whereUpdatedAt($value)
 * @method static Builder|Address whereUserId($value)
 * @method static Builder|Address whereWard($value)
 */
class Address extends Model {
    use HasFactory;

    protected $table = 'addresses';

    protected $fillable = ['name', 'phone', 'city', 'district', 'ward', 'address', 'show', 'user_id'];

    public $timestamps = true;

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function order(): HasMany {
        return $this->hasMany(Order::class);
    }
}
