<?php

namespace App\Routes;

class SidebarRoutes
{
    public static function dashboard(): array
    {
        return [
            "title" => "dashboard",
            "name" => "Kanban Board",
            "link" => "dashboard.index",
            "icon" => "fa-solid fa-chart-pie",
            "permission" => "dashboard management",
            "routes" => [
                [
                    "name" => "Статистика",
                    "link" => "dashboard.index",
                    "permission" => "dashboard management"
                ]
            ]
        ];
    }
    public static function user(): array
    {
        return [
            "title" => "dashboard/user*",
            "name" => "Пользователи",
            "link" => "user.dashboard",
            "icon" => "fa-regular fa-user",
            "permission" => "user management",
            "routes" => [
                [
                    "name" => "Департаменты",
                    "link" => "department.index",
                    "permission" => "department read"
                ],
                [
                    "name" => "Пользователи",
                    "link" => "employee.index",
                    "permission" => "employee read"
                ]
            ]
        ];
    }
    public static function setting(): array
    {
        return [
            "title" => "dashboard/setting*",
            "name" => "Системные",
            "link" => "setting.dashboard",
            "icon" => "fa-solid fa-gear",
            "permission" => "setting management",
            "routes" => [
                [
                    "name" => "Роли и права",
                    "elementId" => "role_and_title",
                    "permission" => "setting management",
                    "routes" => [
                        [
                            "name" => "Роли",
                            "link" => "role.index",
                            "permission" => "role read",
                        ],
                        [
                            "name" => "Права",
                            "link" => "permission.index",
                            "permission" => "permission read",
                        ]
                    ]
                ],
                [
                    "name" => "Типы документов",
                    "link" => "document-type.index",
                    "permission" => "DocumentType read"
                ]
            ]
        ];
    }
    public static function statement(): array
    {
        return [
            "title"=> "dashboard/statement*",
            "name"=> "Ведомость",
            "link"=> "statement.dashboard",
            "icon"=> "fa-brands fa-usps",
            "permission"=> "statement management",
            "routes"=> [
                [
                    "name"=> "Улица",
                    "link"=> "street.index",
                    "permission" => "Street read"
                ],
                [
                    "name"=> "Протяженность",
                    "link"=> "length-of-the-road-surface.index",
                    "permission" => "LengthOfTheRoadSurface read"
                ],
                [
                    "name"=> "Проезжая часть",
                    "link"=> "roadway.index",
                    "permission" => "Roadway read"
                ],
                [
                    "name"=> "Люки и решетки колодцев",
                    "link"=> "spillway-infrastructure.index",
                    "permission" => "SpillwayInfrastructure read"
                ],
                [
                    "name"=> "ЖД переезды на автомобильной дороге",
                    "link"=> "railway-transfer-on-roadway.index",
                    "permission" => "RailwayTransferOnRoadway read"
                ],
                [
                    "name"=> "Ширина проезжей части на автомобильной дороге",
                    "link"=> "width-roadway-on-highway.index",
                    "permission" => "WidthRoadwayOnHighway read"
                ],
                [
                    "name"=> "Продольный профиль на автомобильной дороге",
                    "link"=> "longitudinal-profile-of-the-road.index",
                    "permission" => "LongitudinalProfileOfTheRoad read"
                ],
                [
                    "name"=> "Технического состояния и озеленения на автомобильной дороге",
                    "link"=> "landscaping-on-roadway.index",
                    "permission" => "LandscapingOnRoadway read"
                ],
                [
                    "name"=> "Пересечения и примыкания на автомобильной дороге",
                    "link"=> "ij-on-roadway.index",
                    "permission" => "IntersectionAndJunctionOnRoadway read"
                ],
                [
                    "name"=> "Наличия коммуникаций в пределах полосы отвода на автомобильной дороге",
                    "link"=> "cwb-on-roadway.index",
                    "permission" => "CommunicationWithinTheBandOnRoadway read"
                ],
                [
                    "name"=> "Наличия и технического состояния дорожных знаков на автомобильной дороге",
                    "link"=> "road-sign-on-roadway.index",
                    "permission" => "RoadSignOnRoadway read"
                ],
                [
                    "name"=> "Сведения о дорожной разметке",
                    "link"=> "information-of-road-marking.index",
                    "permission" => "InformationOfRoadMarking read"
                ],
                [
                    "name"=> "Малые архитектурные формы",
                    "link"=> "architectural-form-on-roadway.index",
                    "permission" => "ArchitecturalFormOnRoadway read"
                ],
                [
                    "name"=> "Светофорные объекты",
                    "link"=> "traffic-light-on-roadway.index",
                    "permission" => "TrafficLightOnRoadway read"
                ],
                [
                    "name"=> "Газоны и цветники",
                    "link"=> "landing-type-on-roadway.index",
                    "permission" => "LandingTypeOnRoadway read"
                ],
                [
                    "name"=> "Остановки",
                    "link"=> "public-stops-on-the-highway.index",
                    "permission" => "PublicStopsOnTheHighway read"
                ],
                [
                    "name"=> "Опоры освещений и контактных сетей",
                    "link"=> "lighting-on-roadway.index",
                    "permission" => "LightingOnRoadway read"
                ],
                [
                    "name"=> "Ограждающие и направляющие устройства",
                    "link"=> "fencing-and-guide-on-roadway.index",
                    "permission" => "FencingAndGuideOnRoadway read"
                ],
                [
                    "name"=> "Бортовые камни",
                    "link"=> "side-stone-on-roadway.index",
                    "permission" => "SideStoneOnRoadway read"
                ],
                [
                    "name"=> "Тротуары, пешеходные зоны и дорожки",
                    "link"=> "sidewalk-on-roadway.index",
                    "permission" => "SidewalkOnRoadway read"
                ],
                [
                    "name"=> "Наличие пешеходных переходов",
                    "link"=> "pedestrian-crossing-on-roadway.index",
                    "permission" => "PedestrianCrossingOnRoadway read"
                ]
            ]
        ];
    }
    public static function referenceBook(): array
    {
        return [
            "title" => "dashboard/reference-book*",
            "name" => "Справочник",
            "link" => "reference-book.index",
            "icon" => "fas fa-book",
            "permission" => "referenceBook management",
            "routes" => [
                [
                    "name" => "Дорожное полотно",
                    "link" => "coverage-type.index",
                    "permission" => "CoverageType read"
                ],
                [
                    "name" => "Сторона Дорожного полотна",
                    "link" => "side.index",
                    "permission" => "Side read"
                ],
                [
                    "name" => "Категория проезжей части",
                    "link" => "category-of-highway.index",
                    "permission" => "CategoryOfHighway read"
                ],
                [
                    "name" => "Типы колодцев",
                    "link" => "well-type.index",
                    "permission" => "WellType read"
                ],
                [
                    "name" => "Дорожные разметки",
                    "link" => "road-marking.index",
                    "permission" => "RoadMarking read"
                ],
                [
                    "name" => "Материалы Дорожной Разметки",
                    "link" => "road-marking-material.index",
                    "permission" => "RoadMarkingMaterial read"
                ],
                [
                    "name" => "Архитектурные формы",
                    "link" => "architectural-form.index",
                    "permission" => "ArchitecturalForm read"
                ],
                [
                    "name" => "Тип светофорных установок",
                    "link" => "type-traffic-light.index",
                    "permission" => "TypeTrafficLight read"
                ],
                [
                    "name" => "Тип посадок",
                    "link" => "landing-type.index",
                    "permission" => "LandingType read"
                ],
                [
                    "name" => "Тип опор",
                    "link" => "lighting-support-type.index",
                    "permission" => "LightingSupportType read"
                ],
                [
                    "name" => "Единицы измерения",
                    "link" => "unit.index",
                    "permission" => "Unit read"
                ],
                [
                    "name" => "Тип устройств ограждающих и направляющих",
                    "link" => "fencing-and-guide-type.index",
                    "permission" => "FencingAndGuideType read"
                ],
                [
                    "name" => "Тип бортовых камней",
                    "link" => "side-stone-type.index",
                    "permission" => "SideStoneType read"
                ],
                [
                    "name" => "Марка бортовых камней",
                    "link" => "side-stone-stamp.index",
                    "permission" => "SideStoneStamp read"
                ],
                [
                    "name" => "Вид пешеходного перехода",
                    "link" => "pedestrian-crossing-type.index",
                    "permission" => "PedestrianCrossingType read"
                ],
                [
                    "name" => "Позиция пешеходного перехода",
                    "link" => "pedestrian-crossing-position.index",
                    "permission" => "PedestrianCrossingPosition read"
                ],
                [
                    "name" => "Вид шлагбаума",
                    "link" => "barrier-type.index",
                    "permission" => "BarrierType read"
                ],
                [
                    "name" => "Состояние настила",
                    "link" => "flooring-condition.index",
                    "permission" => "FlooringCondition read"
                ],
                [
                    "name" => "Состояние посадки",
                    "link" => "landscaping-condition.index",
                    "permission" => "LandscapingCondition read"
                ],
                [
                    "name" => "Типы коммуникаций",
                    "link" => "communication-type.index",
                    "permission" => "CommunicationType read"
                ],
                [
                    "name" => "Дорожный Знак",
                    "link" => "road-sign.index",
                    "permission" => "RoadSign read"
                ],
                [
                    "name" => "Состояние Дорожных Знаков",
                    "link" => "road-sign-condition.index",
                    "permission" => "RoadSignCondition read"
                ],
                [
                    "name" => "Материалы Дорожных Знаков",
                    "link" => "road-sign-material.index",
                    "permission" => "RoadSignMaterial read"
                ]
            ]
        ];
    }
    public static function drawing(): array
    {
        return [
            "title" => "dashboard/draw*",
            "name" => "Чертежи",
            "link" => "draw.dashboard",
            "icon" => "fa-solid fa-compass-drafting",
            "permission" => "draw management",
            "routes" => [
                [
                    "name" => "Документы",
                    "link" => "street-document.index",
                    "permission" => "StreetDocument read"
                ]
            ]
        ];
    }
    public static function all(): array
    {
        return [self::dashboard(), self::user(), self::statement(), self::referenceBook(), self::drawing(), self::setting()];
    }
}
