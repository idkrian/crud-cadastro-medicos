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

    <form action="">
        <section>
        <label for=""><strong> Para cadastrar um novo médico:</strong></label><br/>
            Adicione "/medicos/criar" na url. <br/>
        <label for=""><strong>Para consultar os dados de um médico:</strong></label><br/>
            Adicione "/medicos/consultar/(id)" na url.'<br/>
        <label for=""><strong> Para editar os dados de um médico:</strong></label><br/>
            Adicione "/medicos/editar/(id)" na url.'<br/>
        <label for=""><strong> Para excluir o registro de um médico:</strong></label><br/>
            Adicione "/medicos/excluir/(id)".'<br/>
    </form>
    </section>

    <footer>
        <p>&copy; Rian</p>
    </footer>

</body>
</html>

