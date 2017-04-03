<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AbImgsetting
 */
class AbImgsetting extends Model
{
    protected $table = 'ab_imgsettings';

    protected $primaryKey = 'is_id';

	public $timestamps = true;

    protected $fillable = [
        'is_favicon',
        'is_logo',
        'is_noimg'
    ];

    protected $guarded = [];

        
}