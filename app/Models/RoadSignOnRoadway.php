<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoadSignOnRoadway
 * 
 * @property int $id
 * @property int $order
 * @property float $location_km
 * @property float $location_m
 * @property bool $has_left_adjunctions_location
 * @property bool $has_left_direct_location
 * @property bool $has_left_reverse_location
 * @property bool $has_right_adjunctions_location
 * @property bool $has_right_direct_location
 * @property bool $has_right_reverse_location
 * @property bool $has_berm
 * @property int $street_id
 * @property int $road_sign_id
 * @property int $road_sign_condition_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property RoadSignCondition $road_sign_condition
 * @property RoadSign $road_sign
 * @property Street $street
 *
 * @package App\Models
 */
class RoadSignOnRoadway extends Model
{
	protected $table = 'road_sign_on_roadways';

	protected $casts = [
		'order' => 'int',
		'location_km' => 'float',
		'location_m' => 'float',
		'has_left_adjunctions_location' => 'bool',
		'has_left_direct_location' => 'bool',
		'has_left_reverse_location' => 'bool',
		'has_right_adjunctions_location' => 'bool',
		'has_right_direct_location' => 'bool',
		'has_right_reverse_location' => 'bool',
		'has_berm' => 'bool',
		'street_id' => 'int',
		'road_sign_id' => 'int',
		'road_sign_condition_id' => 'int'
	];

	protected $fillable = [
		'order',
		'location_km',
		'location_m',
		'has_left_adjunctions_location',
		'has_left_direct_location',
		'has_left_reverse_location',
		'has_right_adjunctions_location',
		'has_right_direct_location',
		'has_right_reverse_location',
		'has_berm',
		'street_id',
		'road_sign_id',
		'road_sign_condition_id'
	];

	public function road_sign_condition()
	{
		return $this->belongsTo(RoadSignCondition::class);
	}

	public function road_sign()
	{
		return $this->belongsTo(RoadSign::class);
	}

	public function street()
	{
		return $this->belongsTo(Street::class);
	}
}
