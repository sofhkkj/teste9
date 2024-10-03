<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Prova</title>
</head>
<body style="text-align: center; background-color: lightblue;">
    <h2>Cadastro Currículo</h2>
    <form action="" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label for="telefone">Telefone:</label><br>
        <input type="tel" name="telefone"><br><br>

        <label for="nascimento">Data de Nascimento:</label><br>
        <input type="date" name="data" required><br><br>

        <label>Gênero:</label><br>
        <input type="radio" name="genero" value="masculino">
        <label>Masculino</label><br>
        <input type="radio" name="genero" value="feminino">
        <label>Feminino</label><br>
        <input type="radio" name="genero" value="outro">
        <label>Outro</label><br><br>

        <label for="escolaridade">Escolaridade:</label><br>
        <select name="escolaridade" required>
            <option value="">Selecione</option>
            <option value="fundamental">Ensino Fundamental</option>
            <option value="medio">Ensino Médio</option>
            <option value="superior">Ensino Superior</option>
            <option value="pos-graduacao">Pós-graduação</option>
        </select><br><br>

        <label for="mensagem">Conte um pouco sobre você:</label><br>
        <textarea name="mensagem" rows="4" cols="20"></textarea><br><br>
 
        <label for="mensagem">Experiências profissionais:</label><br>
        <textarea name="mensagem" rows="4" cols="20"></textarea><br><br>

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
        $mensagem = $_POST['mensagem'];

        print("<h1>Currículo do(a): $nome</h1>");
        print("<p>Email: $email</p>");
        print("<p>Telefone: $telefone</p>");
        print("<p>Data de nascimento: $data</p>");
        print("<p>Gênero: $genero</p>");
        print("<p>Escolaridade: $escolaridade</p>");
        print("<p>Perfil Pessoal: $mensagem</p>");
        print("<p> Experiências profissionais: $mensagem</p>");
    }

    ?>
</body>
</html>
