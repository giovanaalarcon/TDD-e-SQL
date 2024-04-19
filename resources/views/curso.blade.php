<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Home</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <div class="h2 pb-3 mb-4 text-dark border-bottom border-2 border-dark">{{ $curso->nome }}</div>

    @if(session('msg'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
    @endif

    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="card-title">{{ $curso->nome }}</h4>
                    <p class="card-text text-decoration-underline">codigo: </p>
                    <p>{{ $curso->codigo }}</p>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalCurso">
                    Atualizar Informacoes
                    </button>

                    <div class="modal fade" id="ModalCurso" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Atualizar Informacoes do Curso</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row g-3" action="{{ route('curso.edit.do', ['curso' => $curso->id ]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="nome" class="form-label">Nome do Curso</label>
                                        <input type="text" name="nome" class="form-control" id="nome" value="{{ $curso->nome }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="codigo" class="form-label">Codigo do Curso</label>
                                        <input type="text" name="codigo" class="form-control" id="codigo" value="{{ $curso->codigo }}">
                                    </div>

                                    <input type="submit" class="btn btn-primary" value="Atualizar Informacoes do Curso">
                                    
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="h2 pb-3 mb-4 text-dark border-bottom border-2 border-dark">Alunos Matriculados</div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">NOME</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach($alunos as $aluno)
            <tr>
                <td>{{ $aluno->nome }}</td>
                <td>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    
                </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>