// Импортируем необходимые типы (если используете TypeScript, иначе можно пропустить)
import { YMapLocationRequest, LngLat, PolygonGeometry, LineStringGeometry } from '@yandex/ymaps3-types';

export const LOCATION = {
    center: [71.426837, 51.134660], // начальная позиция [долгота, широта]
    zoom: 16 // начальный зум
};

/* Массив свойств для линий.
`properties.hint` хранит текст, который будет отображаться при наведении на эту линию */
export const LINES_PROPS = [
    {
        geometry: {
            type: 'LineString',
            coordinates: [
                [71.416048, 51.136416],
                [71.426665, 51.134588],
                [71.437553, 51.132666]
            ]
        }
    }
];
export const LINE_PR = [
    {
        geometry: {
            type: 'LineString',
            coordinates: [
                [71.424460, 51.135127],
                [71.425375, 51.134977]
            ]
        },
        properties: {
            hint: `<h5>Ведомость проезжей части</h5><p>Тип покрытия: <b>Щебень и гравий</b></p><p>Категория: <b>Примыкание (съезд)</b></p>`
        }
    }
]
export const LINE_TR = [
    {
        geometry: {
            type: 'LineString',
            coordinates: [
                [71.416275, 51.136214],
                [71.422556, 51.135149]
            ]
        },
        properties: {
            hint: `<h5>Тротуар</h5><p>Тип покрытия: <b>Асфальтобетон</b></p><p>Расположение: <b>Справа</b></p><p>Длина: <b>178 п.м</b></p>`
        }
    }
]
export const LUK_MARKER = [
    {
        coordinates: [71.423521, 51.135309],
        properties: {
            hint: '<h5>Люк</h5> Тип колодца: <b>ливневый</b>'
        }
    },
    {
        coordinates: [71.419305, 51.136016],
        properties: {
            hint: '<h5>Люк</h5> Тип колодца: <b>ливневый</b>'
        }
    },
]
export const LUK_SF = [
    {
        coordinates: [71.420007, 51.135663],
        properties: {
            hint: '<h5>Светофор</h5> <p>Тип установки: <b>стойка</b></p><p>Количество транспортных светофоров: <b>9</b></p><p>Количество пешеходных светофоров: <b>2</b></p><p>Колонка: <b>Да</b></p>'
        }
    },
    {
        coordinates: [71.422727, 51.135255],
        properties: {
            hint: '<h5>Светофор</h5> <p>Тип установки: <b>стойка</b></p><p>Количество транспортных светофоров: <b>9</b></p><p>Количество пешеходных светофоров: <b>2</b></p><p>Колонка: <b>Да</b></p>'
        }
    },
    {
        coordinates: [71.430891, 51.133971],
        properties: {
            hint: '<h5>Светофор</h5> <p>Тип установки: <b>стойка</b></p><p>Количество транспортных светофоров: <b>9</b></p><p>Количество пешеходных светофоров: <b>2</b></p><p>Колонка: <b>Да</b></p>'
        }
    },
]
