@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Meus Contatos</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Adicionar contato -->
                        <a href="{{route('novo.create')}}" class="btn btn-success btn-sm mb-2">Novo Contato</a>
                        <a href="{{route('deletar.destroyAll')}}" class="btn btn-danger btn-sm mb-2">Deletar todos</a>
                        @if(count($contatos) > 0)
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
                                            <td style="width: 18%;">
                                                {{$contato->nome}}
                                            </td>
                                            <td>{{$contato->email}}</td>
                                            <td>{{ $contato->enderecoFormatado() }}
                                            </td>
                                            <td style="width: 16%;">
                                                @foreach ($contato->telefones as $telefone)
                                                    {{$telefone->codigo_area}} {{$telefone->numero_tel}} <br>
                                                @endforeach
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('atualizar.edit', $contato->id) }}"
                                                       class="btn btn-primary btn-sm">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </a>
                                                    <a href="{{ route('deletar.destroy', $contato->id) }}"
                                                       class="btn btn-danger btn-sm">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <p>Não há contatos disponíveis.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a60a3dd619.js" crossorigin="anonymous"></script>
@endsection
