<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <title>Produtos</title>
</head>
    <body>
            @if ($produtos_novos)
                <div class="container">
                    <table class="table">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">nome</th>
                            <th scope="col">categoria</th>
                            <th scope="col">preco</th>
                            <th scope="col">novo</th>
                            <th scope="col">promocao</th>
                        </tr>
                        <div class="cotainer mt-5">
                            <div class="row">
                                <div class="container text-center mb-5">
                                    <h1>Produtos Novos </h1>
                                </div>
                                @foreach ( $produtos_novos as $produto_novo)
                                @if ( $produto_novo['promocao'] =='1')
                                        <tr class="table-success">
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $produto_novo['nome'] }}</td>
                                            <td>{{ $produto_novo['categoria'] }}</td>
                                            <td>R$ {{number_format( $produto_novo['preco'], 2, ',', '.') }}</td>
                                            <td>{{ $produto_novo['novo'] }}</td>
                                            <td>{{ $produto_novo['promocao'] }}</td>
                                        </tr>
                                @else
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $produto_novo['nome'] }}</td>
                                            <td>{{ $produto_novo['categoria'] }}</td>
                                            <td>R$ {{number_format($produto_novo['preco'], 2, ',', '.') }}</td>
                                            <td>{{ $produto_novo['novo'] }}</td>
                                            <td>{{ $produto_novo['promocao'] }}</td>
                                        </tr>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </table>
                </div>
            @endif
            @if ($produtos_usados)
                        <div class="container">
                            <table class="table">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">nome</th>
                                    <th scope="col">categoria</th>
                                    <th scope="col">preco</th>
                                    <th scope="col">novo</th>
                                    <th scope="col">promocao</th>
                                </tr>
                                <div class="cotainer mt-5">
                                    <div class="row">
                                        <div class="container text-center mb-5">
                                            <h1>Produtos Usados </h1>
                                        </div>
                                        @foreach ($produtos_usados  as $produtos_usuario)
                                            @if ( $produtos_usuario['promocao'] =='1')
                                                    <tr class="table-success">
                                                        <td>{{ $j++ }}</td>
                                                        <td>{{ $produtos_usuario['nome'] }}</td>
                                                        <td>{{ $produtos_usuario['categoria'] }}</td>
                                                        <td> R$ {{  number_format($produtos_usuario['preco'], 2, ',', '.') }}</td>
                                                        <td>{{ $produtos_usuario['novo'] }}</td>
                                                        <td>{{ $produtos_usuario['promocao'] }}</td>
                                                    </tr>
                                            @else
                                                    <tr>
                                                        <td>{{ $j++ }}</td>
                                                        <td>{{ $produtos_usuario['nome'] }}</td>
                                                        <td>{{ $produtos_usuario['categoria'] }}</td>
                                                        <td>R$ {{ number_format($produtos_usuario['preco'], 2, ',', '.') }}</td>
                                                        <td>{{ $produtos_usuario['novo'] }}</td>
                                                        <td>{{ $produtos_usuario['promocao'] }}</td>
                                                    </tr>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </table>
                        </div>
            @endif
    </body>
</html>
