<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Cadastrar</title>
</head>
<body>
<div class="container-fluid">
<h1> @if(isset($cliente))Editar Cliente @else Cadastro de Cliente @endif </h1>
    @if(isset($cliente))
    <form name="form-cad" id="form-edit" method="post" action="{{url("cliente/$cliente->cpf") }}">
    @method("PUT")
    @else
    <form name="form-cad" id="form-cad" method="post" action="{{url('cliente')}}">
    @endif
    @csrf     
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="cpf" value = "{{$cliente->cpf ?? ''}}" name="cpf" placeholder="CPF">
    <label for="cpf">CPF do usuário</label>
    </div>
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="nome" value = "{{$cliente->nome ?? ''}}" name="nome" placeholder="Nome">
    <label for="nome">Nome</label>
    </div>
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="endereco" name="endereco" value="{{$cliente->endereco ?? ''}}" placeholder="Endereço">
    <label for="endereco">Endereço</label>    
    </div>
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="telefone" name= "telefone" value = "{{$cliente->telefone ?? ''}}" placeholder="Telefone">
    <label for="telefone">Telefone</label>
    </div>
    <label for="id_predio">Predio</label>
        <select class="form-control" id="id_predio" name="id_predio">
        @foreach ($predio as $predios)
            <option value="{{$cliente->relPredio->id_predio ?? ''}}"> {{$cliente->relPredio->id_predio ?? ''}}</option>         
            <option value="{{$predios->id}}">{{$predios->id}}</option>
        @endforeach
         
        </select>
    <input type="submit" value="Salvar" class="btn btn-primary">
    <input type="reset" value="Limpar" class="btn btn-secondary">
</form>
<div>
</body>
</html>