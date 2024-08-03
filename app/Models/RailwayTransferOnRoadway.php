<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Traits\CRUD;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RailwayTransferOnRoadway
 *
 * @property int $id
 * @property int $order
 * @property float $location_m
 * @property float $location_km
 * @property float $path_qty
 * @property bool $has_barrier
 * @property bool $has_road_sign
 * @property bool $has_alarm_sign
 * @property bool $has_fence
 * @property bool $has_traffic_light
 * @property bool $has_security
 * @property int $visible_distance_length
 * @property int $street_id
 * @property int $barrier_type_id
 * @property int $floor_condition_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property BarrierType $barrier_type
 * @property FlooringCondition $flooring_condition
 * @property Street $street
 *
 * @package App\Models
 */
class RailwayTransferOnRoadway extends Model
{
    use CRUD;
	protected $table = 'railway_transfer_on_roadways';

	protected $casts = [
		'order' => 'int',
		'location_m' => 'float',
		'location_km' => 'float',
		'path_qty' => 'float',
		'has_barrier' => 'bool',
		'has_road_sign' => 'bool',
		'has_alarm_sign' => 'bool',
		'has_fence' => 'bool',
		'has_traffic_light' => 'bool',
		'has_security' => 'bool',
		'visible_distance_length' => 'int',
		'street_id' => 'int',
		'barrier_type_id' => 'int',
		'floor_condition_id' => 'int'
	];

	protected $fillable = [
		'order',
		'location_m',
		'location_km',
		'path_qty',
		'has_barrier',
		'has_road_sign',
		'has_alarm_sign',
		'has_fence',
		'has_traffic_light',
		'has_security',
		'visible_distance_length',
		'street_id',
		'barrier_type_id',
		'floor_condition_id'
	];

	public function barrier_type()
	{
		return $this->belongsTo(BarrierType::class);
	}

	public function flooring_condition()
	{
		return $this->belongsTo(FlooringCondition::class, 'floor_condition_id');
	}

	public function street()
	{
		return $this->belongsTo(Street::class);
	}
}
