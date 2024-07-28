<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FencingAndGuideOnRoadway
 * 
 * @property int $id
 * @property int $order
 * @property float $start_m
 * @property float $end_m
 * @property float $qty
 * @property int $street_id
 * @property int $side_id
 * @property int $fencing_guide_type_id
 * @property int $unit_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property FencingAndGuideType $fencing_and_guide_type
 * @property Side $side
 * @property Street $street
 * @property Unit $unit
 *
 * @package App\Models
 */
class FencingAndGuideOnRoadway extends Model
{
	protected $table = 'fencing_and_guide_on_roadways';

	protected $casts = [
		'order' => 'int',
		'start_m' => 'float',
		'end_m' => 'float',
		'qty' => 'float',
		'street_id' => 'int',
		'side_id' => 'int',
		'fencing_guide_type_id' => 'int',
		'unit_id' => 'int'
	];

	protected $fillable = [
		'order',
		'start_m',
		'end_m',
		'qty',
		'street_id',
		'side_id',
		'fencing_guide_type_id',
		'unit_id'
	];

	public function fencing_and_guide_type()
	{
		return $this->belongsTo(FencingAndGuideType::class, 'fencing_guide_type_id');
	}

	public function side()
	{
		return $this->belongsTo(Side::class);
	}

	public function street()
	{
		return $this->belongsTo(Street::class);
	}

	public function unit()
	{
		return $this->belongsTo(Unit::class);
	}
}
