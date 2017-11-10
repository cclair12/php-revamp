<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<?php include './_includes/title.php'; ?>
<!DOCTYPE html>
<html lang="en">
<!--Basic page needs
=============================-->
<head>
<meta charset="utf-8">
<title>Maroon 5<?php if (isset($title)) {echo "&#8212;{$title}";} ?></title>
<meta name="description" content="Discography Website">
<meta name="author" content="Maroon5 - Answer form">

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS
================================================== -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<!-- Styles
=================================================== -->
<style>
    * {margin: 0; padding: 0;}
body {
    background-color: black;
    font-family: 'Source Sans Pro', sans-serif;
}
h1 {
    text-align: center;
    letter-spacing: 10px;
    color: white;
    font-size: 50px;
}
img.rock {
    display: block;
    max-width: 100%;
    margin: 0 auto;
    height: auto;
}
a {
    font-size: 10px;
}
a:link {
    color: grey;
    text-decoration: none;
}
a:hover {
    color: maroon;
}
a:visited {
    color: grey;
}
p {
    color: maroon;
    font-size: 40px;
    text-align: center;
}
</style>
</head>
<!--Primary Page Layout
================================-->
    <body>
<h1>THANK YOU!</h1>
    <img src="_images/rockandroll.jpg" alt="rock on" width="200" class="rock">
    <p><a href="http://www.123rf.com/photo_25357514_hand-in-rock-n-roll-sign-illustration.html" target="_blank">&copy; Source</a></p>
<p>ROCK ON!</p>
    </body>
</html>
