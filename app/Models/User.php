<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use App\Models\Scopes\Searchable;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use HasFactory;
    use Searchable;
    use SoftDeletes;
    use HasApiTokens;
    use HasProfilePhoto;
    use TwoFactorAuthenticatable;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'password',
        'mobile',
        'user_type',
        'profile_image',
        'provider',
        'provider_token',
        'provider_id',
        'username',
        'approved_by',
        'approve_status',
        'block_status',
        'created_by',
        'reffered_agent_url',
        'reffer_code',
        'ref_influencer_count',
        'affiliate_badge_id',
        'has_infl_partner_access',
        'is_super_dev',
        'user_slug',
    ];

    protected $searchableFields = ['*'];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_secret',
        'two_factor_recovery_codes',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'two_factor_confirmed_at' => 'datetime',
    ];

    public function agentUser()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function influencers()
    {
        return $this->hasMany(User::class, 'user_id');
    }

    public function userInfo()
    {
        return $this->hasOne(UserInfo::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function createdByUsers()
    {
        return $this->hasMany(User::class, 'created_by');
    }

    public function createdBanks()
    {
        return $this->hasMany(Bank::class, 'created_by');
    }

    public function userBankInfos()
    {
        return $this->hasMany(UserBankInfo::class);
    }

    public function createdBenefitListCategories()
    {
        return $this->hasMany(BenefitListCategory::class, 'created_by');
    }

    public function deletedBenefitListCategories2()
    {
        return $this->hasMany(BenefitListCategory::class, 'deleted_by');
    }

    public function affiliateBadge()
    {
        return $this->belongsTo(AffiliateBadge::class);
    }

    public function userBadgeHistories()
    {
        return $this->hasMany(UserBadgeHistory::class);
    }

    public function affiliateCodes()
    {
        return $this->hasMany(AffiliateCode::class, 'created_by');
    }

    public function influencerCampains()
    {
        return $this->hasMany(InfluencerCampain::class, 'created_by');
    }

    public function giveawayProductRequirementRequestedUsers()
    {
        return $this->hasMany(
            GiveawayProductRequirement::class,
            'requested_user_id'
        );
    }

    public function giveawayProductRequirementAdminViewers()
    {
        return $this->hasMany(
            GiveawayProductRequirement::class,
            'admin_viewer_id'
        );
    }

    public function giveawayProductRequirementApprovedByUsers()
    {
        return $this->hasMany(GiveawayProductRequirement::class, 'approver_id');
    }

    public function approvedBy()
    {
        return $this->hasOne(User::class, 'approved_by');
    }

    public function approvedByUser()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    public function isSuperAdmin(): bool
    {
        return in_array($this->email, config('auth.super_admins'));
    }
}
