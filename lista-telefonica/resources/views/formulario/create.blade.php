@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <a href="{{route('home')}}" class="btn btn-success btn-sm mb-2"><i class="fa-solid fa-house"></i></a>
        <div class="jumbotron">
            <h1 class="display-4">Cadastrar Contato</h1>
        </div>
        <form method="POST" action="{{ route('novo.create') }}" class="container">
            @csrf
            <div class="row d-flex justify-content-between">
                <div class="col-md-5">
                    <h2>Informações de Contato</h2>
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" name="nome" required placeholder=" Nome">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="d-flex">
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="codigoArea1">DDD</label>
                                <input type="tel" class="form-control"
                                       name="codigoArea1"
                                       placeholder="(99)"
                                       maxlength="2"
                                       required>
                            </div>
                            <div class="col-md-7 mb-3">
                                <label for="numeroTelefone1">Numero</label>
                                <input type="tel" class="form-control"
                                       name="numeroTelefone1"
                                       placeholder="99999-9999"
                                       maxlength="10"
                                       required>
                            </div>
                        </div>
                        <div class="form-row ml-2">
                            <div class="col-md-4  mb-3">
                                <label for="codigoArea2">DDD</label>
                                <input type="tel" class="form-control"
                                       name="codigoArea2"
                                       placeholder="(99)"
                                       maxlength="2">
                            </div>
                            <div class="col-md-7 mb-3 ">
                                <label for="numeroTelefone2">Numero</label>
                                <input type="text" class="form-control"
                                       name="numeroTelefone2"
                                       placeholder="99999-9999"
                                       maxlength="10"
                                >
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 ml-4">
                    <h2>Informações de Endereço</h2>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="logradouro">Logradouro</label>
                            <input type="text" class="form-control"
                                   name="logradouro"
                                   required
                                   placeholder="Logradouro">
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="numero_casa">Nº </label>
                            <input type="text" class="form-control"
                                   name="numero_casa" maxlength="5"
                                   placeholder="Nº"
                                   required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="bairro">Bairro:</label>
                            <input type="text" class="form-control" name="bairro"
                                   placeholder="Bairro">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="complemento">Complemento:</label>
                        <input type="text" class="form-control" name="complemento" placeholder="Complemento">
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="cidade">Cidade:</label>
                            <input type="text" class="form-control" name="cidade" required placeholder="Cidade">
                        </div>
                        <div class="col-md-3">
                            <label for="estado">Estado:</label>
                            <input type="text" class="form-control" name="estado" maxlength="2" required
                                   placeholder="Estado">
                        </div>
                        <div class="col-md-3">
                            <label for="cep">CEP:</label>
                            <input type="text" class="form-control" name="cep"  placeholder="CEP" maxlength="9" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-4">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/a60a3dd619.js" crossorigin="anonymous"></script>

@endsection
