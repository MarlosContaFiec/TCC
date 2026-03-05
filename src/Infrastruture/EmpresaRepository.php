<?php
declare(strict_types=1);

final class EmpresaRepository
{
    public function atualizarPerfil(int $empresaId, PerfilEmpresa $perfil): void
    {
        $sql = "
            UPDATE empresas SET
                razao_social = :razao,
                descricao = :descricao,
                logo = :logo,
                cor_primaria = :cor1,
                cor_secundaria = :cor2
            WHERE id = :id
        ";

        $stmt = Database::conn()->prepare($sql);
        $stmt->execute([
            'razao' => $perfil->razaoSocial,
            'descricao' => $perfil->descricao,
            'logo' => $perfil->logo,
            'cor1' => $perfil->corPrimaria,
            'cor2' => $perfil->corSecundaria,
            'id' => $empresaId
        ]);
    }
}