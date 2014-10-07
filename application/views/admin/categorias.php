
<!--<h3><span class="glyphicon glyphicon-plus"> </span> Cadastrar categoria</h3>-->
<!--INICIO FORMULARIO-->
<fieldset>
    <legend><span class="glyphicon glyphicon-plus"> </span>  Cadastrar categorias</legend>
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <form class="form" id="formlogin" method="post" action="<?= base_url() . 'admin/categorias/adicionar' ?>" >


            <span><?php echo validation_errors() ?></span>

            <div class="form-group">
                <label for="categoria">Categoria</label>
                <input type="text" name="categoria" class="form-control" value="<?php set_value('categoria') ?>" id="categoria" placeholder="Digite a categoria da receita...">
            </div>

            <div class="form-group">
                <label for="slug_categoria">Slug</label>
                <input type="text" name="slug_categoria" class="form-control" value="<?php set_value('slug_categoria') ?>"id="slug_categoria"  placeholder="Digite o slug para a categoria, exemplo: tortas-e-bolos, receitas-rapidas...">
            </div>


            <button type="submit" name="btnSubmit" id="btnSubmit" value="Adicionar" class="btn btn-success">Adicionar</button>

        </form>
    </div>
</fieldset>   
<!-- Fim do formulario -->
<br>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">

        <table class="table table-striped">
            <tr>
                <th>Categoria</th>
                <th>Slug</th>
                <th>Editar</th>
                <th>Excluir</th>

            </tr>
            
            <?php
            // lista todas as categorias atravez de um consulta em controllers
            foreach ($categorias as $categoria) { ?>

                <tr>
                    <td><?= $categoria->categoria ?></td>
                    <td><?= $categoria->slug_categoria ?></td>
                    <td><a <button type="button" class="btn btn-default" onclick="return confirm('Confirma a alteração desta categoria')"
                                   href="<?= base_url() . 'admin/categorias/editar/' . $categoria->id_categoria ?>"><span class="glyphicon glyphicon-pencil"> </span>
                                Editar        
                        </a></td>
                    <td><a type="button" class="btn btn-danger" onclick="return confirm('Confirma a exclusão desta categoria')"
                           href="<?= base_url() . 'admin/categorias/excluir/' . $categoria->id_categoria ?>"><span class="glyphicon glyphicon-remove"> </span>

                        </a></td>
                </tr>




            <?php } ?>
        </table>
    </div>
</div>

