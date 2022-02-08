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

        <div class="accordion" id="accordionExample">

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Terminados
                        <span class="badge rounded-pill bg-secondary"><?=$qtd_prjs_terminados?></span>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <?= view()->load('projetos/subcomp/tabela-prj', [
                            'prjs' => $prjs_terminados,
                            'qtd_prjs' => $prjs_terminados,
                        ], false) ?>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Desativados
                        <span class="badge rounded-pill bg-secondary"><?=$qtd_prjs_desativados?></span>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?=view()->load('projetos/subcomp/tabela-prj', [
                            'prjs' => $prjs_desativados,
                            'qtd_prjs' => $prjs_desativados,
                        ], false) ?>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Em curso
                        <span class="badge rounded-pill bg-secondary"><?=$qtd_prjs_em_curso?></span>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?= $tab3 = view()->load('projetos/subcomp/tabela-prj', [
                            'prjs' => $prjs_em_curso,
                            'qtd_prjs' => $prjs_em_curso,
                        ], false) ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
//tvars(get_defined_vars());

view()->load('base/footer');
?>
