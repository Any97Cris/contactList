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
            <input type="text" value="Pesquisar contato...." class="form-control"> 
            <div class="mt-3 text-center">
                <a href="#" class="btn btn-warning">Pesquisar</a>
                <a href="/cadastrar" class="btn btn-success">Cadastrar</a>        
            </div>              
        </div>

        <h2 class="titulo mt-5">Contatos cadastrados</h2>

        <div class="row row-cols-3 p-5">
            <div class="card col-md-3 mb-2">
                <div class="card-body p-3">
                    <h4>Nome:</h4>
                    <p>Número:</p>
                    <p>E-mail:</p>
                    <p>Possui whatsapp</p>
                </div>            
            </div>  
        </div>           
    </div>
</body>
</html>