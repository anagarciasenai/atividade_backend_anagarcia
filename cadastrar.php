<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova ordem de serviço</title>
    <link rel="stylesheet" href="estilo/estilo.css">
</head>
<body>
    <div class= "container">
        <h1>Nova ordem de serviço</h1>
        <form action="salvar.php" method = "POST">
            <label>CLIENTE</label>
            <input type="text" name= "cliente" required>

            <label>EQUIPAMENTO</label>
            <input type="text" name="equipamento" required>

            <label>PROBLEMA APRESENTADO</label>
            <textarea name="problema" required></textarea>

            <label> DATA DE ENTRADA</label>
            <input type="date" name="data_entrada" required>

            <label>STATUS</label>
            <select name="status" >
                <option value="Recebido">RECEBIDO</option>
                <option value="Em análise">EM ANÁLISE</option>
                <option value="Em manutenção">EM MANUTENÇÃO</option>
                <option value="Concluído">CONCLUÍDO</option>
            </select>
        <button type="submit"> Cadrastar em ordem </button>
        </form>
        <a href="index.php">VOLTAR</a>
    </div>
    
</body>
</html>