<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>
</head>
<body>
<h1>
    <?= $h1; ?>

<!--    <ul>-->
<!--    --><?php //foreach($data as $d) {
//
//        echo "<li>". $d['name'] . "</li>";
//
//    } ?>
<!--    </ul>-->

    <ul>
        <?php foreach($data as $d): ?>

            <li><?= $d['name'] ?></li>

        <?php endforeach; ?>
    </ul>

</h1>
</body>
</html>