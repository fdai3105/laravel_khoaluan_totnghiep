<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
    use HasFactory, Notifiable;

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
