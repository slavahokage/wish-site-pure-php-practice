<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Главная</title>
    <link rel="stylesheet" href="../../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
<body>
<?php include 'application/views/navbar.php'; ?>
<?php include 'application/views/' . $contentView; ?>
</body>
<script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
<script>
    $(function () {
        $("#wishForm").submit(function (event) {
            event.preventDefault();
            sendWish("/save", $("#wishText").val());
        });

        function sendWish(url, data) {
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    'wish': data,
                    'ajax': 'i am ajax :)',
                },
                success: function (result) {
                    $("#wishes").append(result + "</br>");
                }
            });
        }
    });
</script>
</html>