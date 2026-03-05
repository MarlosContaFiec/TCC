<?php
declare(strict_types=1);

session_start();

require_once __DIR__ . '/../src/Infrastructure/Database.php';
require_once __DIR__ . '/../src/Infrastructure/EmpresaRepository.php';
require_once __DIR__ . '/../src/Application/EmpresaService.php';
require_once __DIR__ . '/../src/Domain/PerfilEmpresa.php';
require_once __DIR__ . '/../src/Security/Sanitizer.php';
require_once __DIR__ . '/../src/Security/UploadValidator.php';

$rota = $_GET['rota'] ?? 'home';

match($rota) {

    'editar-perfil' => require __DIR__.'/../src/Http/EmpresaController.php',

    default => print "
        <h1>Painel da Empresa</h1>
        <a href='?rota=perfil'>Editar Perfil</a>
    "
};