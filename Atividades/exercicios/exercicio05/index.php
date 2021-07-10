<!DOCTYPE html>
<html lang="br" >
<head>
    <meta charset="UTF-8">
   <title>Cadastro</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="/exercicio05/validar.js"></script>

</head>

<body  class="bg-dark text-white py-0 px-0">

    <h1>Cadastro: </h1>
    <form class="form-floating" action="exercicio05/validacao.php" method="post">
        
        <div class="form-floating">
            <input type="text" class="form-control" name="nome"id="nome" placeholder="João Maria">
            <label class="text-primary" for="nome">Nome:    </label>
        </div>

        <div class="form-floating" >
            <input type="email" class="form-control" name="email"id="email" placeholder="name@example.com">
            <label class="text-primary" for="email  ">Email:</label>
        </div>

        
        <div class="form-floating">
            <input type="date" class="form-control" name="data_nascimento"id="data_nascimento" placeholder="xx/xx/xxxx">
            <label class="text-primary" for="data_nascimento">Data de nascimento</label>
        </div>
       
        <div class="form-floating">
            <input type="text" class="form-control" name="endereco"id="endereco" placeholder="Rua x, n° xxx">
            <label class="text-primary" for="endereco">Endereço: </label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="cep"id="cep" placeholder="xxxxxx-xxx">
            <label class="text-primary" for="cep">CEP: </label>
        </div>

        <div class="form-floating">
            <select class="form-select" name="select_genre"id="select_genre" aria-label="Floating label select example">
              <option value="NI">Prefiro não informar</option>
              <option value="F">Feminino</option>
              <option value="M">Masculino</option>
            </select>
            <label class="text-primary"for="select_genre">Selecione seu gênero:</label>
        </div>
        

          

        <div class="d-grid gap-2 d-md-flex justify-content-md-end" role="group" aria-label="Basic outlined example">
            <input class="btn btn-success" type="submit" value="Cadastrar" onclick="carregar_dados()">
            <input class="btn btn-danger" type="reset" value="Limpar formulário">  
            <a href="index.html" class="btn btn-primary">Voltar</a>
        </div>
        
    </form>
    
    
</body>
</html>