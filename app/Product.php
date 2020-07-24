<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
    protected $fillable = [
        'name','description', 'image','price', 'active'
    ];

    
    public function category()
    {
        return $this->hasMany('App\Category');
    }

   
    public function stock()
    {
        return $this->hasOne('App\Stock');
    }

     /**
     * @param Builder $query
     * @param string|null $name
     * @return Builder
     */
    public static function scopeName(Builder $query, ? string $name):Builder
    {
        if (null !== $name) {
            return $query->where('name', 'like', "%$name%");
        }
        return $query;
    }
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
    public function userView()
    {
        $products = Product::active()->get();
         //$products = DB::table('products')->paginate(1);
        return view('products.indexClient', compact('products'));
    }
}
