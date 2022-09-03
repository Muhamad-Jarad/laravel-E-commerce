<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 */
class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function category()
    {
        $this->belongsTo(App\Models\Category::class,'category_id');
    }
}
