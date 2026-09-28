<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <form action="" method="post">
    <label for="nome">Nome do produto: </label>
    <input type="text" name="nome" required> <br><br>

    <label for="preco">Preço(R$): </label>
    <input type="number" name="preco" required> <br><br>

    <button type="submit">Cadastrar</button>
    </form>

<?php 
//Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Recebe os valores enviados pelo formulário
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];

    //Conecta com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "Senai@118";
    $dbname = "exercicio";

    $conn = new mysqli($servername, $username, $password,$dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: ". $conn->connect_error);
    }

    // Insere dados no banco de dados
    if ($preco > 0) {
    $sql = "INSERT INTO produtos(nome, preco) VALUES ('$nome','$preco')";
    
        // Verifica se os dados foram cadastrados no Banco de Dados
    if ($conn->query($sql) == TRUE) {
        echo "<p id='msg' style='color: darkgreen;'>Produto cadastrado com sucesso<?p>";}
    }else{echo"<p id='msg' style='color: red;'> Erro: O preço deve ser um número positivo.</p>";}

    //Ocultar a mensagem após 5 segundos com a função setTimeout do Javascript
        echo "
        <script>
            setTimeout(function() {
                document.getElementById('msg').style.display = 'none'
                }, 5000)
        </script>";

    //Fecha a conexão
    $conn->close();
}
?>
</body>
</html>