<?php
 $id = $_GET['id'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Editar</title>
</head>
<body>
    <main>
    <div class="conteudo  d-flex flex-column justify-content-center align-items-center">

<h1 class="text-center g-lg-2"> Atualizar Produto</h1>

<form class="col-md-5" action="atualizar.php?OldId=<?php echo $id?>" name="formulario" method="post" style="border: white 1px solid;">

    <div class="form-group font-weight-bold">

        <label for="codigo">Código Produto</label>

        <input type="text" id="codigo" class="form-control" required
            placeholder="EX: 00001" name="codigo">
    </div>
    
    <div class="form-group font-weight-bold">
        <label for="descricao">Descrição Produto</label>
        <input type="text" class="form-control" id="descricao" placeholder="EX: Lápis" name="descricao">
    </div>
    <button type="submit" id="btnAtualizar" class="btn btn-primary">Atualizar</button>
</form>
    </main>
</body>
<script src="../js/bootstrap.bundle.min.js"></script>
</html>