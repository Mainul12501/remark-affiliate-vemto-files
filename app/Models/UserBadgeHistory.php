<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserBadgeHistory extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'affiliate_badge_id',
        'assigned_date',
        'assigned_till',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'user_badge_histories';

    public function agentOrInfluencer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function affiliateBadge()
    {
        return $this->belongsTo(AffiliateBadge::class);
    }
}
