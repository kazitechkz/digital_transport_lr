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
 * Class PedestrianCrossingPosition
 *
 * @property int $id
 * @property string $title_ru
 * @property string|null $title_kk
 * @property string|null $title_en
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|PedestrianCrossingOnRoadway[] $pedestrian_crossing_on_roadways
 *
 * @package App\Models
 */
class PedestrianCrossingPosition extends Model
{
    use CRUD;
	protected $table = 'pedestrian_crossing_positions';

	protected $fillable = [
		'title_ru',
		'title_kk',
		'title_en'
	];

	public function pedestrian_crossing_on_roadways()
	{
		return $this->hasMany(PedestrianCrossingOnRoadway::class, 'pc_position_id');
	}
}
