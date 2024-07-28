<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LandingType
 * 
 * @property int $id
 * @property string $title_ru
 * @property string|null $title_kk
 * @property string|null $title_en
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|LandingTypeOnRoadway[] $landing_type_on_roadways
 *
 * @package App\Models
 */
class LandingType extends Model
{
	protected $table = 'landing_types';

	protected $fillable = [
		'title_ru',
		'title_kk',
		'title_en'
	];

	public function landing_type_on_roadways()
	{
		return $this->hasMany(LandingTypeOnRoadway::class);
	}
}
