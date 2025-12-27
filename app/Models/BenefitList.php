<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BenefitList extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'benefit_list_category_id',
        'brand_title',
        'amount',
        'status',
        'slug',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'benefit_lists';

    public function benefitListCategory()
    {
        return $this->belongsTo(BenefitListCategory::class);
    }
}
