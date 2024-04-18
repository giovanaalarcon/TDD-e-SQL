<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Professor</title>
</head>
<body>
    <h1>Inserir Professor</h1>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('store_professor') }}" method="post">
        @csrf
        <label for="nome">Nome do Professor:</label><br>
        <input type="text" id="nome" name="nome"><br><br>
        <label for="RP">RP do Professor:</label><br>
        <input type="text" id="RP" name="RP"><br><br>
        <label for="tempo_casa">Tempo na casa do Professor:</label><br>
        <input type="text" id="tempo_casa" name="tempo_casa"><br><br>
        <button type="submit">Inserir</button>
    </form>
</body>
</html>
