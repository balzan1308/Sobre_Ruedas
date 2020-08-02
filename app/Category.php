<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Category extends Model
{
    protected $fillable = [
        'name','slug', 'description'
    ];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public static function scopeName(Builder $query, ? string $name):Builder
    {
        if (null !== $name) {
            return $query->where('name', 'like', "%$name%");
        }
        return $query;
    }
}
