<?php 
    require 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Teste Sodré Santoro</title>
</head>

<body>

    <main>

        <div class="conteudo  d-flex flex-column justify-content-center align-items-center">

            <h1 class="text-center g-lg-2"> Cadastro Produto</h1>

            <form class="col-md-5" action="inserir.php" name="formulario" method="post" style="border: white 1px solid;">

                <div class="form-group font-weight-bold">

                    <label for="codigo">Código Produto</label>

                    <input type="text" id="codigo" class="form-control" required
                        placeholder="EX: 00001" name="codigo">
                </div>
                
                <div class="form-group font-weight-bold">
                    <label for="descricao">Descrição Produto</label>
                    <input type="text" class="form-control" id="descricao" placeholder="EX: Lápis" name="descricao">
                </div>
                <button type="submit" id="btnPesquisar" class="btn btn-primary">Salvar</button>
            </form>

            <div class="tabela-produto">
<?php $consulta = $cn->query("SELECT * FROM produto") ?>

                <table class="table text-start">
                    <thead>
                        
                        <tr>
                            <th scope="col">Código Produto</th>
                            <th scope="col">Descrição Produto</th>
                            <th scope="col" class="text-end">Funções</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){ ?>
                        <tr>
                            <td> <?php echo $exibe['id']?> </td>
                            <td class="text-center"><?php echo $exibe['descricao']?></td>
                            <td> <a href="FormAtualizar.php?id=<?php echo $exibe['id']?> "><button class="btn btn-primary">Editar</button> </a> </td>
                            <td> <a href="excluir.php?id=<?php echo $exibe['id']?>"> <button class="btn btn-danger">Excluir</button> </a> </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

    </main>

</body>
<script src="../js/bootstrap.bundle.min.js"></script>
</html>