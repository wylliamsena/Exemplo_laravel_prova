<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class Produtos extends Component
{
    public $busca = '';
    public $nome, $descricao, $preco, $quantidade, $quantidade_minima;
    public $produto_id;


    public function getProdutosProperty()
    {
        return Produto::where('nome', 'like', "%{$this->busca}%")->get();
    }

    public function salvar()
    {
        $this->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer',
            'quantidade_minima' => 'required|integer',
        ]);

        Produto::updateOrCreate(
            ['id' => $this->produto_id],
            [
                'nome' => $this->nome,
                'descricao' => $this->descricao,
                'preco' => $this->preco,
                'quantidade' => $this->quantidade,
                'quantidade_minima' => $this->quantidade_minima,
            ]
        );

        $this->resetInputs();
        session()->flash('mensagem', 'Produto salvo com sucesso!');
    }


    public function editar($id)
    {
        $produto = Produto::find($id);
        $this->produto_id = $produto->id;
        $this->nome = $produto->nome;
        $this->descricao = $produto->descricao;
        $this->preco = $produto->preco;
        $this->quantidade = $produto->quantidade;
        $this->quantidade_minima = $produto->quantidade_minima;
    }

    public function excluir($id)
    {
        Produto::find($id)->delete();
        session()->flash('mensagem', 'Produto excluído com sucesso!');
    }

    public function resetInputs()
    {
        $this->reset(['produto_id', 'nome', 'descricao', 'preco', 'quantidade', 'quantidade_minima']);
    }

    
    public function render()
    {
        return view('livewire.produtos', [
            'produtos'=> $this->produtos,
        ]);
    }
}
