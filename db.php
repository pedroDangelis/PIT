<?php

$con = mysqli_connect('127.0.0.1', 'root', '', 'VMH');

if (!$con) {
    die('Não conectou ao banco de dados' . mysqli_connect_error());
}
