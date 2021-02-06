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
    <form action="{{ route('alterar_medico', ['id' => $medico->id]) }}" method="POST">
    @csrf
        <label for="">Nome:</label><br/>
            <input type="text" name="nome" id="" value="{{ $medico->nome}} "><br/>
        <label for="">CRM:</label><br/>
            <input type="text" name="crm" id="" value="{{ $medico->crm}} "><br/>
        <label for="">Telefone:</label><br/>
            <input type="text" name="telefone" id="" value="{{ $medico->telefone}} "><br/>
        <label for="">Especialidade:</label><br/>
        <select name="especialidade" id="">
            <option value="ALERGOLOGIA">ALERGOLOGIA</option>
            <option value="ANGIOLOGIA">ANGIOLOGIA</option>
            <option value="BUCO MAXILO">BUCO MAXILO</option>
            <option value="CARDIOLOGIA"> CARDIOLOGIA</option>
            <option value="CLINICA MEDICA">CLINICA MEDICA</option>
            <option value="CARDIOLOGIA INFANTIL">CARDIOLOGIA INFANTIL</option>
            <option value="CIRURGIA CABEÇA/PESCOÇO">CIRURGIA CABEÇA/PESCOÇO</option>
            <option value="CIRURGIA CARDÍACA">CIRURGIA CARDÍACA</option>
            <option value="CIRURGIA DE TÓRAX">CIRURGIA DE TÓRAX</option>
            <option value="CIRURGIA GERAL">CIRURGIA GERAL</option>
            <option value="CIRURGIA PEDIÁTRICA">CIRURGIA PEDIÁTRICA</option>
            <option value="CIRURGIA PLÁSTICA">CIRURGIA PLÁSTICA</option>
            <option value="CIRURGIA TORÁCICA">CIRURGIA TORÁCICA</option>
            <option value="CIRURGIA VASCULAR">CIRURGIA VASCULAR</option>
            </select>

        <button>Salvar</button>
    </form>
    </section>
    <footer>
        <p>&copy; Rian</p>
    </footer>

</body>
</html>