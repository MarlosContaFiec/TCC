<?php
declare(strict_types=1);

final class Database
{
    public static function conn(): PDO
    {
        return new PDO(
            'mysql:host=localhost;dbname=tcc;charset=utf8mb4',
            'user',
            'pass',
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );
    }
}