<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'user management']);
        Permission::create(['name' => 'setting management']);
        Permission::create(['name' => 'statement management']);
        Permission::create(['name' => 'referenceBook management']);

        Permission::create(['name' => 'permission create']);
        Permission::create(['name' => 'permission read']);
        Permission::create(['name' => 'permission update']);
        Permission::create(['name' => 'permission delete']);

        Permission::create(['name' => 'role create']);
        Permission::create(['name' => 'role read']);
        Permission::create(['name' => 'role update']);
        Permission::create(['name' => 'role delete']);

        Permission::create(['name' => 'employee create']);
        Permission::create(['name' => 'employee read']);
        Permission::create(['name' => 'employee update']);
        Permission::create(['name' => 'employee delete']);

        Permission::create(['name' => 'department create']);
        Permission::create(['name' => 'department read']);
        Permission::create(['name' => 'department update']);
        Permission::create(['name' => 'department delete']);

        Permission::create(['name' => 'architecturalFormOnRoadway create']);
        Permission::create(['name' => 'architecturalFormOnRoadway read']);
        Permission::create(['name' => 'architecturalFormOnRoadway update']);
        Permission::create(['name' => 'architecturalFormOnRoadway delete']);

        Permission::create(['name' => 'CommunicationWithinTheBandOnRoadway create']);
        Permission::create(['name' => 'CommunicationWithinTheBandOnRoadway read']);
        Permission::create(['name' => 'CommunicationWithinTheBandOnRoadway update']);
        Permission::create(['name' => 'CommunicationWithinTheBandOnRoadway delete']);

        Permission::create(['name' => 'FencingAndGuideOnRoadway create']);
        Permission::create(['name' => 'FencingAndGuideOnRoadway read']);
        Permission::create(['name' => 'FencingAndGuideOnRoadway update']);
        Permission::create(['name' => 'FencingAndGuideOnRoadway delete']);

        Permission::create(['name' => 'InformationOfRoadMarking create']);
        Permission::create(['name' => 'InformationOfRoadMarking read']);
        Permission::create(['name' => 'InformationOfRoadMarking update']);
        Permission::create(['name' => 'InformationOfRoadMarking delete']);

        Permission::create(['name' => 'IntersectionAndJunctionOnRoadway create']);
        Permission::create(['name' => 'IntersectionAndJunctionOnRoadway read']);
        Permission::create(['name' => 'IntersectionAndJunctionOnRoadway update']);
        Permission::create(['name' => 'IntersectionAndJunctionOnRoadway delete']);

        Permission::create(['name' => 'LandingTypeOnRoadway create']);
        Permission::create(['name' => 'LandingTypeOnRoadway read']);
        Permission::create(['name' => 'LandingTypeOnRoadway update']);
        Permission::create(['name' => 'LandingTypeOnRoadway delete']);

        Permission::create(['name' => 'LandscapingOnRoadway create']);
        Permission::create(['name' => 'LandscapingOnRoadway read']);
        Permission::create(['name' => 'LandscapingOnRoadway update']);
        Permission::create(['name' => 'LandscapingOnRoadway delete']);

        Permission::create(['name' => 'LengthOfTheRoadSurface create']);
        Permission::create(['name' => 'LengthOfTheRoadSurface read']);
        Permission::create(['name' => 'LengthOfTheRoadSurface update']);
        Permission::create(['name' => 'LengthOfTheRoadSurface delete']);

        Permission::create(['name' => 'LightingOnRoadway create']);
        Permission::create(['name' => 'LightingOnRoadway read']);
        Permission::create(['name' => 'LightingOnRoadway update']);
        Permission::create(['name' => 'LightingOnRoadway delete']);

        Permission::create(['name' => 'LongitudinalProfileOfTheRoad create']);
        Permission::create(['name' => 'LongitudinalProfileOfTheRoad read']);
        Permission::create(['name' => 'LongitudinalProfileOfTheRoad update']);
        Permission::create(['name' => 'LongitudinalProfileOfTheRoad delete']);

        Permission::create(['name' => 'PedestrianCrossingOnRoadway create']);
        Permission::create(['name' => 'PedestrianCrossingOnRoadway read']);
        Permission::create(['name' => 'PedestrianCrossingOnRoadway update']);
        Permission::create(['name' => 'PedestrianCrossingOnRoadway delete']);

        Permission::create(['name' => 'PublicStopsOnTheHighway create']);
        Permission::create(['name' => 'PublicStopsOnTheHighway read']);
        Permission::create(['name' => 'PublicStopsOnTheHighway update']);
        Permission::create(['name' => 'PublicStopsOnTheHighway delete']);

        Permission::create(['name' => 'RailwayTransferOnRoadway create']);
        Permission::create(['name' => 'RailwayTransferOnRoadway read']);
        Permission::create(['name' => 'RailwayTransferOnRoadway update']);
        Permission::create(['name' => 'RailwayTransferOnRoadway delete']);

        Permission::create(['name' => 'RoadSignOnRoadway create']);
        Permission::create(['name' => 'RoadSignOnRoadway read']);
        Permission::create(['name' => 'RoadSignOnRoadway update']);
        Permission::create(['name' => 'RoadSignOnRoadway delete']);

        Permission::create(['name' => 'Roadway create']);
        Permission::create(['name' => 'Roadway read']);
        Permission::create(['name' => 'Roadway update']);
        Permission::create(['name' => 'Roadway delete']);

        Permission::create(['name' => 'SideStoneOnRoadway create']);
        Permission::create(['name' => 'SideStoneOnRoadway read']);
        Permission::create(['name' => 'SideStoneOnRoadway update']);
        Permission::create(['name' => 'SideStoneOnRoadway delete']);

        Permission::create(['name' => 'SidewalkOnRoadway create']);
        Permission::create(['name' => 'SidewalkOnRoadway read']);
        Permission::create(['name' => 'SidewalkOnRoadway update']);
        Permission::create(['name' => 'SidewalkOnRoadway delete']);

        Permission::create(['name' => 'SpillwayInfrastructure create']);
        Permission::create(['name' => 'SpillwayInfrastructure read']);
        Permission::create(['name' => 'SpillwayInfrastructure update']);
        Permission::create(['name' => 'SpillwayInfrastructure delete']);

        Permission::create(['name' => 'Street create']);
        Permission::create(['name' => 'Street read']);
        Permission::create(['name' => 'Street update']);
        Permission::create(['name' => 'Street delete']);

        Permission::create(['name' => 'TrafficLightOnRoadway create']);
        Permission::create(['name' => 'TrafficLightOnRoadway read']);
        Permission::create(['name' => 'TrafficLightOnRoadway update']);
        Permission::create(['name' => 'TrafficLightOnRoadway delete']);

        Permission::create(['name' => 'WidthRoadwayOnHighway create']);
        Permission::create(['name' => 'WidthRoadwayOnHighway read']);
        Permission::create(['name' => 'WidthRoadwayOnHighway update']);
        Permission::create(['name' => 'WidthRoadwayOnHighway delete']);

        Permission::create(['name' => 'ArchitecturalForm create']);
        Permission::create(['name' => 'ArchitecturalForm read']);
        Permission::create(['name' => 'ArchitecturalForm update']);
        Permission::create(['name' => 'ArchitecturalForm delete']);

        Permission::create(['name' => 'BarrierType create']);
        Permission::create(['name' => 'BarrierType read']);
        Permission::create(['name' => 'BarrierType update']);
        Permission::create(['name' => 'BarrierType delete']);

        Permission::create(['name' => 'CategoryOfHighway create']);
        Permission::create(['name' => 'CategoryOfHighway read']);
        Permission::create(['name' => 'CategoryOfHighway update']);
        Permission::create(['name' => 'CategoryOfHighway delete']);

        Permission::create(['name' => 'CommunicationType create']);
        Permission::create(['name' => 'CommunicationType read']);
        Permission::create(['name' => 'CommunicationType update']);
        Permission::create(['name' => 'CommunicationType delete']);

        Permission::create(['name' => 'CoverageType create']);
        Permission::create(['name' => 'CoverageType read']);
        Permission::create(['name' => 'CoverageType update']);
        Permission::create(['name' => 'CoverageType delete']);

        Permission::create(['name' => 'FencingAndGuideType create']);
        Permission::create(['name' => 'FencingAndGuideType read']);
        Permission::create(['name' => 'FencingAndGuideType update']);
        Permission::create(['name' => 'FencingAndGuideType delete']);

        Permission::create(['name' => 'FlooringCondition create']);
        Permission::create(['name' => 'FlooringCondition read']);
        Permission::create(['name' => 'FlooringCondition update']);
        Permission::create(['name' => 'FlooringCondition delete']);

        Permission::create(['name' => 'LandingType create']);
        Permission::create(['name' => 'LandingType read']);
        Permission::create(['name' => 'LandingType update']);
        Permission::create(['name' => 'LandingType delete']);

        Permission::create(['name' => 'LandscapingCondition create']);
        Permission::create(['name' => 'LandscapingCondition read']);
        Permission::create(['name' => 'LandscapingCondition update']);
        Permission::create(['name' => 'LandscapingCondition delete']);

        Permission::create(['name' => 'LightingSupportType create']);
        Permission::create(['name' => 'LightingSupportType read']);
        Permission::create(['name' => 'LightingSupportType update']);
        Permission::create(['name' => 'LightingSupportType delete']);

        Permission::create(['name' => 'PedestrianCrossingPosition create']);
        Permission::create(['name' => 'PedestrianCrossingPosition read']);
        Permission::create(['name' => 'PedestrianCrossingPosition update']);
        Permission::create(['name' => 'PedestrianCrossingPosition delete']);

        Permission::create(['name' => 'PedestrianCrossingType create']);
        Permission::create(['name' => 'PedestrianCrossingType read']);
        Permission::create(['name' => 'PedestrianCrossingType update']);
        Permission::create(['name' => 'PedestrianCrossingType delete']);

        Permission::create(['name' => 'RoadMarking create']);
        Permission::create(['name' => 'RoadMarking read']);
        Permission::create(['name' => 'RoadMarking update']);
        Permission::create(['name' => 'RoadMarking delete']);

        Permission::create(['name' => 'RoadMarkingMaterial create']);
        Permission::create(['name' => 'RoadMarkingMaterial read']);
        Permission::create(['name' => 'RoadMarkingMaterial update']);
        Permission::create(['name' => 'RoadMarkingMaterial delete']);

        Permission::create(['name' => 'RoadSignCondition create']);
        Permission::create(['name' => 'RoadSignCondition read']);
        Permission::create(['name' => 'RoadSignCondition update']);
        Permission::create(['name' => 'RoadSignCondition delete']);

        Permission::create(['name' => 'RoadSign create']);
        Permission::create(['name' => 'RoadSign read']);
        Permission::create(['name' => 'RoadSign update']);
        Permission::create(['name' => 'RoadSign delete']);

        Permission::create(['name' => 'RoadSignMaterial create']);
        Permission::create(['name' => 'RoadSignMaterial read']);
        Permission::create(['name' => 'RoadSignMaterial update']);
        Permission::create(['name' => 'RoadSignMaterial delete']);

        Permission::create(['name' => 'Side create']);
        Permission::create(['name' => 'Side read']);
        Permission::create(['name' => 'Side update']);
        Permission::create(['name' => 'Side delete']);

        Permission::create(['name' => 'SideStoneStamp create']);
        Permission::create(['name' => 'SideStoneStamp read']);
        Permission::create(['name' => 'SideStoneStamp update']);
        Permission::create(['name' => 'SideStoneStamp delete']);

        Permission::create(['name' => 'SideStoneType create']);
        Permission::create(['name' => 'SideStoneType read']);
        Permission::create(['name' => 'SideStoneType update']);
        Permission::create(['name' => 'SideStoneType delete']);

        Permission::create(['name' => 'TypeTrafficLight create']);
        Permission::create(['name' => 'TypeTrafficLight read']);
        Permission::create(['name' => 'TypeTrafficLight update']);
        Permission::create(['name' => 'TypeTrafficLight delete']);

        Permission::create(['name' => 'Unit create']);
        Permission::create(['name' => 'Unit read']);
        Permission::create(['name' => 'Unit update']);
        Permission::create(['name' => 'Unit delete']);

        Permission::create(['name' => 'WellType create']);
        Permission::create(['name' => 'WellType read']);
        Permission::create(['name' => 'WellType update']);
        Permission::create(['name' => 'WellType delete']);
    }
}
