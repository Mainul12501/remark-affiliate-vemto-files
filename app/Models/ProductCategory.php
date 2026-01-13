<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategory extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'thumb_img',
        'status',
        'herlan_cat_id',
        'herlan_cat_slug',
        'herlan_cat_uri',
        'herlan_cat_total_products',
        'product_category_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'product_categories';

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function productCategories()
    {
        return $this->hasMany(ProductCategory::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
