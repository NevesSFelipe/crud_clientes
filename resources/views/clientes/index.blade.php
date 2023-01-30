<!doctype html>
<html lang="pt-br">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-3">

        <div class="row">
            <div class="col-lg-6">
                <h1 class="text-info">Clientes</h1>
            </div>
            <div class="col-lg-6">
                <a href="#">
                    <button class="btn btn-info float-right">
                        Adicionar
                    </button>
                </a>
            </div>
        </div>

        <hr class="bg-info">

        <table class="table table-striped table-bordered text-center">
            <thead class="thead-dark ">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">CEP</th>
                <th scope="col">Contato</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                        <tr>
                            <th scope="row">{{ $cliente->id }}</th>
                            <td>{{ $cliente->nome }}</td>
                            <td>{{ $cliente->cep }}</td>
                            <td>{{ $cliente->contato }}</td>
                            <td>
                                <a href="" class="ml-2"><i class="fa-solid fa-eye text-info"></i></a>
                                <a href="" class="ml-2"><i class="fa-solid fa-pen-to-square text-warning"></i></a>
                                <a href="" class="ml-2"><i class="fa-solid fa-trash text-danger"></i></a>
                            </td>
                        </tr>                         
                @endforeach
            </tbody>
          </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/910e6444fa.js" crossorigin="anonymous"></script>
  </body>
</html>