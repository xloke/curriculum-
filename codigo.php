<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Gerador de curriculo</title>
</head>
<body class="bg-dark">
    <div class="container text-light">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<div class="container">
 <div class="card  bg-light text-dark">
  <div class="card-header">
    <h2 class="text-center">Formulário de Currículo</h2>
  </div>
 <div class="card-body">
<form action="" method="POST" name="formulario">
    
<div class="row">
    <div class="col-12">
        <label for="nome">Nome:</label>
        <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome" >
    </div>
     <div class="col-12">
<label for="nome">Endereço:</label>
        <input class="form-control" type="text" id="endereço" name="endereço" placeholder="Rua" >
    </div>
           <div class="col-12">
        <label for="nome">Email:</label>
      <input class="form-control" type="text" id="email" name="email" placeholder="" >
    </div>
       <div class="col-6">
        <label for="nome">Data de nascimento:</label>
        <input class="form-control" type="date" id="date" name="date">
    </div>
     <div class="col-6">
    <label for="nome">Idade:</label>
        <input class="form-control" type="text" id="idade" name="idade" value="" >
    </div>
    <div class="col-12">
    <label for="nome">Telefone:</label>
        <input class="form-control" type="text" id="telefone" name="telefone" placeholder="00000-0000" >
    </div>
    <hr>
       <div class="col md-3">
<div class="accordion">
    <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Escolaridade e Formação
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
 <div class="row">
       <div class="col-12">
        <label for="nome">Escolaridade:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" type="text" id="escolaridade" name="escolaridade" ></textarea>
    </div>
    <div class="col-12">
    <label for="nome">Formação:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" type="text" id="formacao" name="formacao" ></textarea>
    </div>
</div>
        </div>
      </div>
    </div>

</div>
    </div>
</div>
<div class="card-header">
<button type="button" class="btn btn-dark" onclick="window.print()">Imprimir</button>
</div>
</form>
</div>
</div>
</body>
</html>

