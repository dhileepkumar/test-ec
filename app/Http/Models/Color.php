<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AbColor
 */
class AbColor extends Model
{
    protected $table = 'ab_colors';

    protected $primaryKey = 'ab_co_id';

	public $timestamps = true;

    protected $fillable = [
        'ab_pr_id',
        'col_name',
        'col_qty',
        'col_qty_init',
        'col_qty_used',
        'col_img',
        'col_status',
        'creted_by',
        'updated_by'
    ];

    protected $guarded = [];

        
}