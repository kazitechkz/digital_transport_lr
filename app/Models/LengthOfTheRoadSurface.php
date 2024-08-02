<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Traits\CRUD;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LengthOfTheRoadSurface
 *
 * @property int $id
 * @property int $order
 * @property float $start
 * @property float $end
 * @property float $total_length
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
class LengthOfTheRoadSurface extends Model
{
    use CRUD;
	protected $table = 'length_of_the_road_surfaces';

	protected $casts = [
		'order' => 'int',
		'start' => 'float',
		'end' => 'float',
		'total_length' => 'float',
		'street_id' => 'int',
		'coverage_type_id' => 'int'
	];

	protected $fillable = [
		'order',
		'start',
		'end',
		'total_length',
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
