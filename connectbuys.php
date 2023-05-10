<?php

    $connect2 = mysqli_connect('localhost', 'root', '', 'buys');

    if (!$connect2) {
        die('Error connect to DataBase');
    }