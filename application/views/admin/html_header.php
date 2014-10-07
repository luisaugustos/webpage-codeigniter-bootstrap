<?php echo doctype('xhtml1-trans'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Receitas - Admin</title>
        <?php
        $meta = array(
            array('name' => 'robots', 'content' => 'NOINDEX, NOFOLLOW'),
            array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
        );
        echo meta($meta);
        echo link_tag('//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js');
        echo link_tag('assets/img/fork.ico', 'shortcut icon', 'image/ico');
        echo link_tag('assets/css/layout-login.css');
        echo link_tag('assets/bootstrap/css/bootstrap.min.css');
        echo link_tag('assets/bootstrap/js/bootstrap.min.js');
        ?>
    </head>
    