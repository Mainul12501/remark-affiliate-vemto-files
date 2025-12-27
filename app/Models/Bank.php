<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bank extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = ['created_by', 'name', 'logo', 'status', 'slug'];

    protected $searchableFields = ['*'];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function userBankInfos()
    {
        return $this->hasMany(UserBankInfo::class);
    }
}
