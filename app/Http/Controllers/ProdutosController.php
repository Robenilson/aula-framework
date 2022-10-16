<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{


private $produtos = [
    [
        'nome' => 'Processador Intel I9',
        'categoria' => 'Informática',
        'preco' => 1899.90,
        'novo' => true,
        'promocao' => false
    ],
    [
        'nome' => 'Guitarra Fender Stratocaster',
        'categoria' => 'Instrumentos musicais',
        'preco' => 9899.90,
        'novo' => true,
        'promocao' => false
    ],
    [
        'nome' => 'TV Sony 59"',
        'categoria' => 'Eletrônicos',
        'preco' =>  2499.90,
        'novo' => true,
        'promocao' => true
    ],
    [
        'nome' => 'Soundbar LG XPTO',
        'categoria' => 'Eletrônicos',
        'preco' =>  899.90,
        'novo' => true,
        'promocao' => true
    ],
    [
        'nome' => 'Processador AMD Ryzen 3',
        'categoria' => 'Informática',
        'preco' => 399.90,
        'novo' => false,
        'promocao' => false
    ],
    [
        'nome' => 'iPhone 8 - 64GB',
        'categoria' => 'Celulares',
        'preco' =>  1899.90,
        'novo' => false,
        'promocao' => false
    ],
    [
        'nome' => 'Smartphone Samsung Galaxy S20',
        'categoria' => 'Celulares',
        'preco' =>  1299.90,
        'novo' => false,
        'promocao' => true
    ]
];



    public function index(){
        $i=1;
        $j=1;


        $produtos_novos = array_filter($this->produtos, fn($n) => $n['novo'] =='1' );
        $produtos_usados = array_filter($this->produtos, fn($n) => $n['novo'] =='' );
        return  view("Produtos.produtos", compact("produtos_usados", "produtos_novos", "i","j"));

    }




    public function filter ( $value){
        $i=1;
        $j=1;
        $produtos_novos=array('');
        $produtos_usados=array('');

        if ( $value =='novos'){
            $produtos_novos = array_filter($this->produtos, fn($n) => $n['novo'] =='1' );
            $produtos_usados=false;
        }

        else if (  $value =='usados'){
            $produtos_usados = array_filter($this->produtos, fn($n) => $n['novo'] =='' );
            $produtos_novos=false;
        }

        return  view("Produtos.produtos", compact("produtos_usados", "produtos_novos", "i","j"));

    }



}
