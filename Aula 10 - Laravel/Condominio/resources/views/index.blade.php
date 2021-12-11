@extends('template.padrao')
@section('content')
<div class="container-fluid">
<h1> Relação de Clientes </h1>
    <button class="btn btn-primary" onclick="document.location='cliente/create'">
        Adicionar 
    </button>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">CPF</th>
            <th scope="col">Nome</th>
            <th scope="col">Endereco</th>
            <th scope="col">Telefone</th>
            <th scope="col">Predio</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($cliente as $clientes)
        <tr>
            <th scope="row">{{$clientes->cpf}} </th>
            <td> {{$clientes->nome}}</td>
            <td>{{$clientes->endereco}}</td>
            <td>{{$clientes->telefone}}</td>
            <td>{{$clientes->id_predio}}</td>            
            <form action="{{route('cliente.destroy', $clientes->cpf)}}" method='post'>
            @csrf
            @method('DELETE')
            <td> 
            <button type="submit" onclick="return confirm('Confirma Exclusão?')"  
            class="btn btn-link">Excluir</button>
           </form>
             <a href="{{url("cliente/$clientes->cpf/edit")}}">Editar</a> </td>
        </tr>   
    @endforeach
        </tbody>
    </table>
</div>
@endsection
