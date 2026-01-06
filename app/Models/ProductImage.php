<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductImage extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'product_id',
        'title',
        'src',
        'order',
        'img_alt',
        'status',
        'herlan_img_id',
        'herlan_img_src',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'product_images';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
