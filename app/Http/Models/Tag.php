<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AbTag
 */
class AbTag extends Model
{
    protected $table = 'ab_tags';

    protected $primaryKey = 'tg_id';

	public $timestamps = true;

    protected $fillable = [
        'tg_name',
        'tg_pr_id',
        'creted_by',
        'updated_by'
    ];

    protected $guarded = [];

        
}