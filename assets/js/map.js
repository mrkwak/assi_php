let map;
let markers = [];
let currentInfoWindow = null;

// 지도 초기화
function initMap() {
    const mapContainer = document.getElementById('map');
    const mapOption = {
        center: new kakao.maps.LatLng(35.1795543, 129.0756416),
        level: 5
    };

    map = new kakao.maps.Map(mapContainer, mapOption);
    loadPlaces();
}

// 장소 데이터 로드
function loadPlaces() {
    $.ajax({
        url: 'api/get_places.php',
        method: 'GET',
        success: function(data) {
            createMarkers(data);
        }
    });
}

// 마커 생성
function createMarkers(places) {
    places.forEach(place => {
        const marker = new kakao.maps.Marker({
            position: new kakao.maps.LatLng(place.lat, place.lng),
            map: map
        });

        kakao.maps.event.addListener(marker, 'click', function() {
            showPlaceInfo(place);
        });

        markers.push(marker);
    });
}

// 찜하기 토글
function toggleFavorite(placeId) {
    $.ajax({
        url: 'api/toggle_favorite.php',
        method: 'POST',
        data: { placeId: placeId },
        success: function(response) {
            updateFavoriteIcon(placeId);
        }
    });
}

// 페이지 로드 시 지도 초기화
window.onload = initMap; 