<?php
require_once '../_includes/connection-2.php';
// create database connection
$conn = dbConnect('student06.site06');
$sql = 'SELECT * FROM album ORDER BY album_id';
$result = $conn->query($sql);
if (!$result) {
    $error = $conn->error;
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Manage Blog Entries</title>
<link href="../_css/styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Add An Album</h1>
<p><a href="add-album.php">Insert new entry</a></p>
<?php if (isset($error)) {
    echo "<p>$error</p>";
} else { ?>
<table>
    <tr>
        <th>Album</th>
        <th>Track Listing</th>
    </tr>
    <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['album_name']; ?></td>
        <td><?= $row['tracks']; ?></td>
    </tr>
    <?php } ?>
</table>
<?php } ?>
</body>
</html>
