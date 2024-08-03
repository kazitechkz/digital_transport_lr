<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Traits\CRUD;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CommunicationWithinTheBandOnRoadway
 *
 * @property int $id
 * @property int $order
 * @property float $location_start_km
 * @property float $location_start_m
 * @property float $location_end_km
 * @property float $location_end_m
 * @property float $distance_edge_left_m
 * @property float $distance_edge_right_m
 * @property float $place_of_intersection_km
 * @property float $place_of_intersection_m
 * @property int $street_id
 * @property int $ctype_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property CommunicationType $communication_type
 * @property Street $street
 *
 * @package App\Models
 */
class CommunicationWithinTheBandOnRoadway extends Model
{
    use CRUD;
	protected $table = 'communication_within_the_band_on_roadways';

	protected $casts = [
		'order' => 'int',
		'location_start_km' => 'float',
		'location_start_m' => 'float',
		'location_end_km' => 'float',
		'location_end_m' => 'float',
		'distance_edge_left_m' => 'float',
		'distance_edge_right_m' => 'float',
		'place_of_intersection_km' => 'float',
		'place_of_intersection_m' => 'float',
		'street_id' => 'int',
		'ctype_id' => 'int'
	];

	protected $fillable = [
		'order',
		'location_start_km',
		'location_start_m',
		'location_end_km',
		'location_end_m',
		'distance_edge_left_m',
		'distance_edge_right_m',
		'place_of_intersection_km',
		'place_of_intersection_m',
		'street_id',
		'ctype_id'
	];

	public function communication_type()
	{
		return $this->belongsTo(CommunicationType::class, 'ctype_id');
	}

	public function street()
	{
		return $this->belongsTo(Street::class);
	}
}
