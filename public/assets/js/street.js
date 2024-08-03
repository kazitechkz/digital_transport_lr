var map = L.map('map',{ attributionControl:false }).setView([51.1694, 71.4491], 12);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
}).addTo(map);
map.whenReady(() => {
    setTimeout(() => {
        this.map.invalidateSize();
    }, 1000);
});
var dgis = new L.DGis();
map.addLayer(dgis);
renderGeoJSON();
map.pm.addControls({
    position: 'topleft',
    drawCircleMarker: false,
    rotateMode: false,
    drawPolygon:true,
    drawCircle:false,
    drawRectangle:false,
    cutPolygon:false,
    drawMarker:false,
    drawText:false,
    drawPolyline:false,
});
document.getElementById('map').addEventListener('mousedown', function(event) {
    if (event.button === 1) { // Middle mouse button
        event.preventDefault();
        map.dragging._draggable._onDown(event);
    }
});
map.on("pm:create", function (e){
    e.layer.on('pm:edit', function() {
        updateGeoJSON(e.layer);
    });
    e.layer.on('pm:remove', function() {
        updateGeoJSON();
    });
    updateGeoJSON(e.layer);
});
function updateGeoJSON(layer) {
    var layers = [];
    map.eachLayer(function(layer) {
        if (layer instanceof L.Polygon && !layer._pmTempLayer) {
            layers.push(layer.toGeoJSON());
        }
    });

    var geojson = {
        type: 'FeatureCollection',
        features: layers
    };

    var jsonString = JSON.stringify(geojson);
    if (geojson.features.length === 0) {
        document.getElementById('geo_map').value = '';
    } else {
        document.getElementById('geo_map').value = jsonString;
    }
}


function renderGeoJSON() {
    var geoJSONString = document.getElementById('geo_map').value;
    if (geoJSONString) {
        var geoJSON = JSON.parse(geoJSONString);
        L.geoJSON(geoJSON).addTo(map);
    }
}
