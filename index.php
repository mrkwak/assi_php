<?php require_once 'includes/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>부산 장애인 편의시설 지도</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="header">
        <h1>부산 장애인 편의시설 지도</h1>
        <button id="showFavorites" class="favorites-btn">
            <i class="fas fa-heart"></i> 찜 목록
        </button>
    </div>

    <div id="map"></div>

    <!-- 상세정보 모달 -->
    <div id="placeModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="favorite-btn">
                <i class="far fa-star"></i>
            </div>
            <div id="placeInfo"></div>
        </div>
    </div>

    <!-- 찜 목록 모달 -->
    <div id="favoritesModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>찜 목록</h2>
            <div id="favoritesList"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=<?php echo KAKAO_MAP_KEY; ?>"></script>
    <script src="assets/js/map.js"></script>
</body>
</html> 