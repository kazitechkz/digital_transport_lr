<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LongitudinalProfileOfTheRoad
 * 
 * @property int $id
 * @property int $order
 * @property float $start_of_region_km
 * @property float $start_of_region_m
 * @property float $end_of_region_km
 * @property float $end_of_region_m
 * @property float $length_m
 * @property float $slope
 * @property int $street_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Street $street
 *
 * @package App\Models
 */
class LongitudinalProfileOfTheRoad extends Model
{
	protected $table = 'longitudinal_profile_of_the_roads';

	protected $casts = [
		'order' => 'int',
		'start_of_region_km' => 'float',
		'start_of_region_m' => 'float',
		'end_of_region_km' => 'float',
		'end_of_region_m' => 'float',
		'length_m' => 'float',
		'slope' => 'float',
		'street_id' => 'int'
	];

	protected $fillable = [
		'order',
		'start_of_region_km',
		'start_of_region_m',
		'end_of_region_km',
		'end_of_region_m',
		'length_m',
		'slope',
		'street_id'
	];

	public function street()
	{
		return $this->belongsTo(Street::class);
	}
}
