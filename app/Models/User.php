<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Laravel\Passport\HasApiTokens;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $phone
 * @property int $gender
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|Comment[] $comment
 * @property-read int|null $comment_count
 * @property-read DatabaseNotificationCollection|DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read Collection|Order[] $order
 * @property-read int|null $order_count
 * @property-read Collection|Rating[] $ratings
 * @property-read int|null $ratings_count
 * @property-read Collection|Reply[] $reply
 * @property-read int|null $reply_count
 * @mixin Eloquent
 * @property string|null $avatar
 * @method static Builder|User newModelQuery()
 * @method static Builder|User newQuery()
 * @method static Builder|User query()
 * @method static Builder|User whereAvatar($value)
 * @method static Builder|User whereCreatedAt($value)
 * @method static Builder|User whereEmail($value)
 * @method static Builder|User whereGender($value)
 * @method static Builder|User whereId($value)
 * @method static Builder|User whereName($value)
 * @method static Builder|User wherePassword($value)
 * @method static Builder|User wherePhone($value)
 * @method static Builder|User whereUpdatedAt($value)
 */
class User extends Authenticatable {
    use HasApiTokens,HasFactory, Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone', 'gender',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        //        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        //        'email_verified_at' => 'datetime',
    ];

    public function ratings(): HasMany {
        return $this->hasMany(Rating::class);
    }

    public function comment(): HasMany {
        return $this->hasMany(Comment::class);
    }

    public function reply(): HasMany {
        return $this->hasMany(Reply::class);
    }

    public function order(): HasMany {
        return $this->hasMany(Order::class);
    }

}
