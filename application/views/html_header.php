<?php echo doctype('xhtml-trans'); ?>
<html>  
    <head>
        <title>Receitas</title>
    <?php
    $meta = array(
        array('name' => 'robots','content' => 'no-cache'),
        array('name' => 'description','content' => 'Meu website de receitas'),
        array('name' => 'keyword','content' => 'Receitas, doce, salgados, sobremesas, massas'),
        array('name' => 'robots','content' => 'no-cache'),
        array('name' => 'Content-type','content' => 'text/html; charset=utf-8', 'type' => 'equiv')
    );
    echo meta($meta);
    echo link_tag('//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js');
    echo link_tag('assets/img/fork.ico','shortcut icon','image/ico');
    echo link_tag('assets/css/layout.css');
    echo link_tag('assets/bootstrap/css/bootstrap.min.css');
    echo link_tag('assets/bootstrap/js/bootstrap.min.js');
   
    ?>
        
    </head>
</body>