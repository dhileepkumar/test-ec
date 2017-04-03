<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AbContact
 */
class AbContact extends Model
{
    protected $table = 'ab_contact';

    protected $primaryKey = 'co_id';

	public $timestamps = true;

    protected $fillable = [
        'co_name',
        'co_email',
        'co_mobile',
        'co_landline',
        'co_address'
    ];

    protected $guarded = [];

        
}