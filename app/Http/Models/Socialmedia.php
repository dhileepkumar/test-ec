<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AbSocialmedia
 */
class AbSocialmedia extends Model
{
    protected $table = 'ab_socialmedia';

    protected $primaryKey = 'sm_id';

	public $timestamps = true;

    protected $fillable = [
        'sm_name',
        'sm_link',
        'sm_image',
        'sm_icon'
    ];

    protected $guarded = [];

        
}