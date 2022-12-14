<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Código fonte formulario php"/>
    <meta name="keywords" content="formulario php, bootstrap, bootstrap validator"/>
    <meta name="author" content="Cristiane Faria"/>

    <title>Cadastro de Pratos</title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />
    <style>
        main, footer, .mensagem-alerta{
            text-align: center; 
        }
        form{
            max-width: 800px;
            padding-top: 30px;
            display: block;
            margin: 0 auto;
        }
        .mensagem-alerta{
            max-width: 500px;
            margin: 20px auto;
        }
    </style>

</head>
<body>
    <main class="container">
        <h1>Formulário de Cadastro de Pratos</h1>
        <br>
        <form class="form-horizontal" action="../movimento/movimentoPratos.php" method="post" role="form" data-toggle="validator" enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label col-sm-3">Nome do Prato*:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nprato" id="nprato" value="" placeholder="Nome do prato" required >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Código*:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="codigo" id="codigo" value="" placeholder="Insira o código" required >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group">
                    <label class="control-label col-sm-3">Categoria*:</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="categoria" id="categoria" required>
                            <option value="" selected="selected" disabled="disabled">Secione a categoria</option>
                            <option value="entrada">Entrada</option>
                            <option value="prato_principal">Prato principal</option>
                            <option value="sobremesa">Sobremesa</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Preço*:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="preco" id="preco" placeholder="Insira o preço" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-3">Descrição*:</label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="exampleTextarea" rows="6" 
                              id="descricao" name="descricao" placeholder="sua mensagem" required></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Caloria*:</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" name="caloria" id="caloria" placeholder="Insira a caloria" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Imagem do Prato*:</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" name="imagem" id="imagem" placeholder="Escolher imagem" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group">
                    <label class="control-label col-sm-3">Destaque*:</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="destaque" required>
                            <option value="" selected="selected" disabled="disabled">Secione se quer o prato em destaque</option>
                            <option value="0">Não</option>
                            <option value="1">Sim</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 text-right">
                    <input class = "btn btn-primary" id="submit" name="btnSend" type="submit" value="ENVIAR">
                    <a name="formulario"></a>
                    <div class="mensagem-alerta"></div>
                </div>
            </div>
        </form>
    </main>
    <footer>
        <hr>
        <div class="copyright">Desenvolvido por SENAC
            <a href="" target="_blank"></a>
        </div>  
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

</body>
