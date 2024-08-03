<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Traits\CRUD;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WidthRoadwayOnHighway
 *
 * @property int $id
 * @property int $order
 * @property float $start_of_region_km
 * @property float $start_of_region_m
 * @property float $end_of_region_km
 * @property float $end_of_region_m
 * @property float $reverse_width_m
 * @property float $both_width_m
 * @property float $straight_width_m
 * @property int $street_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Street $street
 *
 * @package App\Models
 */
class WidthRoadwayOnHighway extends Model
{
    use CRUD;
	protected $table = 'width_roadway_on_highways';

	protected $casts = [
		'order' => 'int',
		'start_of_region_km' => 'float',
		'start_of_region_m' => 'float',
		'end_of_region_km' => 'float',
		'end_of_region_m' => 'float',
		'reverse_width_m' => 'float',
		'both_width_m' => 'float',
		'straight_width_m' => 'float',
		'street_id' => 'int'
	];

	protected $fillable = [
		'order',
		'start_of_region_km',
		'start_of_region_m',
		'end_of_region_km',
		'end_of_region_m',
		'reverse_width_m',
		'both_width_m',
		'straight_width_m',
		'street_id'
	];

	public function street()
	{
		return $this->belongsTo(Street::class);
	}
}
