<?php
// tvars(get_defined_vars());

view()->load('base/header');

?>

<div class="container">
    <div class="d-flex">
        <main class="form-signin text-center mx-auto" style="max-width: 400px;">
            <form id="login-form" action="<?= WEBROOT ?>auth" method="POST">
                <h1 class="h3 mb-3 fw-normal">Login</h1>
                <div class="mb-3">
                    <div class="flash-messages"><?= flash()->get() ?></div>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Nome de utilizador">
                </div>
                <div class="input-group mb-4">
                    <input type="password" class="form-control" id="tb-password" name="password" placeholder="Senha...">
                    <button class="btn btn-outline-secondary" type="button" id="button-show-psw">
                        <i class="fa fa-eye-slash hidden"></i><i class="fa fa-eye"></i></button>
                </div>
                <div class="text-end">
                    <button class="w-10 btn btns btn-primary font-weight-bold" type="submit">Login</button>
                </div>
                <p class="mt-1 mb-3 text-muted"><small>2022 - TGPSI</small></p>
            </form>

        </main>
    </div>
</div>
<?php
//tvars(get_defined_vars());

view()->load('base/footer')
?>