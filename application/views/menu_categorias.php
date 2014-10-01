<div class="col-md-2">
    <div class="row">
    <div class="list-group">
    <!-- <div class="panel panel-default"> 
        <div class="panel-heading">Categorias</div>
        <div class="panel-body">   -->


            <?php foreach ($categorias as $cat): ?>
                <!-- <button type="button" class="btn btn-default btn-md btn-block"> -->

                    <a class="list-group-item" href="<?php echo base_url('receitas/categoria/' . $cat->slug_categoria); ?>" >
                        <span class="glyphicon glyphicon-star">  </span>  <?php echo $cat->categoria; ?>
                    </a>
                <!-- </button> -->
            <?php endforeach; ?>

        </div>        
    </div>
</div>








