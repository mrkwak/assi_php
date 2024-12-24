<?php
require_once '../includes/config.php';

if (isset($_POST['placeId'])) {
    $placeId = $_POST['placeId'];
    
    if (in_array($placeId, $_SESSION['favorites'])) {
        // 찜 목록에서 제거
        $_SESSION['favorites'] = array_diff($_SESSION['favorites'], [$placeId]);
        $status = 'removed';
    } else {
        // 찜 목록에 추가
        $_SESSION['favorites'][] = $placeId;
        $status = 'added';
    }
    
    echo json_encode(['status' => $status]);
}
?> 