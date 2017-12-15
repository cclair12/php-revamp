<?php
    require_once '../_includes/connection-2.php';
    // initialize flag
    // create database connection
    $conn = dbConnect('student06.site06');
// http://www.tutorialrepublic.com/php-tutorial/php-mysql-insert-query.php
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Add New Album</title>
    <link href="../_css/styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Add New Album</h1>
<?php if (isset($error)) {
    echo "<p>Error: $error</p>";
} ?>
<form method="post" action="insert-album.php">
    <p>
        <label for="albumName">Album Name:</label>
        <input type="text" name="albumName">
    </p>
    <p>
        <label for="Tracks">Tracks:</label>
        <input type="text" name="Tracks">
    </p>
    <p>
        <label for="uploaded-file">Select Album Art:</label>
        <input type="file" name="filename">
    <p>
        <input type="submit" name="insert" value="Add Album" id="insert">
    </p>
</form>
</body>
</html>
