<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Prova</title>
</head>
<body style="text-align: center; background-color: lightblue; ">
    <h2>Cadastro Currículo</h2>
    <form action="" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="telefone">Telefone:</label><br>
        <input type="tel" id="telefone" name="telefone"><br><br>

        <label for="nascimento">Data de Nascimento:</label><br>
        <input type="date" id="nascimento" name="data" required><br><br>

        <label for="genero">Gênero:</label><br>
        <input type="radio" id="masculino" name="genero" value="masculino">
        <label for="masculino">Masculino</label><br>
        <input type="radio" id="feminino" name="genero" value="feminino">
        <label for="feminino">Feminino</label><br>
        <input type="radio" id="outro" name="genero" value="outro">
        <label for="outro">Outro</label><br><br>

        <label for="escolaridade">Escolaridade:</label><br>
        <select id="escolaridade" name="escolaridade" required>
            <option value="">Selecione</option>
            <option value="fundamental">Ensino Fundamental</option>
            <option value="medio">Ensino Médio</option>
            <option value="superior">Ensino Superior</option>
            <option value="pos-graduacao">Pós-graduação</option>
        </select><br><br>

        <label for="mensagem">Conte sobre você:</label><br>
        <textarea id="mensagem" name="mensagem" rows="4" cols="20"></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $data = $_POST['data'];
        $genero = $_POST['genero'];
        $escolaridade = $_POST['escolaridade'];
        $mensagem = $_POST['mensagem'];

        print("<h1>Currículo do(a): $nome</h1>");
        print("<p>Email: $email</p>");
        print("<p>Telefone: $telefone</p>");
        print("<p>Data de nascimento: $data</p>");
        print("<p>Gênero: $genero</p>");
        print("<p>Escolaridade: $escolaridade</p>");
        print("<p>Mensagem: $mensagem</p>");
    }
    ?>
</body>
</html>
