<div class="col-md-8">
    <div class="thumbnail">
        <div class="collapse-page-header">
            <?php echo heading("&nbsp;Receitas simplesmente deliciosas", 2); ?>
        </div>
        

        <?php foreach ($receita as $rec) { ?>
            <div class="collapse-page-header" align="center"><h1><small><?= $rec->nome; ?></h1></small></div>
            <hr>
            <div class="col-md-6"><a class="imagem_receita"><?php echo img('assets/imgs/receitas/' . $rec->foto); ?></a></div>
            <div class="col-md-6"><?php echo "<p>" . nl2br($rec->texto) . "</p>"; ?></div>     
            
        <?php } ?>

        <div class="col-md-offset-10">
            <a type="button" class="btn btn-primary" href="javascript:history.go(-1)">Voltar</a>
            <a type="button" class="btn btn-primary" href="javascript:self.print()">Imprimir</a>  
            
        </div>
            

    </div>    
</div>
