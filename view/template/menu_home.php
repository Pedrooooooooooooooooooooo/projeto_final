<!-- Menu do sistema -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      <?php foreach($categorias as $categoria): ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" 
            href="<?= base_url(). "?c=home&m=ver&id=".$categoria['idcategoria'] ?>">
              <?php $categoria['nome'] ?>
          </a>
        </li>
      <?php endforeach ?>

      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>