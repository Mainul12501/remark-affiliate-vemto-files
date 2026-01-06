<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GiveawayProductRequirement extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'requested_user_id',
        'requested_product_id',
        'request_qty',
        'approved_qty',
        'is_reviewed_by_partner',
        'product_delivery_date',
        'product_ack_date',
        'slug',
        'status',
        'product_ack_status',
        'admin_viewer_id',
        'approver_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'giveaway_product_requirements';

    public function requestedBy()
    {
        return $this->belongsTo(User::class, 'requested_user_id');
    }

    public function requestedProduct()
    {
        return $this->belongsTo(Product::class, 'requested_product_id');
    }

    public function adminLastViewer()
    {
        return $this->belongsTo(User::class, 'admin_viewer_id');
    }

    public function approvedBy()
    {
        return $this->belongsTo(User::class, 'approver_id');
    }
}
