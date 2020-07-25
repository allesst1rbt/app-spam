<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spam is life</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
   <div class="container">
       <h3 class="text-center">
           App spam email
       </h3>
   </div>
   <div class="container">
    <div class="row">
        <div class="col-md-12">
        
          <div class="card-body font-weight-bold">
              <form action="processo_envio.php" method="post"> 
                <div class="form-group">
                    <label for="de">de</label>
                    <input name="de" type="text" class="form-control" id="de" placeholder="marcelo@dominio.com.br">
                </div>
                <div class="form-group">
                    <label for="senha">sua senha</label>
                    <input name="senha" type="password" class="form-control" id="senha" placeholder="senha do seu email">
                </div>
                  <div class="form-group">
                      <label for="para">Para</label>
                      <input name="para" type="text" class="form-control" id="para" placeholder="joao@dominio.com.br">
                  </div>

                  <div class="form-group">
                      <label for="assunto">Assunto</label>
                      <input name="assunto" type="text" class="form-control" id="assunto" placeholder="Assundo do e-mail">
                  </div>

                  <div class="form-group">
                      <label for="mensagem">Mensagem</label>
                      <textarea  name="mensagem" class="form-control" id="mensagem"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="quantidade">quantidade</label>
                    <input name="quantidade" type="text" class="form-control" id="quantidade" placeholder="numero de email a serem enviados">
                </div>

                  <button type="submit" class="btn btn-primary btn-lg">Começar spam</button>
              </form>
          </div>
      </div>
    </div>
</div>

   </div>
</body>
</html>