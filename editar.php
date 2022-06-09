<?php
include 'banco.php';
$contato = new banco();

$id = $_GET['id'];
$info = $contato->getInfo($id);
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar - Contatos</title>
    <link rel="stylesheet" href="assets/css/cadastro.css">
</head>
<body>

    <section>
        <div class="container">
            <div class="left">
                <img src="assets/images/undraw_shopping_re_3wst.svg" alt="">
            </div>
            <div class="right">
                <div class="header">
                    <h1>Editar</h1>
                    <a href="index.php">Voltar</a>
                </div>

                <div class="formulario">
                    <p></p>
                    <form method="POST" action="">

                        <input type="hidden" name="id" value="<?php echo $info['id']; ?>" />

                        <div class="input">
                            Nome:<br/>
                            <input type="text" autoComplete="off" name="nome" value="<?php echo $info['nome']; ?>" placeholder="Digite seu primeiro nome"/><br><br>

                        </div>
                        
                        <div class="input">
                            Sobrenome:<br/>
                            <input type="text" autoComplete="off" name="sobrenome" value="<?php echo $info['sobrenome']; ?>" placeholder="Digite seu sobrenome"><br/><br/>
                        </div>

                        <div class="input" >
                            Telefone Principal:<br/>
                            <input id="inputTell1" autoComplete="off" type="tel" name="telefone1" value="<?php echo $info['telefone1']; ?>" placeholder="(XX) XXXX-XXXX" maxlength="15"><br/><br/>
                        </div>

                        <div class="input">
                            Segundo Telefone:<br/>
                            <input id="inputTell2" autoComplete="off" type="tel" name="telefone2" value="<?php echo $info['telefone2']; ?>" placeholder="(XX) XXXX-XXXX" maxlength="15"><br/><br/>
                        </div>

                        <div class="input">
                            E-mail Principal:<br/>
                            <input type="email" autoComplete="off" name="email1" value="<?php echo $info['email1']; ?>" placeholder="Digite seu e-mail"><br/><br/>
                        </div>

                        <div class="input">
                            Segundo E-mail:<br/>
                            <input type="email" autoComplete="off" name="email2" value="<?php echo $info['email2']; ?>" placeholder="Digite seu segundo e-mail"><br/><br/>
                        </div>

                        <div class="input" >
                            CPF:<br/>
                            <input type="text" autoComplete="off" id="inputCPF" name="cpf" value="<?php echo $info['CPF']; ?>" placeholder="XXX.XXX.XXX-XX" maxlength="14"><br/><br/>
                        </div>

                        <button type="submit">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- <script src="assets/js/cadastro.js"></script> -->
</body>
</html>
<?php
$contato = new banco();
if(!empty($_POST['id'])){
    
    $id = $_POST["id"];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $telefone1 = $_POST['telefone1'];
    $telefone2 = $_POST['telefone2'];
    $email1 = $_POST['email1'];
    $email2 = $_POST['email2'];
    $cpf = $_POST['cpf'];
   

   if($contato->editar($id, $nome, $sobrenome, $telefone1, $telefone2, $email1, $email2, $cpf)){
    header("Location:index.php");
   }
}
   ?>