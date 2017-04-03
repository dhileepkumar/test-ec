<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AbCoupon
 */
class AbCoupon extends Model
{
    protected $table = 'ab_coupons';

    protected $primaryKey = 'cu_id';

	public $timestamps = true;

    protected $fillable = [
        'cu_type',
        'cu_name',
        'cu_amt',
        'ce_desc',
        'cu_from',
        'cu_to',
        'cu_user_count',
        'cu_used',
        'created_by'
    ];

    protected $guarded = [];

        
}