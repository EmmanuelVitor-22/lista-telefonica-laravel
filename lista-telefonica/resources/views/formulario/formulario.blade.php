@extends('layouts.app')
@section('form')
        <div class="container mt-5">
            <div class="jumbotron">
                <h1 class="display-4">Formulário de Contato</h1>
            </div>
            <form method="post" action="">
                @csrf <!-- Adicione esta diretiva para proteção contra CSRF -->

                <div class="row">
                    <div class="col-md-6">
                        <h2>Informações de Contato</h2>
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" name="nome"
                                   value="{{  old('nome') }}" required
                                   placeholder="Digite o Nome">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email"
                                   value="{{ old('email') }}" required
                                   placeholder="Digite o Email">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h2>Informações de Endereço</h2>
                        <div class="form-group">
                            <label for="rua">Rua:</label>
                            <input type="text" class="form-control" name="rua"
                                   value="{{ old('rua') }}" required
                                   placeholder="Digite a Rua">
                        </div>
                        <div class="form-group">
                            <label for="numero_casa">Número da Casa:</label>
                            <input type="text" class="form-control" name="numero_casa"
                                   value="{{ old('numero_casa') }}"
                                   required placeholder="Digite o Número da Casa">
                        </div>
                        <div class="form-group">
                            <label for="complemento">Complemento:</label>
                            <input type="text" class="form-control" name="complemento"
                                   value="{{ old('complemento') }}"
                                   placeholder="Digite o Complemento">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cep">CEP:</label>
                                <input type="text" class="form-control" name="cep"
                                       value="{{ old('cep') }}"
                                       required placeholder="Digite o CEP">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cidade">Cidade:</label>
                                <input type="text" class="form-control" name="cidade"
                                       value="{{ old('cidade') }}" required
                                       placeholder="Digite a Cidade">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado (sigla com 2 letras):</label>
                            <input type="text" class="form-control" name="estado" maxlength="2"
                                   value="{{ old('estado') }}" required
                                   placeholder="Digite o Estado (sigla com 2 letras)">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h2>Telefone</h2>
                        <div class="form-group col-md-6">
                            <label for="codigoArea1">Código de Área 1:</label>
                            <input type="text" class="form-control" id="codigoArea1" name="codigoArea1"
                                   value="{{ old('codigoArea1') }}"
                                   placeholder="Digite o Código de Área">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="codigoArea2">Código de Área 2:</label>
                            <input type="text" class="form-control" id="codigoArea2" name="codigoArea2"
                                   value="{{ old('codigoArea2') }}"
                                   placeholder="Digite o Código de Área">
                        </div>

                    </div>

                    <div class="col-md-6">
                        <h2>Telefone</h2>
                        <div class="form-group col-md-6 ">
                            <label for="numeroTelefone2">Número de Telefone 1:</label>
                            <input type="text" class="form-control" id="numeroTelefone2" name="numeroTelefone2"
                                   value="{{ old('numeroTelefone2') }}"
                                   placeholder="Digite o Número de Telefone">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="numeroTelefone1">Número de Telefone 2:</label>
                            <input type="text" class="form-control" id="numeroTelefone1" name="numeroTelefone1"
                                   value="{{ old('numeroTelefone1') }}"
                                   placeholder="Digite o Número de Telefone">
                        </div>
                        </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
@stop

