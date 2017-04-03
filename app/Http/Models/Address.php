<?php
namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * Class AbAddress
 */
class Address extends Model
{
    protected $table = 'ab_address';

    protected $primaryKey = 'ab_ad_id';

	public $timestamps = true;

    protected $fillable = [
        'ab_us_id',
        'street_1',
        'street_2',
        'city',
        'region',
        'country',
        'postcode',
        'phone',
        'ad_type'
    ];

    protected $guarded = [];

        
}