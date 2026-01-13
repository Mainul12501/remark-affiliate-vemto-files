<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'product_brand_id',
        'title',
        'slug',
        'thumb_img',
        'regular_price',
        'price',
        'sale_price',
        'sku',
        'status',
        'herlan_product_id',
        'herlan_product_uri',
        'affiliate_commission_rate',
        'total_clicked',
        'sold_count',
        'short_description',
        'long_description',
    ];

    protected $searchableFields = ['*'];

    public function productBrand()
    {
        return $this->belongsTo(ProductBrand::class);
    }

    public function productImages()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function affiliateCodes()
    {
        return $this->hasMany(AffiliateCode::class);
    }

    public function giveawayProductRequirementRequestedProducts()
    {
        return $this->hasMany(
            GiveawayProductRequirement::class,
            'requested_product_id'
        );
    }

    public function productCategories()
    {
        return $this->belongsToMany(ProductCategory::class);
    }
}
