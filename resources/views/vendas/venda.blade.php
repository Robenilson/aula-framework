<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>


    <div class="container">

            <div class="cotainer mt-5">
                <div class="row">
                    <div class="container text-center mb-2">



                    @if ($tipo == 1)
                        <h1>Produtos </h1>
                        @foreach ($vendas as $produto_novo)
                            <p class="mt-5">- Produto: {{$produto_novo['produto']}} </p>
                            <p> - Quant.: {{ $produto_novo['quantidade'] }} </p>
                            <p> - Preço Unitário: {{number_format($produto_novo['preco_unitario'], 2, ',', '.')}} </p>
                            <p> - Total: {{ number_format( ($produto_novo['preco_unitario'] *  $produto_novo['quantidade'] ), 2, ',', '.')  }} </p>

                           =============================================

                        @endforeach
                    @endif
                    @if ($tipo == 2)

                            <h1> {{$vendas['produto']}}</h1>




                            <p> - Quant.: {{ $vendas['quantidade'] }} </p>
                            <p> - Preço Unitário: R$  {{number_format($vendas['preco_unitario'], 2, ',', '.')}} </p>
                            <p> - Total: R$  {{ number_format( ($vendas['preco_unitario'] *  $vendas['quantidade'] ), 2, ',', '.')  }} </p>




                    @endif

                    @if ($tipo == 3)



                            <h1  class="alert alert-danger" >Valor Nulo </h1>


                    @endif


                    @if ($tipo == 4)



                            <h1 class="alert alert-success" > Excluido com Sucesso </h1>


                    @endif

                    @if ($tipo == 5)



                    <h1 class="alert alert-success" >{{ $funcao }} </h1>

                    <h1> {{$vendas['produto']}}</h1>
                    <p> - Quant.: {{ $vendas['quantidade'] }} </p>
                    <p> - Preço Unitário: R$ {{number_format($vendas['preco_unitario'], 2, ',', '.')}} </p>
                    <p> - Total:R$ {{ number_format( ($vendas['preco_unitario'] *  $vendas['quantidade'] ), 2, ',', '.')  }} </p>


                  @endif


                </div>

                </div>
            </div>
        </table>
    </div>




</body>

</html>
