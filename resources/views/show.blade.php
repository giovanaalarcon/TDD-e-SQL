<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Detalhes do Aluno</title>
</head>
<body>
    <h1>Detalhes do Aluno</h1>
    <p>Nome: {{ $aluno->nome }}</p>
    <p>RA: {{ $aluno->RA }}</p>
    <p>Idade: {{ $aluno->idade }}</p>

    <h2>Professores:</h2>
    <ul>
        @foreach ($aluno->professores as $professor)
            <li>{{ $professor->nome }}</li>
        @endforeach
    </ul>
</body>
</html>
