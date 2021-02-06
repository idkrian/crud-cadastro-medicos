<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css"> 
</head>
<body>
    <div id="cabecalho">
        <h1>Registro de Médicos</h1>
    </div>
    <section>
    <form action="{{ route('excluir_medico', ['id' => $medico->id]) }}" method="POST">
    @csrf
        <label for="">Tem certeza que deseja deletar esse registro:</label><br/>
            <input type="text" name="nome" id="" value="{{ $medico->nome}} " disabled="disabled"><br/>
        <button>Sim</button>
    </form>
    </section>
    <footer>
        <p>&copy; Rian</p>
    </footer>

</body>
</html>