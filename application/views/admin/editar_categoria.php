
<!--<h3><span class="glyphicon glyphicon-plus"> </span> Cadastrar categoria</h3>-->
<!--INICIO FORMULARIO-->
<fieldset>
    <legend><span class="glyphicon glyphicon-plus"> </span>  Editar categoria</legend>
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <form class="form" id="formlogin" method="post" action="<?= base_url() . 'admin/categorias/salvar_alteracao' ?>" >


            <span><?php echo validation_errors() ?></span>
                <input type="hidden" name="id_categoria" class="form-control" value="<?=$categorias[0]->id_categoria?>">
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <input type="text" name="categoria" class="form-control" value="<?=$categorias[0]->categoria?>" id="categoria" placeholder="Digite a categoria da receita...">
            </div>

            <div class="form-group">
                <label for="slug_categoria">Slug</label>
                <input type="text" name="slug_categoria" class="form-control" value="<?=$categorias[0]->slug_categoria?>"id="slug_categoria"  placeholder="Digite o slug para a categoria, exemplo: tortas-e-bolos, receitas-rapidas...">
            </div>


            <button type="submit" name="btnSubmit" id="btnSubmit" value="Adicionar" class="btn btn-success">Alterar</button>

        </form>
    </div>
</fieldset>   
<!-- Fim do formulario -->
