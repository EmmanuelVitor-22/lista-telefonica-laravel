@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Contatos</h2>
                    </div>
                    <div class="card-body">
                        <!-- Adicionar contato -->
                        <a href="" class="btn btn-success btn-sm mb-2">Novo Contato</a>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Endereço</th>
                                    <th>Telefone(s)</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contatos as $contato)

                                    <tr>
                                        <td>{{$contato->nome}}</td>
                                        <td>{{$contato->email}}</td>
                                        <td>{{ $contato->endereco->logradouro }},
                                            {{ $contato->endereco->numero }},
                                            {{ $contato->endereco->cidade }},
                                            {{ $contato->endereco->estado }}</td>

                                        <td>
                                            @foreach ($contato->telefones as $telefone)
                                                ({{ $telefone->codigo_area}}) {{ $telefone->numero}}  <br>
                                            @endforeach
                                        </td>

                                    @endforeach
                                    <td>
                                        <a href="" class="btn btn-primary btn-sm">
                                            <i>fa fa-pencil-square</i>
                                            Editar
                                        </a>
                                        <a href="" class="btn btn-info btn-sm">
                                            <i class="fas fa-info-circle"></i>
                                            Detalhar
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#deleteModal1">
                                            <i class="fas fa-trash-alt"></i>
                                            Excluir
                                        </button>
                                    </td>
                                </tr>
                                <!-- Adicione mais linhas de dados para outros contatos aqui -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Confirmação de Exclusão (para cada contato) -->
    <div class="modal fade" id="deleteModal1" tabindex="-1" role="dialog" aria-labelledby="deleteModal1Label"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModal1Label">Confirmação de Exclusão</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Tem certeza de que deseja excluir o contato?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <form action="" method="POST">
                        @csrf
                        {{--                        @method('DELETE')--}}
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
