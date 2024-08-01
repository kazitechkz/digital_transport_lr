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
 * Class RoadSignCondition
 *
 * @property int $id
 * @property string $title_ru
 * @property string|null $title_kk
 * @property string|null $title_en
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|RoadSignOnRoadway[] $road_sign_on_roadways
 *
 * @package App\Models
 */
class RoadSignCondition extends Model
{
    use CRUD;
	protected $table = 'road_sign_conditions';

	protected $fillable = [
		'title_ru',
		'title_kk',
		'title_en'
	];

	public function road_sign_on_roadways()
	{
		return $this->hasMany(RoadSignOnRoadway::class);
	}
}
