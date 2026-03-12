<style>
.modal {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.5);
  justify-content: center;
  align-items: center;
  z-index: 1000;
}

.modal-content {
  background: white;
  width: 500px;
  max-height: 80vh;
  padding: 20px;
  border-radius: 10px;
  display: flex;
  flex-direction: column;
}

.lista-scroll {
  max-height: 300px;
  overflow-y: auto;
  border: 1px solid #ddd;
  margin: 10px 0;
  border-radius: 6px;
}

.servico-item {
  display: flex;
  justify-content: space-between;
  padding: 10px;
  border-bottom: 1px solid #eee;
}

.servico-item:last-child {
  border-bottom: none;
}
</style>
<?php
$servicos = [
  ['id' => 1, 'nome' => 'Corte de Cabelo', 'valor' => 30],
  ['id' => 2, 'nome' => 'Barba', 'valor' => 20],
  ['id' => 3, 'nome' => 'Sobrancelha', 'valor' => 15],
  ['id' => 4, 'nome' => 'Escova', 'valor' => 40],
  ['id' => 5, 'nome' => 'Hidratação', 'valor' => 50],
];
?>
<div id="modalServicos" class="modal">
  <div class="modal-content">

    <h2>Editar Serviços</h2>
<!-- === === === Abaixo esta o certo para usar com banco === === === -->
    <!-- <div class="lista-scroll">
      <?php
      // require_once __DIR__.'/../conexao.php';

      // $sql = $pdo->query("SELECT id, nome, valor FROM servico");

      // while ($s = $sql->fetch(PDO::FETCH_ASSOC)) {
      //   echo "
      //   <div class='servico-item'>
      //     <span>{$s['nome']} - R$ {$s['valor']}</span>
      //     <button onclick='editarServico({$s['id']})'>Editar</button>
      //   </div>
      //   ";
      // }
      ?>
    </div> -->
    <!-- Este abaixo e so de teste sem banco -->
    <div class="lista-scroll">
      <?php foreach ($servicos as $s): ?>
        <div class="servico-item">
          <span><?= $s['nome'] ?> - R$ <?= $s['valor'] ?></span>
          <button type="button">Editar</button>
        </div>
      <?php endforeach; ?>
  </div>

    <button onclick="abrirModalNovoServico()">+</button>
    <button onclick="fecharModalServicos()">Fechar</button>

  </div>
</div>

<script>
function abrirModalServicos() {
  document.getElementById('modalServicos').style.display = 'flex';
}

function fecharModalServicos() {
  document.getElementById('modalServicos').style.display = 'none';
}

</script>