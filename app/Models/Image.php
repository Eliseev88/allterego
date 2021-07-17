<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;

    protected $table = 'images';
    protected $fillable = [
        'image_id', 'path',
    ];

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
