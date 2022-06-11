<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Contatos</title>
    <link rel="stylesheet" href="../assets/css/cadastro.css">
</head>
<body>

    <section>
        <div class="container">
            <div class="left">
                <img src="../assets/images/undraw_shopping_re_3wst.svg" alt="">
            </div>
            <div class="right">
                <div class="header">
                    <h1>Cadastro</h1>
                    <a href="<?php echo BASE_URL; ?>">Voltar</a>
                </div>

                <div class="formulario">
                    <p></p>
                    <form method="POST" action="<?php echo BASE_URL; ?>contatos/add_save">
                    
                        <div class="input">
                            Nome:<br/>
                            <input type="text" autoComplete="off" name="nome" placeholder="Digite seu primeiro nome"/><br><br>
                        </div>
                        
                        <div class="input">
                            Sobrenome:<br/>
                            <input type="text" autoComplete="off" name="sobrenome" placeholder="Digite seu sobrenome"><br/><br/>
                        </div>

                        <div class="input" >
                            Telefone Principal:<br/>
                            <input id="inputTell1" autoComplete="off" type="tel" name="telefone1" placeholder="(XX) XXXX-XXXX" maxlength="15"><br/><br/>
                        </div>

                        <div class="input">
                            Segundo Telefone:<br/>
                            <input id="inputTell2" autoComplete="off" type="tel" name="telefone2" placeholder="(XX) XXXX-XXXX" maxlength="15"><br/><br/>
                        </div>

                        <div class="input">
                            E-mail Principal:<br/>
                            <input type="email" autoComplete="off" name="email1" placeholder="Digite seu e-mail"><br/><br/>
                        </div>

                        <div class="input">
                            Segundo E-mail:<br/>
                            <input type="email" autoComplete="off" name="email2" placeholder="Digite seu segundo e-mail"><br/><br/>
                        </div>

                        <div class="input" >
                            CPF:<br/>
                            <input type="text" autoComplete="off" id="inputCPF" name="cpf" placeholder="XXX.XXX.XXX-XX" maxlength="14"><br/><br/>
                        </div>

                        <button type="submit">Adiconar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- <script src="assets/js/cadastro.js"></script> -->
</body>
</html>