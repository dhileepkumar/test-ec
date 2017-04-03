<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AbCategory
 */
class AbCategory extends Model
{
    protected $table = 'ab_category';

    protected $primaryKey = 'ab_cat_id';

	public $timestamps = true;

    protected $fillable = [
        'ca_id',
        'ca_name',
        'ca_desc',
        'ca_url',
        'ca_order',
        'ca_status',
        'creted_by',
        'updated_by'
    ];

    protected $guarded = [];

        
}