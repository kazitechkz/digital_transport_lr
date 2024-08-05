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
 * Class Street
 *
 * @property int $id
 * @property string $title_ru
 * @property string|null $title_kk
 * @property string|null $title_en
 * @property array $geo_position
 * @property string|null $geo_color
 * @property bool $is_active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|ArchitecturalFormOnRoadway[] $architectural_form_on_roadways
 * @property Collection|CommunicationWithinTheBandOnRoadway[] $communication_within_the_band_on_roadways
 * @property Collection|FencingAndGuideOnRoadway[] $fencing_and_guide_on_roadways
 * @property Collection|InformationOfRoadMarking[] $information_of_road_markings
 * @property Collection|IntersectionAndJunctionOnRoadway[] $intersection_and_junction_on_roadways
 * @property Collection|LandingTypeOnRoadway[] $landing_type_on_roadways
 * @property Collection|LandscapingOnRoadway[] $landscaping_on_roadways
 * @property Collection|LengthOfTheRoadSurface[] $length_of_the_road_surfaces
 * @property Collection|LightingOnRoadway[] $lighting_on_roadways
 * @property Collection|LongitudinalProfileOfTheRoad[] $longitudinal_profile_of_the_roads
 * @property Collection|PedestrianCrossingOnRoadway[] $pedestrian_crossing_on_roadways
 * @property Collection|PublicStopsOnTheHighway[] $public_stops_on_the_highways
 * @property Collection|RailwayTransferOnRoadway[] $railway_transfer_on_roadways
 * @property Collection|RoadSignOnRoadway[] $road_sign_on_roadways
 * @property Collection|Roadway[] $roadways
 * @property Collection|SideStoneOnRoadway[] $side_stone_on_roadways
 * @property Collection|SidewalkOnRoadway[] $sidewalk_on_roadways
 * @property Collection|SpillwayInfrastructure[] $spillway_infrastructures
 * @property Collection|TrafficLightOnRoadway[] $traffic_light_on_roadways
 * @property Collection|WidthRoadwayOnHighway[] $width_roadway_on_highways
 *
 * @package App\Models
 */
class Street extends Model
{
    use CRUD;
	protected $table = 'streets';

	protected $casts = [
		'geo_position' => 'json',
		'is_active' => 'bool'
	];

	protected $fillable = [
		'title_ru',
		'title_kk',
		'title_en',
		'geo_position',
		'geo_color',
		'is_active'
	];

	public function architectural_form_on_roadways()
	{
		return $this->hasMany(ArchitecturalFormOnRoadway::class);
	}

	public function communication_within_the_band_on_roadways()
	{
		return $this->hasMany(CommunicationWithinTheBandOnRoadway::class);
	}

	public function fencing_and_guide_on_roadways()
	{
		return $this->hasMany(FencingAndGuideOnRoadway::class);
	}

	public function information_of_road_markings()
	{
		return $this->hasMany(InformationOfRoadMarking::class);
	}

	public function intersection_and_junction_on_roadways()
	{
		return $this->hasMany(IntersectionAndJunctionOnRoadway::class);
	}

	public function landing_type_on_roadways()
	{
		return $this->hasMany(LandingTypeOnRoadway::class);
	}

	public function landscaping_on_roadways()
	{
		return $this->hasMany(LandscapingOnRoadway::class);
	}

	public function length_of_the_road_surfaces()
	{
		return $this->hasMany(LengthOfTheRoadSurface::class);
	}

	public function lighting_on_roadways()
	{
		return $this->hasMany(LightingOnRoadway::class);
	}

	public function longitudinal_profile_of_the_roads()
	{
		return $this->hasMany(LongitudinalProfileOfTheRoad::class);
	}

	public function pedestrian_crossing_on_roadways()
	{
		return $this->hasMany(PedestrianCrossingOnRoadway::class);
	}

	public function public_stops_on_the_highways()
	{
		return $this->hasMany(PublicStopsOnTheHighway::class);
	}

	public function railway_transfer_on_roadways()
	{
		return $this->hasMany(RailwayTransferOnRoadway::class);
	}

	public function road_sign_on_roadways()
	{
		return $this->hasMany(RoadSignOnRoadway::class);
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

	public function width_roadway_on_highways()
	{
		return $this->hasMany(WidthRoadwayOnHighway::class);
	}
}
