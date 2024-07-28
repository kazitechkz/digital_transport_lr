<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoadSign
 * 
 * @property int $id
 * @property string $title_ru
 * @property string|null $title_kk
 * @property string|null $title_en
 * @property string $normative_act
 * @property string $sign_number
 * @property bool $is_active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|RoadSignOnRoadway[] $road_sign_on_roadways
 *
 * @package App\Models
 */
class RoadSign extends Model
{
	protected $table = 'road_signs';

	protected $casts = [
		'is_active' => 'bool'
	];

	protected $fillable = [
		'title_ru',
		'title_kk',
		'title_en',
		'normative_act',
		'sign_number',
		'is_active'
	];

	public function road_sign_on_roadways()
	{
		return $this->hasMany(RoadSignOnRoadway::class);
	}
}
