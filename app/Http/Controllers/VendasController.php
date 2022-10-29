<?php
namespace App\Http\Controllers;
use App\Models\Venda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class VendasController extends Controller
{
    public function listarVendas(){
        $vendas = new Venda;
        $vendas =  $vendas::all();
        $tipo =1;
        return  view("vendas.venda",['vendas'=>$vendas , 'tipo'=>$tipo ] );
    }
    public function verVenda($id){
        $vendas = new Venda;
        $vendas =  $vendas::find($id);
        $tipo=2;
      return    view("vendas.venda", ['vendas'=>$vendas , 'tipo'=>$tipo]);
    }
    public function excluirVenda($id){
        $vendas = new Venda;
        $vendas= $vendas::find($id);
        $tipo;
         if (is_null($vendas)){
            $tipo=3;
            return view("vendas.venda", [   'tipo'=>$tipo]);
         }
        else {
            $tipo=4;
            $vendas->delete();
            return view("vendas.venda", [   'tipo'=>$tipo]);
        }
    }
    public function cadastrarVenda($produto,$preco,$quantidade ){
        $tipo =5;
        $funcao ='Cadastrado';
        $vendas = new Venda;
        $vendas->produto=$produto;
        $vendas->preco_unitario=$preco;
        $vendas->quantidade=$quantidade;
        $vendas->save();
        return view("vendas.venda",['vendas'=>$vendas , 'tipo'=>$tipo , 'funcao'=>$funcao ]);
    }
    public function atualizarVenda($id,$produtos,$preco,$quantidade ){
        $tipo =5;
        $funcao ='Atualizar';
        $vendas = new Venda;
        $vendas=$vendas::find($id);
        $vendas->produto=$produtos;
        $vendas->preco_unitario=$preco;
        $vendas->quantidade=$quantidade;
        $vendas->save();
        return view("vendas.venda",['vendas'=>$vendas , 'tipo'=>$tipo , 'funcao'=>$funcao ]);
    }
}
