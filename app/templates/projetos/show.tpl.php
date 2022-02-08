<?php
// tvars(get_defined_vars());

view()->load('base/header');
view()->load('base/navbar');
?>

<div class="container">
    <div class="row mb-3">
        <div class="flash-messages"><?= flash()->get() ?></div>
    </div>
    <div class="row">

        <div class="col"><h1>Dados do projeto</h1></div>

    </div>
</div>

<?php
tvars(get_defined_vars());

view()->load('base/footer');
?>
