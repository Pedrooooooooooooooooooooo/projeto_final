<!-- Conteúdo da página -->
<div class="container">
    <h1 class="mt-2">Lista de Produtos</h1>
    <hr>

    <a href="<?= base_url() . "?c=produto&m=add" ?>" class="btn btn-success">Inserir Produto</a>

    <table class="table table-hover table-responsive">
        <thead>
            <tr>
                <th class="col-6">Nome</th>
                <th>Preço</th>
                <th>Marca</th>
                <th>Foto</th>
                <th>Ações</th>               
            </tr>
        </thead>
        <tbody>
            <?php foreach($produtos as $produto):?>
            <tr>
                <td><?php echo $produto['nome']; ?></td>
                <td><?php echo $produto['preco']; ?></td>
                <td><?php echo $produto['marca']; ?></td>
                <td>
                    <a href="<?php echo $produto['foto']; ?>">
                        <img src="<?php echo $produto['foto']; ?>" height="30px">
                    </a>
                </td>
                <td>
                    <a href="<?= base_url() ?>?c=produto&m=excluir&id=<?= $produto['idproduto']; ?>" class="btn btn-danger" title="Excluir"><i class="fa-solid fa-trash-can"></i></a>
                    <a href="<?= base_url() ?>?c=produto&m=editar&id=<?= $produto['idproduto']; ?>" class="btn btn-primary" title="Editar"><i class="fa-solid fa-pencil"></i></a>
 
                    
                </td>
            <?php endforeach;?>
            </tr>
        </tbody>
    </table>

</div>