<?php
declare(strict_types=1);

$empresaId = (int) $_SESSION['empresa_id']; // já autenticado
$service = new EmpresaService(new EmpresaRepository());

try {
    $service->editarPerfil(
        $empresaId,
        $_POST,
        $_FILES['logo'] ?? null
    );

    echo json_encode(['success' => true]);
} catch (Throwable $e) {
    http_response_code(400);
    echo json_encode(['error' => $e->getMessage()]);
}