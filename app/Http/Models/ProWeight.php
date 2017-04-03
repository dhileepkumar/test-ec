<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AbProWeight
 */
class AbProWeight extends Model
{
    protected $table = 'ab_pro_weight';

    protected $primaryKey = 'ab_pw_id';

	public $timestamps = true;

    protected $fillable = [
        'ab_pr_id',
        'ab_we_id',
        'pw_pro_qty',
        'pw_pro_price',
        'creted_by',
        'updated_by'
    ];

    protected $guarded = [];

        
}