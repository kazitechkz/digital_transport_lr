<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Traits\CRUD;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoadMarkingMaterial
 *
 * @property int $id
 * @property string $title_ru
 * @property string|null $title_kk
 * @property string|null $title_en
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|InformationOfRoadMarking[] $information_of_road_markings
 *
 * @package App\Models
 */
class RoadMarkingMaterial extends Model
{
    use CRUD;
	protected $table = 'road_marking_materials';

	protected $fillable = [
		'title_ru',
		'title_kk',
		'title_en'
	];

	public function information_of_road_markings()
	{
		return $this->hasMany(InformationOfRoadMarking::class);
	}
}
