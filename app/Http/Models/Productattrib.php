<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AbProductattrib
 */
class AbProductattrib extends Model
{
    protected $table = 'ab_productattrib';

    protected $primaryKey = 'wl_id';

	public $timestamps = true;

    protected $fillable = [
        'wl_pr_id',
        'wl_us_id',
        'wl_we_id'
    ];

    protected $guarded = [];

        
}