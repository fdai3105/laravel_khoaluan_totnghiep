<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ParentCategory extends Model
{
    use HasFactory;

    protected $table = 'parent_categories';

    protected $fillable = ['name', 'image', 'desc'];

    public $timestamps = true;

    public function sub(): HasMany {
        return $this->hasMany(Category::class,'parent_id');
    }
}
