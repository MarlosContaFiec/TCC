<?php
declare(strict_types=1);

final class EmpresaService
{
    public function __construct(
        private EmpresaRepository $repo
    ) {}

    public function editarPerfil(int $empresaId, array $input, ?array $logo): void
    {
        $perfil = new PerfilEmpresa(
            Sanitizer::text($input['razao_social']),
            Sanitizer::text($input['descricao']),
            $logo ? UploadValidator::validar($logo) : null,
            Sanitizer::text($input['cor_primaria']),
            Sanitizer::text($input['cor_secundaria'])
        );

        $this->repo->atualizarPerfil($empresaId, $perfil);
    }
}