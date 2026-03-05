<?php
declare(strict_types=1);

final class PerfilEmpresa
{
    public function __construct(
        public string $razaoSocial,
        public string $descricao,
        public ?string $logo,
        public string $corPrimaria,
        public string $corSecundaria
    ) {
        if (strlen($this->razaoSocial) < 3) {
            throw new InvalidArgumentException('Razão social inválida');
        }
    }
}