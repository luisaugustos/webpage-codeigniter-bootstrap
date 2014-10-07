<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form class="form-signin" id="formlogin" method="post" action="<?= base_url() . 'admin/home/login' ?>">
                <h2 class="form-signin-heading">Admin - Receitas</h2>
                <input type="text" name="usuario" class="form-control" placeholder="Usúario" required autofocus>
                <input type="password" name="senha" class="form-control" placeholder="Password" required>
                <br>
                <button align="center" class="btn btn-lg btn-primary" name="btnSubmit" type="submit">Efetuar Login</button>
            </form>
        </div>
    </div>
</div> <!-- /container -->


