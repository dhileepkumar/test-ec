<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AbCart
 */
class AbCart extends Model
{
    protected $table = 'ab_cart';

    protected $primaryKey = 'ab_ca_id';

	public $timestamps = true;

    protected $fillable = [
        'pr_id',
        'pr_art_id',
        'pr_clr_id',
        'pr_qt_id',
        'pr_quantity',
        'creted_by',
        'updated_by'
    ];

    protected $guarded = [];

        
}