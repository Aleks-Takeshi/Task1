<?php

$connection = mysqli_connect(
    $config['database'][server],
    $config['database'][user],
    $config['database'][password],
    $config['database'][name]
);

if ($connection == false) {
    echo 'Не удалось подключится к базе данных!<br>';
    echo mysqli_connect_error();
    exit();
}
