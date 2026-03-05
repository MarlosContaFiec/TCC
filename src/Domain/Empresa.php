<?php
declare(strict_types=1);

final class Empresa
{
    public function __construct(
        public readonly int $id,
        private PerfilEmpresa $perfil
    ) {}

    public function editarPerfil(PerfilEmpresa $perfil): void
    {
        $this->perfil = $perfil;
    }

    public function perfil(): PerfilEmpresa
    {
        return $this->perfil;
    }
}