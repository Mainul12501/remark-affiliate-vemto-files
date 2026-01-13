<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductBrand extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'logo',
        'status',
        'herlan_brand_id',
        'herlan_brand_slug',
        'herlan_brand_uri',
        'note',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'product_brands';

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
