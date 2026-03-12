<?php include __DIR__ . '/../src/utils/modal.php'; ?>

<form method="POST" action="?rota=editar-perfil" enctype="multipart/form-data">

<input name="razao_social" placeholder="Razão Social">

<textarea name="descricao" placeholder="Descrição"></textarea>

<input name="cor_primaria" placeholder="Cor primária">

<input name="cor_secundaria" placeholder="Cor secundária">

<input type="file" name="logo">

<button type="submit">Salvar</button>

<button type="button" onclick="abrirModalServicos()">
  Editar Serviços
</button>

</form>