<?php
    include 'banco.php';
    $contato = new banco();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/listagem.css">
    <title>Listagem - Contatos</title>
</head>
<body>
    <section>
        <div class="item1">
            <h1>Listagem de contatos</h1>
        </div>

        <div class="item2">
            <table border="1" width="1200">
                <th>NOME</th>
                <th>SOBRENOME</th>
                <th>Telefone 1</th>
                <th>Telefone 2</th>
                <th>E-MAIL 1</th>
                <th>E-MAIL 2</th>
                <th>Cpf</th>
                <th>AÇÕES</th>
            <?php
            $lista = $contato->getAll();
            foreach($lista as $iten):
            ?> 
            <tr>
                <td><?php echo $iten['nome'];?></td>
                <td><?php echo$iten['sobrenome'];?></td>
                <td><?php echo $iten['telefone1'];?></td>
                <td><?php echo $iten['telefone2'];?></td>
                <td><?php echo $iten['email1'];?></td>
                <td><?php echo $iten['email2'];?></td>
                <td><?php echo $iten['CPF'];?></td>
                <td>
                    <a href="editar.php?id=<?php echo $iten['id']; ?>">[ EDITAR ]</a>
                    <a href="excluir.php?id=<?php echo $iten['id']; ?>">[ EXCLUIR ]</a>
                </td>
            </tr>
            <?php endforeach;?>
        </table>
        </div>

        <div class="adicionar">
            <a href="cadastro.php">Adicionar</a>
        </div>
    </section>
</body>
</html>