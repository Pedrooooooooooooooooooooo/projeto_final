<!-- Conteúdo da página -->
<div class="container mt-2">
  <div class="row">
    <div class="col-6">
        <img src="<?=$produto['foto']?>" class="img-fluid">
    </div>
    <div class="col-6">
      <h1><?= $produto['nome'] ?></h1>
      <p>Marca: <?= $produto['nome'] ?></p>
      <strong>R$ <?= $produto['preco'] ?></strong>
    </div>
  </div>

  <div>
    <h4 class="mt-3">Detalhes</h4>
    <hr>
    <?= $produto['descricao'] ?>
  </div>

  <hr>
</div>