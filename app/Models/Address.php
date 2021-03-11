<?php

namespace App\Models;

use Eloquent;
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
 */
class Address extends Model {
    use HasFactory;

    protected $table = 'addresses';

    protected $fillable = ['city', 'district', 'ward', 'address', 'user_id'];

    public $timestamps = true;

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function order(): HasMany {
        return $this->hasMany(Order::class);
    }
}
