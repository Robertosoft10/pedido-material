<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pedido Mateiral</title>
    <link href="bootstrap/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="Bootstrap/style.css" rel="stylesheet">

  </head>
<body>
<div class="container" >
</div>
</div>
        <div class="container col-lg-4 col-xs-4" id="login">
            <strong>Sistema Pedido de Material</strong>
            <hr>
            <?php if(isset($_SESSION ['loginVazio'])){?>
            <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION ['loginVazio'];?>
            </div>
            <?php unset($_SESSION ['loginVazio']); } ?>

            <?php if(isset($_SESSION ['loginIncorreto'])){?>
            <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION ['loginIncorreto'];?>
            </div>
            <?php unset($_SESSION ['loginIncorreto']); } ?>
            <form action="Dao/autencticarUser.php" method="post">
                <fieldset>

                    <legend style="text-align: center">Login</legend>
                        <div class="form-group col-lg-12 col-xs-12">
                        <input type="text" class="form-control" id="nome" name="email" placeholder="E-mail">
                        </div>
                        <div class="form-group col-lg-12 col-xs-12">
                        <input type="password" class="form-control" id="cpf" name="senha" placeholder="Senha">
                        </div>
                        <div class="form-group col-lg-12 col-xs-12">
                    <button  type="submit" class="btn btn-primary col-xs-12"> Entrar</button>
                      </div>
                </fieldset>
            </form>
        </div>
</div>
</div>
</div>
</body>
</html>
