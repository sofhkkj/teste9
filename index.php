<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo Pessoal</title>
</head>
<body style="text-align: center; background-color: #679A8E;">
    <h2>Cadastre seu Currículo</h2>
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
        <input type="radio" name="genero" value="Masculino">
        <label>Masculino</label><br>
        <input type="radio" name="genero" value="Feminino">
        <label>Feminino</label><br>
        <input type="radio" name="genero" value="Outro">
        <label>Outro</label><br><br>

        <label for="escolaridade">Formação Acadêmica:</label><br>
        <select name="escolaridade" required>
            <option value="">Selecione</option>
            <option value="Fundamental">Ensino Fundamental</option>
            <option value="Medio">Ensino Médio</option>
            <option value="Superior">Ensino Superior</option>
            <option value="Pos-graduação">Pós-graduação</option>
        </select><br><br>

        <label for="mensagem">Conte um pouco sobre você:</label><br>
        <textarea name="mensagem" rows="4" cols="20"></textarea><br><br>
 
        <label for="experiências">Experiências profissionais:</label><br>
        <textarea name="experiências" rows="4" cols="20"></textarea><br><br>

        <label for="idiomas">Idiomas:</label><br>
        <textarea name="idiomas" rows="2" cols="15"></textarea><br><br>
        <label for="níveis">Nível de compreensão</label><br>
        <select name="níveis" required>
            <option value="">Selecione</option>
            <option value="Basico">Básico</option>
            <option value="Intermediario">Intermediário</option>
            <option value="Avançado">Avançado</option>
            <option value="Fluente">Fluente</option>
        </select><br><br> 

        <input type="submit" value="Salvar">
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
        $experiências = $_POST['experiências'];
        $idiomas = $_POST['idiomas'];
        $níveis = $_POST['níveis'];

        print("<h1>Currículo do(a): $nome</h1>");
        print("<p>Email: $email</p>");
        print("<p>Telefone: $telefone</p>");
        print("<p>Data de nascimento: $data</p>");
        print("<p>Gênero: $genero</p>");
        print("<p>Escolaridade: $escolaridade</p>");
        print("<p>Resumo: $mensagem</p>");
        print("<p> Experiências profissionais: $experiências</p>");
        print("<p> Idiomas: $idiomas $níveis</p>");
    }

    ?>
</body>
</html>
