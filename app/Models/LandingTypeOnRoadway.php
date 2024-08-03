<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Traits\CRUD;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LandingTypeOnRoadway
 *
 * @property int $id
 * @property int $order
 * @property float $start_m
 * @property float $end_m
 * @property float $width_start_m
 * @property float $width_end_m
 * @property float $square_m
 * @property int $street_id
 * @property int $side_id
 * @property int $landing_type_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property LandingType $landing_type
 * @property Side $side
 * @property Street $street
 *
 * @package App\Models
 */
class LandingTypeOnRoadway extends Model
{
    use CRUD;
	protected $table = 'landing_type_on_roadways';

	protected $casts = [
		'order' => 'int',
		'start_m' => 'float',
		'end_m' => 'float',
		'width_start_m' => 'float',
		'width_end_m' => 'float',
		'square_m' => 'float',
		'street_id' => 'int',
		'side_id' => 'int',
		'landing_type_id' => 'int'
	];

	protected $fillable = [
		'order',
		'start_m',
		'end_m',
		'width_start_m',
		'width_end_m',
		'square_m',
		'street_id',
		'side_id',
		'landing_type_id'
	];

	public function landing_type()
	{
		return $this->belongsTo(LandingType::class);
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
