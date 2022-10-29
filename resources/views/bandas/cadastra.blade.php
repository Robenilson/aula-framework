<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar nova banda </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <form method="POST" action="salvar">
        <div class="container">
            <div class="row  mt-5 ">
                <h1 class="col" > Cadastrar  uma  nova Banda </h1>
            </div>
            @csrf
            <div class="row  mt-5">
            <div class="mb-5">
                <label for="nomebanda" class="form-label">Nome banda </label>
                <input type="text" class="form-control" id="nomebanda"  name=nome  aria-describedby="nomeBanda">
           </div>
           <div class="mb-5">
            <label for="Estilo" class="form-label">Estilo da  banda </label>
            <input type="text" class="form-control" id="Estilo"  name=estilo  aria-describedby="nomeBanda">
          </div>
          <div class="mb-5">
            <label for="criacao" class="form-label">Data de Criação  da  banda </label>
            <input type="text" class="form-control" id="criacao"  name=ano_criacao  aria-describedby="nomeBanda">
          </div>
          <div class="mb-5">
            <label for="vendidos" class="form-label">Discos vendidos </label>
            <input type="text" class="form-control" id="vendidos"  name=total_de_discos  aria-describedby="nomeBanda">
          </div>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
      </form>
</body>
</html>
