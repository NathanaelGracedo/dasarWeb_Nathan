<?php
    $targetDirectory = "images/";

    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }

    if ($_FILES['files']['name'][0]) {
        $totalFiles = count($_FILES['files']['name']);
        
        for ($i=0; $i < $totalFiles ; $i++) { 
            $fileName = $_FILES['files']['name'][$i];
            $targetFile = $targetDirectory . $fileName;
            $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            $allowedExtensions = array("jpg", "jpeg", "png", "gif");

    if (in_array($fileType, $allowedExtensions)) {
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                echo "File $fileName berhasil diunggah.<br>";
                echo "<img src='$targetFile' width='200' style='margin: 10px;' alt='$fileName'><br>";
            } else {
                echo "Gagal mengunggah file $fileName.<br>";
                }
            } else {
                echo "File $fileName memiliki format yang tidak diizinkan.<br>";
            }
        }
    } else {
        echo "Tidak ada file yang diunggah.";
    }
?>
