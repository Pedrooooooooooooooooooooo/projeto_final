<!-- Conteúdo da página -->
<div class="container mt-2 mb-3">
    <h1 class="mt-2">Cadastro de Usuario</h1>
    <hr>

    <form method="POST" action="<?= base_url() . "?c=usuario&m=salvar" ?>">

        <div class="mb-3">
            <label for="login" class="form-label">Login</label>
            <input type="email" class="form-control" id="login" name="login" 
           
            >
        </div>

        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" >
        </div>   
             
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>