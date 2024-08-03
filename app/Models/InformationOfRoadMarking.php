<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Traits\CRUD;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class InformationOfRoadMarking
 *
 * @property int $id
 * @property float $road_width_sm
 * @property float $road_length_m
 * @property float $road_square_m
 * @property int $street_id
 * @property int $road_marking_id
 * @property int|null $road_marking_material_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property RoadMarking $road_marking
 * @property RoadMarkingMaterial|null $road_marking_material
 * @property Street $street
 *
 * @package App\Models
 */
class InformationOfRoadMarking extends Model
{
    use CRUD;
	protected $table = 'information_of_road_markings';

	protected $casts = [
		'road_width_sm' => 'float',
		'road_length_m' => 'float',
		'road_square_m' => 'float',
		'street_id' => 'int',
		'road_marking_id' => 'int',
		'road_marking_material_id' => 'int'
	];

	protected $fillable = [
		'road_width_sm',
		'road_length_m',
		'road_square_m',
		'street_id',
		'road_marking_id',
		'road_marking_material_id'
	];

	public function road_marking()
	{
		return $this->belongsTo(RoadMarking::class);
	}

	public function road_marking_material()
	{
		return $this->belongsTo(RoadMarkingMaterial::class);
	}

	public function street()
	{
		return $this->belongsTo(Street::class);
	}
}
