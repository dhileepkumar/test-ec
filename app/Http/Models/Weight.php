<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AbWeight
 */
class AbWeight extends Model
{
    protected $table = 'ab_weight';

    protected $primaryKey = 'ab_we_id';

	public $timestamps = true;

    protected $fillable = [
        'we_name',
        'we_status',
        'creted_by',
        'updated_by'
    ];

    protected $guarded = [];

        
}