<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesquisar Aluno</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header {
            background-color: #e8c39e; 
            color: black; 
            padding: 20px; 
            height: 2,5cm; 
            width: 100%; 
        }
        .back-link {
            text-decoration: underline;
            font-size: 15px;
            color: black;
            margin-top: 50px; 
            margin-left: 60px; 
            display: inline-block; 
        }
        .header-text {
            font-size: 24px;
            font-weight: bold;
            margin-top: 25px;
            margin-bottom: 10px; 
            margin-left: 120px; 
        }
        .search-bar {
            width: 10cm; 
            margin-left: 130px; 
        }
        .search-button {
            background-color: #7a695d;
            border-color: #7a695d;
            font-size: 14px;
            width: 4cm; 
            margin-left: 130px; 
        }
        .search-button:active, 
        .search-button:focus  {
            background-color: #4B3E35;
            border-color: #4B3E35; 
        }
        .modal-button {
            background-color: #7a695d;
            border-color: #7a695d; 
        }
        .modal-button:focus {
            background-color: #4B3E35;
            border-color: #4B3E35; 
        }
    </style>
</head>
<body>
    <!-- Cabeçalho -->
    <div class="header">
        <a href="/" class="back-link">< Voltar para a Página Inicial</a>
    </div>
    
    <div class="header-text">Digite o nome do aluno:</div>
    
    <form action="/pesquisarAluno" method="post">
        @csrf
        <div class="mb-2">
            <input type="text" class="form-control search-bar" id="nome" name="nome" placeholder="Nome do Aluno">
        </div>
        <div class="text">
            <button type="submit" class="btn btn-primary search-button">Pesquisar</button>
        </div>
    </form>
    @if(isset($mensagem))
        <script>
            alert('{{$mensagem}}')
        </script>
    @else
        @if(isset($aluno))
        <div class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ $aluno->nome }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>RA:</strong> {{ $aluno->RA }}</p>
                        <p><strong>Idade:</strong> {{ $aluno->idade }}</p>
                        <p><strong>Curso:</strong> {{ $curso->nome }}</p>
                        <p><strong>Materias:</strong></p>
                        <ul>
                            @foreach ($materias as $materia)
                                <li>{{ $materia->nome }}</li>
                            @endforeach
                        </ul>
                        <p><strong>Professores:</strong></p>
                        <ul>
                            @foreach ($professores as $professor)
                                <li>{{ $professor->nome }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary modal-button" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endif

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script JavaScript para abrir o modal automaticamente -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var aluno = {!! isset($aluno) ? json_encode($aluno) : 'null' !!};
            if (aluno) {
                var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
                myModal.show();
            }
        });
    </script>
</body>
</html>
