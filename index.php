<?php
$date = getdate();
$month = $date['mon'];
$year = $date['year'];
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Calendar for Kyxar</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="calendar">
                <?php include('calendar.php') ?>
            </div>
        </div>
    </main>
</body>
</html>