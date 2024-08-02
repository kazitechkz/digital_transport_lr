<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Traits\CRUD;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LandscapingOnRoadway
 *
 * @property int $id
 * @property int $order
 * @property float $start_location_right_km
 * @property float $start_location_right_m
 * @property float $end_location_right_km
 * @property float $end_location_right_m
 * @property float $start_location_left_km
 * @property float $start_location_left_m
 * @property float $end_location_left_km
 * @property float $end_location_left_m
 * @property float $two_row_m
 * @property float $three_row_m
 * @property float $four_row_m
 * @property float $five_row_m
 * @property float $six_row_m
 * @property float $eight_row_m
 * @property float $total_length_m
 * @property float $decorative_length_km
 * @property float $length_to_edge_m
 * @property int $street_id
 * @property int $landscaping_condition_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property LandscapingCondition $landscaping_condition
 * @property Street $street
 *
 * @package App\Models
 */
class LandscapingOnRoadway extends Model
{
    use CRUD;
	protected $table = 'landscaping_on_roadways';

	protected $casts = [
		'order' => 'int',
		'start_location_right_km' => 'float',
		'start_location_right_m' => 'float',
		'end_location_right_km' => 'float',
		'end_location_right_m' => 'float',
		'start_location_left_km' => 'float',
		'start_location_left_m' => 'float',
		'end_location_left_km' => 'float',
		'end_location_left_m' => 'float',
		'two_row_m' => 'float',
		'three_row_m' => 'float',
		'four_row_m' => 'float',
		'five_row_m' => 'float',
		'six_row_m' => 'float',
		'eight_row_m' => 'float',
		'total_length_m' => 'float',
		'decorative_length_km' => 'float',
		'length_to_edge_m' => 'float',
		'street_id' => 'int',
		'landscaping_condition_id' => 'int'
	];

	protected $fillable = [
		'order',
		'start_location_right_km',
		'start_location_right_m',
		'end_location_right_km',
		'end_location_right_m',
		'start_location_left_km',
		'start_location_left_m',
		'end_location_left_km',
		'end_location_left_m',
		'two_row_m',
		'three_row_m',
		'four_row_m',
		'five_row_m',
		'six_row_m',
		'eight_row_m',
		'total_length_m',
		'decorative_length_km',
		'length_to_edge_m',
		'street_id',
		'landscaping_condition_id'
	];

	public function landscaping_condition()
	{
		return $this->belongsTo(LandscapingCondition::class);
	}

	public function street()
	{
		return $this->belongsTo(Street::class);
	}
}
