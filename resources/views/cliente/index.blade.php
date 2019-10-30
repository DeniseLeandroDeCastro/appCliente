@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Clientes</div>

                <ol class="breadcrumb panel-heading">
                   
                    <li class="active">Clientes</li>
                </ol>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p><a class="btn btn-info" href="{{ route('cliente.adicionar') }}">Adicionar</a></p>

                    <div align="center">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Endereço</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($clientes as $cliente)
                            <tr>
                                <th scope="row">{{ $cliente->id }}</th>
                                <td>{{ $cliente->nome }}</td>
                                <td>{{ $cliente->email }}</td>
                                <td>{{ $cliente->endereco }}</td>
                                <td class="col-md-2">
                                    <a class="btn btn-default" href="{{route('cliente.editar', $cliente->id)}}">Editar</a>
                                    <a class="btn btn-danger" href="#">Excluir</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                        
                        {!! $clientes->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection