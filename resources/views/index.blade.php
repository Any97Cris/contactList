<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container">
        <div class="titulo">Lista de Contatos</div>
        <div class="mt-5">
            <form action="/" method="GET">
            <input placeholder="Pesquisar contato" type="text" name="search" id="search" class="form-control"/>
            <div class="mt-3 text-center">
                
                    <input type="submit" value="Pesquisar" class="btn btn-warning">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Cadastrar</button>        
                </form>
            </div>              
        </div>

        <h2 class="titulo mt-5">Contatos cadastrados</h2>

        <div class=" row row-cols-3 p-5">
            @foreach($contatos as $contato)          

            <div class="card col-md-3 mb-2">
                <div class="card-body p-2">
                    <h4>{{$contato->name}}</h4>
                    <label class="font20 text-color-success">Número</label>
                    <p>{{$contato->numberContact}}</p>
                    <label class="font20 text-color-success">E-mail</label>
                    <p>{{$contato->email}}</p>
                    <label class="font20 text-color-success">Possui whatsapp </label>
                    <p>{{$contato->status}}</p>
                </div>   
                <div class="text-center mb-4">
                    <form action="/deletar/{{$contato->id}}" method="POST">
                    @csrf
                    <a href="/editar/{{$contato->id}}" class="btn btn-warning">Editar</a>                    
                        <input type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar este registro?')" value="Excluir"/>
                    </form>
                </div>         
            </div>  
            @endforeach

        </div>     
        
        <!--INICIO MODAL CADASTRAR-->
        <div class="modal-lg modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar Contato</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="/cadastrar" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">Nome</label>
                            <input type="text" required class="form-control" id="name" name="name" placeholder="Digite o seu nome...">
                        </div>

                        <div class="form-group mb-3">
                            <label for="numberContact">Número para Contato</label>
                            <input type="text" required class="form-control" id="numberContact" name="numberContact" placeholder="DDD + Número">
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" required class="form-control" id="email" name="email" placeholder="Digite seu email...">
                        </div> 
                        
                        <div class="form-group mb-3">
                            <label for="status">Possui Whatsapp?</label>
                            <input type="text" required class="form-control" id="status" name="status" placeholder="Digite Sim ou Não">
                        </div> 
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn btn-primary" value="Salvar"/>
                  </div>
                </div>
            </form>
              </div>
        </div>
        <!--FIM MODAL CADASTRAR-->   
        


    </div>



    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>