<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Traits\CRUD;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SidewalkOnRoadway
 *
 * @property int $id
 * @property int $order
 * @property float $start_m
 * @property float $end_m
 * @property float $length_m
 * @property float $width_start_m
 * @property float $width_end_m
 * @property float $square_m
 * @property int $street_id
 * @property int $side_id
 * @property int $coverage_type_id
 * @property int $position_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property CoverageType $coverage_type
 * @property Position $position
 * @property Side $side
 * @property Street $street
 *
 * @package App\Models
 */
class SidewalkOnRoadway extends Model
{
    use CRUD;
	protected $table = 'sidewalk_on_roadways';

	protected $casts = [
		'order' => 'int',
		'start_m' => 'float',
		'end_m' => 'float',
		'length_m' => 'float',
		'width_start_m' => 'float',
		'width_end_m' => 'float',
		'square_m' => 'float',
		'street_id' => 'int',
		'side_id' => 'int',
		'coverage_type_id' => 'int',
		'position_id' => 'int'
	];

	protected $fillable = [
		'order',
		'start_m',
		'end_m',
		'length_m',
		'width_start_m',
		'width_end_m',
		'square_m',
		'street_id',
		'side_id',
		'coverage_type_id',
		'position_id'
	];

	public function coverage_type()
	{
		return $this->belongsTo(CoverageType::class);
	}

	public function position()
	{
		return $this->belongsTo(Position::class);
	}

	public function side()
	{
		return $this->belongsTo(Side::class);
	}

	public function street()
	{
		return $this->belongsTo(Street::class);
	}
}
