<?php
$dir = __DIR__ . '/uploads/';
if (!is_dir($dir)) mkdir($dir);

if (!empty($_FILES['image'])) {
    $name = time() . '_' . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $dir . $name);
    echo "Uploaded: <a href='uploads/$name'>$name</a>";
}
