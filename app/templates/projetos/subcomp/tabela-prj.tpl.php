<?php if (!$qtd_prjs): ?>
    <h5>Não há projetos a apresentar</h5>
<?php else: ?>
    <table class="table">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Data de Registo</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($prjs as $p): ?>
            <tr>
                <td><?=$p['nome']?></td>
                <td><?=$p['dh_registo']?></td>
                <td>
                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    <a href="<?=url()->route('prj_show', [$p['id']])?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>