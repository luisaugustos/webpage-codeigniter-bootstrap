<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Alternar Navegação</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">.: Receitas :.</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?= base_url() . 'admin/categorias' ?>" title="Administrar Categorias">Categorias</a></li>
        <li><a href="<?= base_url() . 'admin/receitas' ?>" title="Administrar Receitas">Receitas</a></li>
        <li><a href="<?= base_url() . 'admin/usuarios' ?>" title="Administrar Usuários">Usuários</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a type="button" class="btn btn-warning" href="<?phpdefault base_url().'admin/home/logout'?>" title="Efetuar Logout">Sair</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>





