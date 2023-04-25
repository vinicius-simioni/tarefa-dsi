<?php

namespace App\Http\Controllers;

use App\Models\Estoque;
use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    public function index() {

        //busca tudo da tabela estoques
        //$lista = Estoque::all();
        $lista = Estoque::orderBy('id', 'desc')->get();

        //envia os dados para o index
        return view('estoque.index', [
            'lista' => $lista,
        ]);
    }

    public function adicionar(Request $form) {

        if($form->method() == 'POST'){

            //validate valida os campos
            $dados = $form->validate([
                'nome' => 'required',
                'quantidade' => 'required'
            ]);

            //envia os dados para o banco
            Estoque::create($dados);

            return redirect('estoque');

        }

        return view('estoque/adicionar');
    }

}
