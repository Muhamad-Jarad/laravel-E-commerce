<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $category_name
 * @method static find($id)
 */
class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['category_name'];

    public static function create(array $all)
    {
    }

    public static function latest()
    {
    }

    public static function orderBy(string $string)
    {
    }

    public function products() {
        return $this->hasMany(App\Model\Product::class);
    }

}
