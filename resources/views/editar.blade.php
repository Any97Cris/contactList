<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Contato</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    
    <div class="container bg-light p-5 mt-5">
        <h2>Editar Contato</h2>
        <form action="/update/{{$contatos->id}}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$contatos->name}}" placeholder="Digite o seu nome...">
            </div>

            <div class="form-group mb-3">
                <label for="numberContact">Número para Contato</label>
                <input type="text" class="form-control" id="numberContact" name="numberContact" value="{{$contatos->numberContact}}" placeholder="DDD + Número">
            </div>

            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$contatos->email}}" placeholder="Digite seu email...">
            </div> 
            
            <div class="form-group mb-3">
                <label for="status">Possui Whatsapp?</label>
                <input type="text" class="form-control" id="status" name="status" value="{{$contatos->status}}" placeholder="Digite Sim ou Não">
            </div> 
        
    
      <div class="text-center">
        <a href="/" class="btn btn-secondary">Voltar a página inicial</a>
        <input type="submit" class="btn btn-success" value="Salvar"/>
      </div>
    
        </form>
  </div>

     <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>