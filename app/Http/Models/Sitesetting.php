<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AbSitesetting
 */
class AbSitesetting extends Model
{
    protected $table = 'ab_sitesettings';

    protected $primaryKey = 'ss_id';

	public $timestamps = true;

    protected $fillable = [
        'ss_title',
        'ss_slogan',
        'ss_off_msg',
        'ss_meta_title',
        'ss_meta_tag',
        'ss_meta_desc',
        'ss_google_act',
        'ss_alexa_code',
        'ss_pixel_code',
        'ss_currency'
    ];

    protected $guarded = [];

        
}