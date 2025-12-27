<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BenefitListCategory extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'status',
        'created_by',
        'deleted_by',
        'user_type',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'benefit_list_categories';

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function benefitLists()
    {
        return $this->hasMany(BenefitList::class);
    }

    public function deletedBy()
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }
}
