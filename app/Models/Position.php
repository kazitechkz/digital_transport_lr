<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Position
 * 
 * @property int $id
 * @property string $title_ru
 * @property string|null $title_kk
 * @property string|null $title_en
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|SidewalkOnRoadway[] $sidewalk_on_roadways
 *
 * @package App\Models
 */
class Position extends Model
{
	protected $table = 'positions';

	protected $fillable = [
		'title_ru',
		'title_kk',
		'title_en'
	];

	public function sidewalk_on_roadways()
	{
		return $this->hasMany(SidewalkOnRoadway::class);
	}
}
