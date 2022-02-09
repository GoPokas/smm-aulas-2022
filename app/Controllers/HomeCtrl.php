<?php

class HomeCtrl
{
    public function first($rota) {
        view()->load('home/myfirst');
    }

    public function home($rota) {
        //dd(auth()->hashPassword('000'));
        $user = auth()->haveUserOrReditectTo();

        /** @var Utilizador $user */
        $id = $user->getId();

        // aceder à BD para obter todos os projetos
        $sql = <<<SQL
SELECT count(*) as qtd
FROM projeto 
WHERE 
  NOT isnull(dh_terminado) 
  AND reg_utilizador_id = :id_utilizador 
ORDER BY dh_registo
SQL;
        $prjs_terminados = bd()->fetchQuery($sql, ['id_utilizador' => $id]);

        $sql = <<<SQL
SELECT count(*)  as qtd
FROM projeto 
WHERE 
  NOT isnull(dh_desativado) 
  AND reg_utilizador_id = :id_utilizador 
ORDER BY dh_registo
SQL;
        $prjs_desativados = bd()->fetchQuery($sql, ['id_utilizador' => $id]);

        $sql = <<<SQL
SELECT count(*)  as qtd
FROM projeto 
WHERE 
      isnull(dh_terminado) 
  AND isnull(dh_desativado) 
  AND reg_utilizador_id = :id_utilizador 
ORDER BY dh_registo
SQL;
        $prjs_em_curso = bd()->fetchQuery($sql, ['id_utilizador' => $id]);

        $dados_para_o_template = [
            'is_admin' => $id==1, // $user->isAdmin()
            'qtd_prjs_terminados' => $prjs_terminados[0]['qtd'],
            'qtd_prjs_desativados' => $prjs_desativados[0]['qtd'],
            'qtd_prjs_em_curso' => $prjs_em_curso[0]['qtd'],
            'qtd_total' => $prjs_terminados[0]['qtd']
                + $prjs_desativados[0]['qtd']
                + $prjs_em_curso[0]['qtd'],
        ];
        view()->load('home/myhome', $dados_para_o_template);
    }
}