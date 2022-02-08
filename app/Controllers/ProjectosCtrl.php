<?php

class ProjectosCtrl
{
    public function list_all($rota)
    {
        // aceder à BD para obter todos os projetos
        $prjs_terminados = bd()->fetchQuery('SELECT * FROM projeto WHERE NOT isnull(dh_terminado) ORDER BY dh_registo');
        $prjs_desativados = bd()->fetchQuery('SELECT * FROM projeto WHERE NOT isnull(dh_desativado) ORDER BY dh_registo');
        $prjs_em_curso = bd()->fetchQuery('SELECT * FROM projeto WHERE isnull(dh_terminado) AND isnull(dh_desativado) ORDER BY dh_registo');

        // passar o controlo para a view projtos/list,
        // passando-lhe todos os projetos
        view()->load('projetos/list', [
            'prjs_terminados' => $prjs_terminados,
            'prjs_desativados' => $prjs_desativados,
            'prjs_em_curso' => $prjs_em_curso,
            'qtd_prjs_terminados' => count($prjs_terminados),
            'qtd_prjs_desativados' => count($prjs_desativados),
            'qtd_prjs_em_curso' => count($prjs_em_curso),
        ]);
    }

    public function show($rota, $id)
    {
        if(bd()->tryFetchById('projeto', $id, $prj))
            view()->load('projetos/show', [
                'prj' => $prj
            ]);
        else
            view()->nodata('Projeto inexistente', '/projetos', 'lista de projetos');
    }

}