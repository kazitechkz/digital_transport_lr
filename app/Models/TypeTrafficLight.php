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
 * Class TypeTrafficLight
 *
 * @property int $id
 * @property string $title_ru
 * @property string|null $title_kk
 * @property string|null $title_en
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|TrafficLightOnRoadway[] $traffic_light_on_roadways
 *
 * @package App\Models
 */
class TypeTrafficLight extends Model
{
    use CRUD;
	protected $table = 'type_traffic_lights';

	protected $fillable = [
		'title_ru',
		'title_kk',
		'title_en'
	];

	public function traffic_light_on_roadways()
	{
		return $this->hasMany(TrafficLightOnRoadway::class, 'traffic_light_type_id');
	}
}
