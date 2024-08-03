<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Traits\CRUD;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PublicStopsOnTheHighwayController
 *
 * @property int $id
 * @property int $order
 * @property float $start_m
 * @property float $end_m
 * @property string|null $bus_stop
 * @property int $pavilion_qty
 * @property float $distance_to_the_roadway_m
 * @property bool $have_route
 * @property float $boarding_square_m
 * @property float $extension_square_m
 * @property int $street_id
 * @property int $side_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Side $side
 * @property Street $street
 *
 * @package App\Models
 */
class PublicStopsOnTheHighway extends Model
{
    use CRUD;
	protected $table = 'public_stops_on_the_highways';

	protected $casts = [
		'order' => 'int',
		'start_m' => 'float',
		'end_m' => 'float',
		'pavilion_qty' => 'int',
		'distance_to_the_roadway_m' => 'float',
		'have_route' => 'bool',
		'boarding_square_m' => 'float',
		'extension_square_m' => 'float',
		'street_id' => 'int',
		'side_id' => 'int'
	];

	protected $fillable = [
		'order',
		'start_m',
		'end_m',
		'bus_stop',
		'pavilion_qty',
		'distance_to_the_roadway_m',
		'have_route',
		'boarding_square_m',
		'extension_square_m',
		'street_id',
		'side_id'
	];

	public function side()
	{
		return $this->belongsTo(Side::class);
	}

	public function street()
	{
		return $this->belongsTo(Street::class);
	}
}
