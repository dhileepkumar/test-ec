<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AbUsedcoupon
 */
class AbUsedcoupon extends Model
{
    protected $table = 'ab_usedcoupon';

    protected $primaryKey = 'uc_id';

	public $timestamps = true;

    protected $fillable = [
        'cu_id',
        'user_id'
    ];

    protected $guarded = [];

        
}