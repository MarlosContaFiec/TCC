<?php
declare(strict_types=1);

final class UploadValidator
{
    private const ALLOWED = ['image/png', 'image/jpeg'];

    public static function validar(array $file): string
    {
        if (!in_array($file['type'], self::ALLOWED, true)) {
            throw new RuntimeException('Tipo de imagem não permitido');
        }

        if ($file['size'] > 2 * 1024 * 1024) {
            throw new RuntimeException('Imagem muito grande');
        }

        $nome = bin2hex(random_bytes(16)) . '.png';
        move_uploaded_file($file['tmp_name'], __DIR__ . "/../../public/logos/$nome");

        return $nome;
    }
}