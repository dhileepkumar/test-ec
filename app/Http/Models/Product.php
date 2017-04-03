<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AbProduct
 */
class AbProduct extends Model
{
    protected $table = 'ab_product';

    protected $primaryKey = 'pr_id';

	public $timestamps = true;

    protected $fillable = [
        'pr_name',
        'pr_metatitle',
        'pr_metadescription',
        'pr_srtdesc',
        'pr_longdesc',
        'pr_ct_id',
        'pr_price',
        'pr_dis',
        'pr_manufacturer',
        'pr_qty',
        'pr_img',
        'pr_status',
        'pr_hits',
        'creted_by',
        'updated_by'
    ];

    protected $guarded = [];

        
}