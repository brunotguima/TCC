@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default"> </br></br>
            <div class="panel-heading"><center><b>Cadastrar</b></center></div> </br></br>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nome Completo</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('CPF') ? ' has-error' : '' }}">
                            <label for="CPF" class="col-md-4 control-label">CPF</label>
                            <div class="col-md-6">
                                <input id="CPF" type="number" class="form-control" name="CPF" required autofocus>

                        <div class="form-group{{ $errors->has('RG') ? ' has-error' : '' }}">
                            <label for="RG" class="col-md-4 control-label">RG</label>

                        <div class="col-md-6">
                                <input id="RG" type="number" class="form-control" name="RG" required autofocus>

                        <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label for="date" class="col-md-4 control-label">Data de nascimento</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date" required autofocus>

                        <div class="form-group{{ $errors->has('Sexo') ? ' has-error' : '' }}">
                            <label for="Sexo" class="col-md-4 control-label">Sexo</label>

                            <div class="col-md-6">
                                <input id="Sexo" type="text" class="form-control" name="Sexo" required autofocus>

                                <div class="form-group{{ $errors->has('Telefone') ? ' has-error' : '' }}">
                            <label for="Telefone" class="col-md-4 control-label">Telefone</label>

                            <div class="col-md-6">
                                <input id="Telefone" type="number" class="form-control" name="Telefone" required autofocus>

                                <div class="form-group{{ $errors->has('Telefone2') ? ' has-error' : '' }}">
                            <label for="Telefone2" class="col-md-4 control-label">Telefone 2 (Não obrigatório)</label>

                            <div class="col-md-6">
                                <input id="Telefone2" type="number" class="form-control" name="Telefone2" required autofocus></br></br>

                                <div class="panel-heading"><center><b>Dados do estabelecimento</b></center></div> </br></br>
                                
                                <div class="form-group{{ $errors->has('nomeEstab') ? ' has-error' : '' }}">
                            <label for="nomeEstab" class="col-md-4 control-label">Nome do estabelecimento</label>

                            <div class="col-md-6">
                                <input id="nomeEstab" type="text" class="form-control" name="nomeEstab" required autofocus>
                                
                                <div class="form-group{{ $errors->has('CNPJ') ? ' has-error' : '' }}">
                            <label for="CNPJ" class="col-md-4 control-label">CNPJ</label>

                            <div class="col-md-6">
                                <input id="CNPJ" type="number" class="form-control" name="CNPJ" required autofocus>

                                <div class="form-group{{ $errors->has('Inscricaoestadual') ? ' has-error' : '' }}">
                            <label for="Inscricaoestadual" class="col-md-4 control-label">Inscrição estadual</label>

                            <div class="col-md-6">
                                <input id="Inscricaoestadual" type="text" class="form-control" name="Inscricaoestadual" required autofocus>

                                <div class="form-group{{ $errors->has('Endereco') ? ' has-error' : '' }}">
                            <label for="Endereco" class="col-md-4 control-label">Endereço</label>

                            <div class="col-md-6">
                                <input id="Endereco" type="text" class="form-control" name="Endereco" required autofocus>

                                <div class="form-group{{ $errors->has('CEP') ? ' has-error' : '' }}">
                            <label for="CEP" class="col-md-4 control-label">CEP</label>

                            <div class="col-md-6">
                                <input id="CEP" type="number" class="form-control" name="CEP" required autofocus>

                                <div class="form-group{{ $errors->has('Cidade') ? ' has-error' : '' }}">
                            <label for="Cidade" class="col-md-4 control-label">Cidade</label>

                            <div class="col-md-6">
                                <input id="Cidade" type="text" class="form-control" name="Cidade" required autofocus>

                                <div class="form-group{{ $errors->has('Estado') ? ' has-error' : '' }}">
                            <label for="Estado" class="col-md-4 control-label">Estado</label>

                            <div class="col-md-6">
                                <input id="Estado" type="text" class="form-control" name="Estado" required autofocus>

                                <div class="form-group{{ $errors->has('ramoAtiv') ? ' has-error' : '' }}">
                            <label for="ramoAtiv" class="col-md-4 control-label">Ramo de atividade</label>

                            <div class="col-md-6">
                                <input id="ramoAtiv" type="text" class="form-control" name="ramoAtiv" required autofocus>

                                <div class="form-group{{ $errors->has('Nomefantasia') ? ' has-error' : '' }}">
                            <label for="Nomefantasia" class="col-md-4 control-label">Nome fantasia</label>

                            <div class="col-md-6">
                                <input id="Nomefantasia" type="text" class="form-control" name="Nomefantasia" required autofocus></br></br>

                                <div class="panel-heading"><center><b>Login e senha</b></center></div> </br></br>



                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('senha') ? ' has-error' : '' }}">
                            <label for="senha" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="senha" type="password" class="form-control" name="senha" required>

                                @if ($errors->has('senha'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('senha') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
