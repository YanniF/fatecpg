@extends('layouts.master')

@section('content')

<div class="container login">
    <div class="content">
        <div class="formulario">
            <h2>Login</h2>     
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="username" class="control-label">Usuário</label>
                    <div class="inputs">
                        <input id="username" type="username" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">Senha</label>
                    <div class="inputs">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="check">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Lembrar
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="botao">
                        <button type="submit" class="btn btn-primary">Entrar</button>
                        <a class="btn btn-link" href="{{ url('/password/reset') }}">Esqueceu sua senha?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
