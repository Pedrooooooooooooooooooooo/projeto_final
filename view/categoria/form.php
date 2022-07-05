<!-- Conteúdo da página -->
<div class="container mt-2 mb-3">
    <h1 class="mt-2">Cadastro de Categoria</h1>
    <hr>

    <form method="POST" action="<?= base_url(). "?c=categoria&m=inserir" ?>">
        
         <div class="mb-3">
            <label for="categoria" class="form-label">Nome</label>
            <input type="text" class="form-control" id="categoria" name="categoria">
            
         </div>

        
         <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>