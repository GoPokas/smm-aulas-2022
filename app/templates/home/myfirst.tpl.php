<?php
// tvars(get_defined_vars());

view()->load('base/header');

?>

<div class="container">
    <div class="row mb-3">
        <div class="flash-messages"><?= flash()->get() ?></div>
    </div>
    <div class="row">
        <h1>root</h1>
        <h3><a href="<?= url()->to('home') ?>">Home...</a></h3>
    </div>
</div>
<?php
// tvars(get_defined_vars());

view()->load('base/footer')
?>
