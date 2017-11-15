@extends('layouts.template')

@section('title')
    Inscription
@endsection

@section('title-page')
    S'Inscrire
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Pseudo</label>

                    <div class="">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">Addresse E-Mail</label>

                    <div class="">
                        <input id="email" type="email" class="form-control" name="email" aria-describedby="emailHelp" value="{{ old('email') }}" required>
                        <small id="emailHelp" class="form-text text-muted">Si vous êtes du Cesi veuillez utiliser l'adresse viacesi ou vous ne pourrez pas vous inscrire aux équipes.</small>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Mot de passe</label>

                    <div class="">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 control-label">Confirmation mot de passe</label>

                    <div class="">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input id="cesi-member" name="cesi-member" type="checkbox" class="custom-control-input" value="True">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Je suis scolarisé au Cesi</span>
                    </label>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-custo-inverted">
                            S'inscrire
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br>
</div>
@endsection
