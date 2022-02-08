<?php

class HomeCtrl
{
    public function first($rota) {
        view()->load('home/myfirst');
    }

    public function home($rota) {
        //dd(auth()->hashPassword('000'));
        $user = auth()->haveUserOrReditectTo();
        $dados_para_o_template = [
            'user' => $user,
            //'users' => bd()->fetchAll(USER_TABLE),
        ];

        view()->load('home/myhome', $dados_para_o_template);
    }
}