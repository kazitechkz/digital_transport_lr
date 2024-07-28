<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Side
 * 
 * @property int $id
 * @property string $title_ru
 * @property string|null $title_kk
 * @property string|null $title_en
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|ArchitecturalFormOnRoadway[] $architectural_form_on_roadways
 * @property Collection|FencingAndGuideOnRoadway[] $fencing_and_guide_on_roadways
 * @property Collection|LandingTypeOnRoadway[] $landing_type_on_roadways
 * @property Collection|LightingOnRoadway[] $lighting_on_roadways
 * @property Collection|PublicStopsOnTheHighway[] $public_stops_on_the_highways
 * @property Collection|Roadway[] $roadways
 * @property Collection|SideStoneOnRoadway[] $side_stone_on_roadways
 * @property Collection|SidewalkOnRoadway[] $sidewalk_on_roadways
 * @property Collection|SpillwayInfrastructure[] $spillway_infrastructures
 * @property Collection|TrafficLightOnRoadway[] $traffic_light_on_roadways
 *
 * @package App\Models
 */
class Side extends Model
{
	protected $table = 'sides';

	protected $fillable = [
		'title_ru',
		'title_kk',
		'title_en'
	];

	public function architectural_form_on_roadways()
	{
		return $this->hasMany(ArchitecturalFormOnRoadway::class);
	}

	public function fencing_and_guide_on_roadways()
	{
		return $this->hasMany(FencingAndGuideOnRoadway::class);
	}

	public function landing_type_on_roadways()
	{
		return $this->hasMany(LandingTypeOnRoadway::class);
	}

	public function lighting_on_roadways()
	{
		return $this->hasMany(LightingOnRoadway::class);
	}

	public function public_stops_on_the_highways()
	{
		return $this->hasMany(PublicStopsOnTheHighway::class);
	}

	public function roadways()
	{
		return $this->hasMany(Roadway::class);
	}

	public function side_stone_on_roadways()
	{
		return $this->hasMany(SideStoneOnRoadway::class);
	}

	public function sidewalk_on_roadways()
	{
		return $this->hasMany(SidewalkOnRoadway::class);
	}

	public function spillway_infrastructures()
	{
		return $this->hasMany(SpillwayInfrastructure::class);
	}

	public function traffic_light_on_roadways()
	{
		return $this->hasMany(TrafficLightOnRoadway::class);
	}
}
