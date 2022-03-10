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
                <img src="<?= ASSETS_URL ?>imgs/logo.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Jogadores <span class="badge bg-info"><?= $qtd_total ?></span></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col">Europa</div>
                            <div class="col text-end"><span class="badge rounded-pill bg-info"><?= $qtd_prjs_em_curso ?></span></div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col">América do Norte</div>
                            <div class="col text-end"><span class="badge rounded-pill bg-info"><?= $qtd_prjs_terminados ?></span></div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col">América do Sul</div>
                            <div class="col text-end"><span class="badge rounded-pill bg-info"><?= $qtd_prjs_desativados ?></span></div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col">Ocêania</div>
                            <div class="col text-end"><span class="badge rounded-pill bg-info"><?= $qtd_prjs_desativados ?></span></div>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Registo de Jogador</h5>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputUsername">Nome</label>
                                <input type="username" class="form-control" id="inputUsername" placeholder="Ex: Rodrigo">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputNickname">Nick</label>
                                <input type="nickname" class="form-control" id="inputNickname" placeholder="Ex: Pokas">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputRank">Rank</label>
                                <select id="inputRank" class="form-control">
                                    <option selected disabled>Escolha o seu rank</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Região</label>
                                <select id="inputState" class="form-control">
                                    <option selected disabled>Escolha uma região</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                        </div>
                        <div class="card-body text-end">
                            <button type="submit" class="btn btn-primary">Registar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


</div>
</div>

<?php
// tvars(get_defined_vars());

view()->load('base/footer');
?>