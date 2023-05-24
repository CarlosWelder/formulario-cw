<?php

if(isset($_POST['submit']))
{

    include_once('config.php');
    
    // Estabelecer a conexão com o banco de dados
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    // Verificar se a conexão foi estabelecida corretamente
    if (!$conexao) {
        die('Erro ao conectar ao banco de dados: ' . mysqli_connect_error());
    }
    
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    
    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,telefone,sexo,data_nasc,cidade,estado,endereco)
         VALUES ('$nome', '$email', '$senha' , '$telefone' ,'$sexo', '$data_nasc' , '$cidade' , '$estado' , '$endereco')");
    
    // Verificar se a consulta foi executada com sucesso
    if ($result) {
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro ao inserir registro: " . mysqli_error($conexao);
    }
}
   
    ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | CW</title>
    <style>
        body{
        
        font-family:'Noto Sans', sans-serif;
        background-color: #201b2c;
        color: white;
        }
        .box{
        
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background: #2f2841;
        padding: 30px ;
        border-radius: 10px;
        box-shadow: 0px 10px 40px #00000056;
        }
        fieldset{
            border: 3px solid  #00ff88;
                }
        legend{
            border: 1px solid #00ff88;
            padding: 10px;
            text-align: center;
            border: 3px solid  #00ff88;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput
        {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }

        #data_nascimento{
           border: none;
           padding: 8px;
           border-radius: 10px;
           outline: none;
           font-size: 15px;
        }
        
           .volta{
  
            color: white;
            position: absolute;
            top: 10%;
            left: 10%;
            transform: translate(-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 10%;
}
        #submit{
        width: 100%;
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        color: #050505;
        background-color: #00ff88;
        border: none;
        cursor: pointer;
        overflow: hidden;
        }

        #submit:before{
        
      }
        #submit:hover{
        content: '';

        background-color: #2f7756;
        opacity: 0.7;
        transition: width 0.3s ease;
        }
    </style>
</head>
<body>
<a class="volta" href="home.php">Voltar </a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
