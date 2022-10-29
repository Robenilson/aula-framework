<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Atividade 4</title>
</head>
<body>
    <div class="container text-center  mt-5 ">
    @if (session()->has('status'))
        <div class="row">
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        </div>
    @endif
        <div class="row">
            <div class="col">
                <h1>Listar de bandas</h1>
            </div>
            <a href="{{route('cadastro')}}"> Cadastrar   nova  Banda </a>
        </div>
        <div class="row mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome da Banda</th>
                        <th scope="col">Estilo da Banda</th>
                        <th scope="col">Banda foi Criada em</th>
                        <th scope="col">Quantidade de Discos Vendidos </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bandas as $banda)
                        <tr>
                            <td>{{ $banda['id'] }}</td>
                            <td>{{ $banda['nome'] }}</td>
                            <td>{{ $banda['estilo'] }}</td>
                            <td>{{ $banda['ano_criacao'] }}</td>
                            <td>{{ $banda['total_de_discos'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
