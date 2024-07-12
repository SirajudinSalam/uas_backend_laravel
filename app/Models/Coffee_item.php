<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee_item extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = "coffeeitems";
    protected $fillable = [
        'name',
        'description',
        'price',
        'category_id',
        'image_url',
        'volume',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
