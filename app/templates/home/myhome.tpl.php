<?php
// tvars(get_defined_vars());

view()->load('base/header');
view()->load('base/navbar');
?>

<div class="container home">
    <div class="row mb-3">
        <div class="flash-messages"><?= flash()->get() ?></div>
    </div>
    <div class="row">

        <div class="col">
            <div class="card">
                <img src="<?= ASSETS_URL ?>imgs/logo.jpeg"  class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Projetos <span class="badge bg-info"><?=$qtd_total?></span></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col">Em curso</div>
                            <div class="col text-end"><span class="badge rounded-pill bg-warning"><?=$qtd_prjs_em_curso?></span></div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col">Concluídos</div>
                            <div class="col text-end"><span class="badge rounded-pill bg-success"><?=$qtd_prjs_terminados?></span></div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col">Desativados</div>
                            <div class="col text-end" ><span class="badge rounded-pill bg-danger"><?=$qtd_prjs_desativados?></span></div>
                        </div>
                    </li>

                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <?php if($is_admin): ?>
                                <a href="#" class="btn btn-info btn-sm"><i class="fas fa-ellipsis-h"></i></a>
                                <?php endif; ?>
                            </div>
                            <div class="col text-end">
                                <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>

        </div>

        <div class="col">
            <div class="card">
                <img src="<?= ASSETS_URL ?>imgs/login.png"  class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>


    </div>
</div>

<?php
// tvars(get_defined_vars());

view()->load('base/footer');
?>
