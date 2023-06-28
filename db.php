<?php

try {
    $PDO = new PDO('mysql:host=localhost;dbname=VMH;', 'root', '');
} catch (PDOException $e) {
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
};
