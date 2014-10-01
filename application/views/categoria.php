<div class="col-md-8">
<div class="thumbnail">
    <h3><?php echo heading("Receitas simplesmente deliciosas",2); ?></h3>
    <?php        
    if (count($receitas) > 0) {
    ?>
    <div class="list-group">
        <?php echo heading($receitas[0]->categoria,3);
        
        foreach ($receitas as $receita):?>
        
        <a class="list-group-item" href="<?php echo base_url().'receitas/ver/'.$receita->slug_receita?>">
        <?=$receita->nome?>
        </a>
                        
        <?php endforeach;?>
    </div>
    <?php
    }
    else { "<p class='zero-resultados'>:-( nenhuma receita encontrada nesta categoria.</p>";
    } ?>
    
</div>
</div>