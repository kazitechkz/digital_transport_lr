<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoverageType
 * 
 * @property int $id
 * @property string $title_ru
 * @property string|null $title_kk
 * @property string|null $title_en
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|IntersectionAndJunctionOnRoadway[] $intersection_and_junction_on_roadways
 * @property Collection|LengthOfTheRoadSurface[] $length_of_the_road_surfaces
 * @property Collection|Roadway[] $roadways
 * @property Collection|SidewalkOnRoadway[] $sidewalk_on_roadways
 *
 * @package App\Models
 */
class CoverageType extends Model
{
	protected $table = 'coverage_types';

	protected $fillable = [
		'title_ru',
		'title_kk',
		'title_en'
	];

	public function intersection_and_junction_on_roadways()
	{
		return $this->hasMany(IntersectionAndJunctionOnRoadway::class);
	}

	public function length_of_the_road_surfaces()
	{
		return $this->hasMany(LengthOfTheRoadSurface::class);
	}

	public function roadways()
	{
		return $this->hasMany(Roadway::class);
	}

	public function sidewalk_on_roadways()
	{
		return $this->hasMany(SidewalkOnRoadway::class);
	}
}
