<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (!in_array($file_ext, $allowedExtensions)) {
            $errors[] = "Ekstensi file '$file_name' tidak diizinkan. Ekstensi yang diizinkan: " . implode(', ', $allowedExtensions);
            continue;
        }

        if ($file_size > 2097152) {
            $errors[] = "Ukuran file '$file_name' melebihi batas (2 MB).";
            continue;
        }

        if (empty($errors)) {
            $new_file_name = uniqid('', true) . '.' . $file_ext;
            $destination = "Images/" . $new_file_name;
            if (move_uploaded_file($file_tmp, $destination)) {
                $success_message = "File '$file_name' berhasil diunggah.";
            } else {
                $errors[] = "Terjadi kesalahan saat mengunggah file '$file_name'.";
            }
        }
    }

    if (empty($errors)) {
        echo $success_message;
    } else {
        echo implode('<br>', $errors);
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
