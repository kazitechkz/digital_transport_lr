<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Traits\CRUD;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class IntersectionAndJunctionOnRoadway
 *
 * @property int $id
 * @property int $order
 * @property float $location_right_km
 * @property float $location_right_m
 * @property float $location_left_km
 * @property float $location_left_m
 * @property bool $has_transiotional_high_speed_lanes
 * @property bool $has_road_sign
 * @property bool $has_tube
 * @property bool $has_signal_pole
 * @property bool $has_safety_island
 * @property int $street_id
 * @property int $coverage_type_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property CoverageType $coverage_type
 * @property Street $street
 *
 * @package App\Models
 */
class IntersectionAndJunctionOnRoadway extends Model
{
    use CRUD;
	protected $table = 'intersection_and_junction_on_roadways';

	protected $casts = [
		'order' => 'int',
		'location_right_km' => 'float',
		'location_right_m' => 'float',
		'location_left_km' => 'float',
		'location_left_m' => 'float',
		'has_transiotional_high_speed_lanes' => 'bool',
		'has_road_sign' => 'bool',
		'has_tube' => 'bool',
		'has_signal_pole' => 'bool',
		'has_safety_island' => 'bool',
		'street_id' => 'int',
		'coverage_type_id' => 'int'
	];

	protected $fillable = [
		'order',
		'location_right_km',
		'location_right_m',
		'location_left_km',
		'location_left_m',
		'has_transiotional_high_speed_lanes',
		'has_road_sign',
		'has_tube',
		'has_signal_pole',
		'has_safety_island',
		'street_id',
		'coverage_type_id'
	];

	public function coverage_type()
	{
		return $this->belongsTo(CoverageType::class);
	}

	public function street()
	{
		return $this->belongsTo(Street::class);
	}
}
