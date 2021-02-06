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
    <form action="{{ route('registrar_medico')}}" method="POST">
    @csrf
        <label for="">Nome:</label><br/>
            <input type="text" name="nome" id="" value="{{ $medico->nome}} " disabled="disabled"><br/>
        <label for="">CRM:</label><br/>
            <input type="text" name="crm" id="" value="{{ $medico->crm}} " disabled="disabled"><br/>
        <label for="">Telefone:</label><br/>
            <input type="text" name="telefone" id="" value="{{ $medico->telefone}} " disabled="disabled"><br/>
        <label for="">Especialidade:</label><br/>
            <input type="text" name="" id="" value="{{ $medico->especialidade}} " disabled="disabled">

    </form>
    </section>
    <footer>
        <p>&copy; Rian</p>
    </footer>

</body>
</html>