
<!--INICIO FORMULARIO-->
<fieldset>
    <legend><span class="glyphicon glyphicon-plus"> </span>  Cadastrar Receita</legend>
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <form class="form" id="formlogin" method="post" action="<?= base_url() . 'admin/receitas/adicionar' ?>" >

            <span><?php echo validation_errors() ?></span>
            <div class="form-group ">
                <label for="categoria" class="col-sm-2 control-label">Categoria :</label>
                <div class="col-sm-10">
                    <select name="categoria" class="form-control"> 		 
                        <?php foreach ($categorias as $categoria) { ?>
                            <option class="form-control" value="<?= $categoria->id_categoria ?>"><?= $categoria->categoria ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <br>

            <br>
            <br>
            <div class="form-group" >
                <label for="nome" class="col-sm-2 control-label">Nome :</label>
                <div class="col-sm-10">
                    <input type="text" name="nome" class="form-control" value="<?php set_value('nome') ?>" id="nome" placeholder="Digite o nome da receita...">
                </div>
            </div>
            <br>
            <br>
            <div class="form-group" >
                <label for="slug_receita" class="col-sm-2 control-label">Slug :</label>
                <div class="col-sm-10">
                    <input type="text" name="slug_receita" class="form-control" value="<?php set_value('categoria') ?>" id="categoria" placeholder="Digite a categoria da receita...">
                </div>
            </div>
            <br>
            <br>
            <div class="form-group " >
                <label for="texto" class="control-label">Texto da Receita:</label>
                <textarea type="text" name="texto" class="form-control" rows="5" value="<?php set_value('texto') ?>" id="texto" placeholder="Digite o texto da receita..."></textarea>

            </div>

            <div class="form-group">

                <label for="userfile" class="col-sm-2 control-label">Foto</label>
                <div class="col-sm-10">
                    <input type="file" id="userfile" name="userfile">
                    <p class="help-block">Adicione a imagem da sua receita.</p>

                </div>
            </div>
            <div class="col-sm-offset-10 col-sm-2">
                <button type="submit" name="btnSubmit" id="btnSubmit" value="Adicionar" class="btn btn-success btn-block">Adicionar</button>
            </div>
        </form>
    </div>
</fieldset>  
<!-- Fim do formulario -->

<!-- inicia tabela -->
<hr> 

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">

        <table class="table table-striped table-bordered">
            <tr>

                <th>Receita</th>
                <th>Slug</th>
                <th>Categoria</th> 
                <th>Foto</th>
                <th>Editar</th>
                <th>Excluir</th>

            </tr>

            <?php
            // lista todas as categorias atravez de um consulta em controllers
            foreach ($receitas as $receita) {

                foreach ($categorias as $categoria) {
                    if ($categoria->id_categoria == $receita->categoria) {
                        $nomeCategoria = $categoria->categoria;
                    }
                }
                ?>

                <tr>
                    <td><?= $receita->nome ?></td>
                    <td><?= $receita->slug_receita ?></td>
                    <td><?= $nomeCategoria ?></td>
                    <td><a button type="button" class="btn btn-default" data-toggle="modal" onclick="wind">Ver</a>

                    <td><a button type="button" class="btn btn-default" onclick="return confirm('Confirma a alteração desta categoria')"
                           href="<?= base_url() . 'admin/categorias/editar/' . $receita->id_receita ?>"><span class="glyphicon glyphicon-pencil"> </span>
                            Editar        
                        </a></td>
                    <td><a type="button" class="btn btn-danger" onclick="return confirm('Confirma a exclusão desta categoria')"
                           href="<?= base_url() . 'admin/categorias/excluir/' . $receita->id_receita ?>"><span class="glyphicon glyphicon-remove"> </span>

                        </a></td>
                </tr>


            <?php } ?>
        </table>
    </div>
</div>

