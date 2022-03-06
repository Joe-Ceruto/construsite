<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/messages_pt_BR.min.js"></script>
    <script src="assets/js/Validate.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="STYLESHEET" href="assets/css/css.css">
    <title>Questao 03</title>
    
    
    
    
</head>
<body>

<nav class="navbar navbar-expand-lg  bg-primary">
  <a class="navbar-brand"></a>
    <img src="assets/images/logo2.png">
</nav>

    <div class="container-fluid mt-5">
        <form action="assets/php/enviar_formulario.php" method="post" id="form" class="form">    
            <div class="row">
                <div class="col-3 row1">
                    <p class="text1"> Nome:</p>
                    <input type="text" class="form-control input1" name="nome" placeholder="Insira o seu nome aqui" required  id="nome">
                </div>

                <div class="col-5 row2"> 
                    <div>
                        <p class="text2"> Mensagem:</p>
                        <input type="text" class="form-control espaco2" placeholder="Nome*" id="titulo" required  name="titulo">
                        <br>
                    </div>

                    <div>
                        <input type="number" class="form-control espaco2" placeholder="Telefone*" id="tel" required   name="tel">
                        <br>
                    </div>
                
                    <div>
                        <input type="email" class="form-control espaco2" placeholder="E-mail*" id="email" required  name="email">
                        <br>
                    </div>
                
                    <div>
                        <textarea class="form-control espaco2" placeholder="Mensagem*" id="mensagem" rows="5" required  name="mensagem"></textarea>
                        <br>
                    </div>
                
                    <div>
                        <input class="btn btn-success espaco2" type="submit" value="Enviar Mensagem" name="enviar">  </button>
                    </div>
            </div>    
        </form>
    </div>
</body>
</html>