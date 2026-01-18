<?php
//var_dump(getenv('MYSQL_HOST_NAME'));
require 'db.php';
require 'redis.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $stmt = $pdo->prepare("INSERT INTO users (name) VALUES (?)");
    $stmt->execute([$name]);
}

$users = $pdo->query("SELECT * FROM users ORDER BY id DESC")->fetchAll();
$redisValue = $redis->get("test_key");
?>

<!DOCTYPE html>
<html>
<body>
<h2>Coolify PHP Test</h2>

<form method="post">
    <input name="name" placeholder="Enter name">
    <button>Save to DB</button>
</form>

<h3>Users</h3>
<ul>
<?php foreach ($users as $u): ?>
    <li><?= htmlspecialchars($u['name']) ?></li>
<?php endforeach ?>
</ul>

<h3>Redis Value</h3>
<p><?= $redisValue ?></p>

<h3>Upload Image</h3>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <button type="submit">Upload</button>
</form>

</body>
</html>
