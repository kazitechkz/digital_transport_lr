<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Traits\CRUD;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PedestrianCrossingOnRoadway
 *
 * @property int $id
 * @property int $order
 * @property float $address_length_m
 * @property bool $bus_stop_has_pedestrian
 * @property int $street_id
 * @property int $pc_type_id
 * @property int $pc_position_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property PedestrianCrossingPosition $pedestrian_crossing_position
 * @property PedestrianCrossingType $pedestrian_crossing_type
 * @property Street $street
 *
 * @package App\Models
 */
class PedestrianCrossingOnRoadway extends Model
{
    use CRUD;
	protected $table = 'pedestrian_crossing_on_roadways';

	protected $casts = [
		'order' => 'int',
		'address_length_m' => 'float',
		'bus_stop_has_pedestrian' => 'bool',
		'street_id' => 'int',
		'pc_type_id' => 'int',
		'pc_position_id' => 'int'
	];

	protected $fillable = [
		'order',
		'address_length_m',
		'bus_stop_has_pedestrian',
		'street_id',
		'pc_type_id',
		'pc_position_id'
	];

	public function pedestrian_crossing_position()
	{
		return $this->belongsTo(PedestrianCrossingPosition::class, 'pc_position_id');
	}

	public function pedestrian_crossing_type()
	{
		return $this->belongsTo(PedestrianCrossingType::class, 'pc_type_id');
	}

	public function street()
	{
		return $this->belongsTo(Street::class);
	}
}
