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







        /*





    public function atualizarVenda(){

    }


   */


/*

Bom dia, pessoal! Tudo bem!?

Atividade pontuada 4:

Crie um controlador chamado VendasController. Ele deve ter os métodos: listarVendas, verVenda, cadastrarVenda,
 atualizarVenda e
.


Esses métodos devem estar associados às respectivas rotas a seguir: /vendas, /vendas/ver/{id},
 /vendas/nova/{produto}/{preco}/{quantidade}, /vendas/atualizar/{id}/{produto}/{preco}/{quantidade},
  /vendas/excluir/{id}.

- Deve ser criado um banco de dados chamado "financeiro" e uma tabela chamada "vendas"
- Deve ser criado um Model chamado Venda com a opção public $timestamps = false;
- A tabela de vendas deve ter as seguintes colunas: id, produto, preco_unitario, quantidade

1. O método listarVendas deve imprimir no próprio controlador algo como:

## Produtos ##

- Produto: IPhone 13 Pro Max
- Quant.: 2
- Preço Unitário: R$ 7.000,00
- Total: R$ 14.000,00

=============================================

- Produto: SmartTV LG 40"
- Quant.: 1
- Preço Unitário: R$ 3.500,00
- Total: R$ 3.500,00

2. O método verVenda deve imprimir no próprio controlador algo como:

## SmartTV LG 40 ##

- Quant.: 1
- Preço Unitário: R$ 3.500,00
- Total: R$ 3.500,00

3. O método cadastrarVenda e atualizarVenda devem cadastrar/atualizar (respectivamente) com base nos dados informados na URL
Obs.: Após a inclusão / atualização, deve haver uma mensagem textual informando que tudo ocorreu bem.

4. O método excluirVenda deve excluir o registro com base no ID informado na URL.
Obs.: Após a exclusão, deve haver uma mensagem textual informando que tudo ocorreu bem.

Utilizem o mesmo repositório público utilizado nas atividades anteriores. Apenas o link para o mesmo deve ser enviado a min via email:
*/
