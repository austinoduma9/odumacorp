<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
</head>
<body>
    <?php require_once 'navbar.php'?>
    <div id="demo"></div>
    <script>

let path = location.pathname;
document.getElementById("demo").innerHTML = path;
</script>
</body>
</html>
<?php require_once 'footer.php' ?>
