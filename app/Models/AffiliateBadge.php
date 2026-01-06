<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AffiliateBadge extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'img',
        'user_type',
        'min_requirement',
        'order',
        'reward_type',
        'reward_amount',
        'status',
        'description',
        'has_consistency_rule',
        'consistency_value',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'affiliate_badges';

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function userBadgeHistories()
    {
        return $this->hasMany(UserBadgeHistory::class);
    }
}
