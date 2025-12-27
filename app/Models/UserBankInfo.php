<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserBankInfo extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'bank_id',
        'account_name',
        'branch_name',
        'routing_number',
        'cheque_img',
        'vendor_type',
        'mobile_vendor',
        'mobile_number',
        'status',
        'active_status',
        'active_till',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'user_bank_infos';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }
}
