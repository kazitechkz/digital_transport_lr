<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SideStoneOnRoadway
 * 
 * @property int $id
 * @property int $order
 * @property float $start_m
 * @property float $end_m
 * @property float $length_m
 * @property int $street_id
 * @property int $side_id
 * @property int $side_stone_stamp_id
 * @property int $side_stone_type_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Side $side
 * @property SideStoneStamp $side_stone_stamp
 * @property SideStoneType $side_stone_type
 * @property Street $street
 *
 * @package App\Models
 */
class SideStoneOnRoadway extends Model
{
	protected $table = 'side_stone_on_roadways';

	protected $casts = [
		'order' => 'int',
		'start_m' => 'float',
		'end_m' => 'float',
		'length_m' => 'float',
		'street_id' => 'int',
		'side_id' => 'int',
		'side_stone_stamp_id' => 'int',
		'side_stone_type_id' => 'int'
	];

	protected $fillable = [
		'order',
		'start_m',
		'end_m',
		'length_m',
		'street_id',
		'side_id',
		'side_stone_stamp_id',
		'side_stone_type_id'
	];

	public function side()
	{
		return $this->belongsTo(Side::class);
	}

	public function side_stone_stamp()
	{
		return $this->belongsTo(SideStoneStamp::class);
	}

	public function side_stone_type()
	{
		return $this->belongsTo(SideStoneType::class);
	}

	public function street()
	{
		return $this->belongsTo(Street::class);
	}
}
