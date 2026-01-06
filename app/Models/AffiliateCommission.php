<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AffiliateCommission extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'payment_type',
        'commission_type',
        'amount',
        'title',
        'note',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'affiliate_commissions';
}
