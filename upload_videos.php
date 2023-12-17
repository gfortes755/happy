<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['username'])) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["videoFile"]["name"]);

    // Verificar se o arquivo é um vídeo
    $videoFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    if ($videoFileType != "mp4" && $videoFileType != "webm" && $videoFileType != "ogg") {
        echo "Apenas arquivos MP4, WebM e OGG são permitidos.";
        exit;
    }

    // Mover o arquivo para o diretório de uploads
    if (move_uploaded_file($_FILES["videoFile"]["tmp_name"], $targetFile)) {
        echo "Vídeo enviado com sucesso.";
    } else {
        echo "Ocorreu um erro ao enviar o vídeo.";
    }
}
?>
