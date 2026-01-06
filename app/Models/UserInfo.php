<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserInfo extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'bio',
        'current_balance',
        'total_conversion',
        'total_earnings',
        'tiktalk_profile_link',
        'is_tiktalk_varified',
        'fb_profile_link',
        'is_fb_verified',
        'youtube_profile_link',
        'is_youtube_verified',
        'tin_number',
        'bin_number',
        'tin_cert_img',
        'nid',
        'insta_profile_link',
        'is_insta_verified',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'user_infos';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
