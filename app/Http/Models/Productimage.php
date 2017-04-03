<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AbProductimage
 */
class AbProductimage extends Model
{
    protected $table = 'ab_productimages';

    protected $primaryKey = 'pm_id';

	public $timestamps = true;

    protected $fillable = [
        'pm_name',
        'pm_pr_id',
        'creted_by',
        'updated_by'
    ];

    protected $guarded = [];

        
}