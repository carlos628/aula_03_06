




<?php
//echo '<pre>';
//var_dump($_GET);
//echo '</pre>';

phpinfo();
exit;
?>



<!DOCTYPE html>

<html>
    <head>
        <title>CADASTRO DE PESSOAS</title>
        <meta charset="ISO-8859-1">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/jquery-1.11.3.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="container">

            <div class="row">
                <div class="col-md-6"> 
                    <form class="form-horizontal" method="GET"action=index.php >
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">NOME</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="nome">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">ENDERECO</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="endereco">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">SEXO</label>
                            <div class="col-sm-10">
                                <label class="radio-inline">
                                    <input name= "sexo" type="radio" value="m"> Masculino
                                </label>
                                <label class="radio-inline">
                                    <input name= "sexo"   type="radio" value="f"> Feminino
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"checked> Ativo
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6"><h2>Listagem de Pessoas</h2></div>
            </div>

        </div>

    </div>
    <script>
    $('#btn-enviar').click(function()){
        var valido = true;
       
        if($('#input - nome').val()=='';
        valido = false;
      alert('nome')
    }
    
    
    
     if($('#input - nome').val()=='';
        valido = false;
     alert('nome')
    
    }
     if($('#input - nome').val()=='';
        valido = false;
     alert('nome')
    }
    
    
    
    </script>
</body>
</html>

