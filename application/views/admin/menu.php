<div id="menu">

    <?php
    $menu[] = anchor('admin/categorias', 'Categorias', 'title="Administrar Categorias"');
    $menu[] = anchor('admin/receitas', 'Receitas', 'title="Administrar Receitas"');
    $menu[] = anchor('admin/usuarios', 'Usuários', 'title="Administrar Usuários"');
    echo url($menu);
    ?>

    <span class="saudacao">
        Seja  bem-vindo:

        <?php
        echo $this->session->userdata('usuario');
        echo " | ";
        echo anchor('admin/home/logout', 'Sair', 'title="Efetuar Logout"');
        ?>

    </span>
</div>
