<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FilmesModel;

class CineConnect extends BaseController
{
    private $CineConnect;

    public function __construct(){
        $this->CineConnect = new FilmesModel();
    }
    public function index()
    {
        return view('dados_filme', [
            'filmes'=> $this->CineConnect->paginate(6),
            'pager' => $this->CineConnect->pager
        ]);
    }

    public function form_create()
    {
        return view('cadastro_filme');
    }

    public function create_filme()
    {
        $this->CineConnect->insert([
            'titulo' => $this->request->getVar('titulo'),
            'duracao' => $this->request->getVar('duracao'),
            'data_estreia' => $this->request->getVar('data_estreia'),
            'classificacao' => $this->request->getVar('classificacao'),
            'genero' => $this->request->getVar('genero'),
            'atores' => $this->request->getVar('atores'),
            'sala_exibicao' => $this->request->getVar('sala_exibicao'),
            'sessao' => $this->request->getVar('sessao'),
            'link' => $this->request->getVar('link'),
        ]);

        return view('mensagem');
    }

    public function mensagem() 
    {
        return view('mensagem');
    }


}
