<div class="navbar navbar-inverse navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">      
            <a class="navbar-brand" href="<?= base_url()?>">Receitando</a>
        </div>
        <p class="navbar-text navbar-right">Receitas simplesmente deliciosas...</p>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-right" method="post" action="<?= base_url() . 'receitas/buscar' ?>">
                <div class="form-group">
                    <input type="text" name="busca" class="form-control" placeholder="Pesquisar receitas...">
                </div>
                <button type="submit" name="button_buscar" value="Busca" class="btn btn-success">Pesquisar</button>
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</div>
<div class="container-fluid">
    <div class="row">
        


