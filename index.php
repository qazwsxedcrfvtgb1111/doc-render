<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 12/14/17
 * Time: 9:03 PM
 */

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Doc generator</title>
</head>
<body>
<form action="/generate.php" method="post">
    <hr>
    <label for="custom">Write custom text</label>
    <input type="radio" name="type" value="custom" id="custom" checked>
    <hr>
    <label for="lorem">Use lorem ipsum</label>
    <input type="radio" name="type" value="lorem" id="lorem">
    <div id="text-container">
        <hr>
        <label for="text">Text:</label>
        <textarea id="text" name="text"></textarea>
    </div>
    <hr>
    <button type="submit">Generate</button>
</form>

<script src="app.js"></script>
</body>
</html>
