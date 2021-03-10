<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Testing\Fluent\Concerns\Has;

class Product extends Model {
    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['name', 'price', 'desc', 'category_id', 'brand_id'];

    public $timestamps = true;

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function brand(): BelongsTo {
        return $this->belongsTo(Brand::class);
    }

    public function attributes(): HasMany {
        return $this->hasMany(ProductHasAttribute::class);
    }

    public function comments(): HasMany {
        return $this->hasMany(Comment::class);
    }

    public function ratings(): HasMany {
        return $this->hasMany(Rating::class);
    }
}
