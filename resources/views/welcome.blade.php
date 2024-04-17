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
    <div class="h2 pb-3 mb-4 text-dark border-bottom border-2 border-dark">Cursos de Informática</div>

    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($cursos as $curso)
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="card-title">{{ $curso->nome }}</h4>
                    <p class="card-text text-decoration-underline">codigo: </p>
                    <p>{{ $curso->codigo }}</p>
                    <a href="/curso/{{ $curso->id }}" class="btn btn-primary">Mais Informações</a>
                </div>
            </div>
        </div>
        @endforeach 
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