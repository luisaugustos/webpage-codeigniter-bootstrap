<div class="col-md-8">
    
        
            <?php foreach ($chamadas as $chamada): ?>
                <div id="item-grid-home"class="col-xs-5">
                <div id="item-grid-home-img" class="thumbnail">                    
            
                <ol class="breadcrumb">
                    <li><a href="receitas/ver/<?php echo $chamada->slug_receita; ?>"><strong><h5><?php echo $chamada->nome; ?></h5></strong></a></li>
                </ol>
                
                <a href="receitas/ver/<?php echo $chamada->slug_receita; ?>">
                    <?php
                    $image_properties = array(
                        'src' => 'assets/imgs/receitas/' . $chamada->foto,
                        'height'=>'200px',
                        'width'=>'200px',                        
                    );
                    echo img($image_properties);
                    ?>
                </a>
                <p>
                    <a href="receitas/ver/<?php echo $chamada->slug_receita; ?>">
                        <?php echo word_limiter($chamada->texto, 20); ?>
                    </a>
                    <br>
                    <br>
                </p>
                </div>  
                </div>
    <?php endforeach; ?>
   
</div>

