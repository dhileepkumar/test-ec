<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AbCm
 */
class Cms extends Model
{
    protected $table = 'ab_cms';

    protected $primaryKey = 'cms_id';

	public $timestamps = true;

    protected $fillable = [
        'cms_name',
        'cms_desc',
        'cms_position',
        'cms_status',
        'created_by',
        'updated_by'
    ];

    protected $guarded = [];

        
}