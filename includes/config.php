<?php
session_start();

// API 키 설정
define('KAKAO_MAP_KEY', 'adfbae26a4c9e423461b3a4d53e93093');
define('API_KEY', 'ZLBVcTrlqAhLCiIaDdt9dRaSD1KP1VsDM67STTJsohKq6BXa7Pp2p9sd57KOrv2TeCyDItVqZ14nnpB1Gakrtw%3D%3D');

// API URL
define('API_URL', 'http://apis.data.go.kr/6260000/BusanFcltsDsgstInfoService/getFcltsDsgstInfo');

// 세션에 찜 목록이 없으면 초기화
if (!isset($_SESSION['favorites'])) {
    $_SESSION['favorites'] = array();
}
?> 