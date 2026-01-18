<?php

$uploadDir = __DIR__ . '/uploads/';

if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

$fileName = time() . '_' . basename($_FILES['file']['name']);
$target = $uploadDir . $fileName;

if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
    echo "Uploaded: $fileName";
} else {
    echo "Upload failed";
}