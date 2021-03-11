<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Reply
 *
 * @property int $id
 * @property string $reply
 * @property int $comment_id
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Comment $comment
 * @property-read User $user
 * @mixin Eloquent
 */
class Reply extends Model {
    use HasFactory;

    protected $table = 'replies';

    protected $fillable = ['reply', 'comment_id', 'user_id'];

    public $timestamps = true;

    public function comment() {
        return $this->belongsTo(Comment::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
