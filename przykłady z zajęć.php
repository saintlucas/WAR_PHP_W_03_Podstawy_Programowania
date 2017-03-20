</html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php
    $a = 3;
    $b = 4;
    $c = 5;

    if ($a + $b > $c) {
        if ($c + $b > $a) {
            if ($a + $c > $b) echo 'Można zbudować trójkąt';
        } else {
            echo 'Nie można zbudwać trójkąta';
        }
    } else {
        echo 'Nie można zbudować trójkąta';
    }
    ?>

</body>

</html>

