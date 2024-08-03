<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Traits\CRUD;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TrafficLightOnRoadway
 *
 * @property int $id
 * @property int $order
 * @property float $on_axis
 * @property bool $have_controller
 * @property int $traffic_light_qty
 * @property int $pedestrian_traffic_light_qty
 * @property int $rotary_section_qty
 * @property bool $have_column
 * @property int $street_id
 * @property int $side_id
 * @property int $traffic_light_type_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Side $side
 * @property Street $street
 * @property TypeTrafficLight $type_traffic_light
 *
 * @package App\Models
 */
class TrafficLightOnRoadway extends Model
{
    use CRUD;
	protected $table = 'traffic_light_on_roadways';

	protected $casts = [
		'order' => 'int',
		'on_axis' => 'float',
		'have_controller' => 'bool',
		'traffic_light_qty' => 'int',
		'pedestrian_traffic_light_qty' => 'int',
		'rotary_section_qty' => 'int',
		'have_column' => 'bool',
		'street_id' => 'int',
		'side_id' => 'int',
		'traffic_light_type_id' => 'int'
	];

	protected $fillable = [
		'order',
		'on_axis',
		'have_controller',
		'traffic_light_qty',
		'pedestrian_traffic_light_qty',
		'rotary_section_qty',
		'have_column',
		'street_id',
		'side_id',
		'traffic_light_type_id'
	];

	public function side()
	{
		return $this->belongsTo(Side::class);
	}

	public function street()
	{
		return $this->belongsTo(Street::class);
	}

	public function type_traffic_light()
	{
		return $this->belongsTo(TypeTrafficLight::class, 'traffic_light_type_id');
	}
}
