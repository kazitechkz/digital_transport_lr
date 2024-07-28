<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Roadway
 * 
 * @property int $id
 * @property int $order
 * @property float $start_m
 * @property float $end_m
 * @property float $square_m
 * @property int $street_id
 * @property int $side_id
 * @property int $coverage_type_id
 * @property int $category_of_highway_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CategoryOfHighway $category_of_highway
 * @property CoverageType $coverage_type
 * @property Side $side
 * @property Street $street
 *
 * @package App\Models
 */
class Roadway extends Model
{
	protected $table = 'roadways';

	protected $casts = [
		'order' => 'int',
		'start_m' => 'float',
		'end_m' => 'float',
		'square_m' => 'float',
		'street_id' => 'int',
		'side_id' => 'int',
		'coverage_type_id' => 'int',
		'category_of_highway_id' => 'int'
	];

	protected $fillable = [
		'order',
		'start_m',
		'end_m',
		'square_m',
		'street_id',
		'side_id',
		'coverage_type_id',
		'category_of_highway_id'
	];

	public function category_of_highway()
	{
		return $this->belongsTo(CategoryOfHighway::class);
	}

	public function coverage_type()
	{
		return $this->belongsTo(CoverageType::class);
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
