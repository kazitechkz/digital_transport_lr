<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LightingOnRoadway
 * 
 * @property int $id
 * @property int $order
 * @property float $on_axis_m
 * @property string|null $lighting_target
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
class LightingOnRoadway extends Model
{
	protected $table = 'lighting_on_roadways';

	protected $casts = [
		'order' => 'int',
		'on_axis_m' => 'float',
		'street_id' => 'int',
		'side_id' => 'int'
	];

	protected $fillable = [
		'order',
		'on_axis_m',
		'lighting_target',
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
