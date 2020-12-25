@extends('layouts.master-without-nav')

@section('content')

    <div class="wrapper-page">

        <div class="card">
            <div class="card-body">

                <h3 class="text-center m-0">
                    <a href="#" class="logo logo-admin"><img src="{{URL::asset('assets/images/vm-logo.png')}}" height="90" alt="logo"></a>
                </h3>

                <div class="p-3">
                    <h4 class="text-muted font-18 m-b-5 text-center">Bem Vindo ao Painel Admin do M-Pesa self-registration portal</h4>
                    <p class="text-muted text-center">Email: demo@vm.co.mz</p>
                    <p class="text-muted text-center">Password: secret123</p>

                    <form class="form-horizontal m-t-30" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="username">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required id="email" placeholder="Insira o email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password" placeholder="Insira a password" >
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group row m-t-20">
                            <div class="col-12 text-center">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Entrar</button>
                            </div>
                        </div>

                        <div class="form-group m-t-10 mb-0 row">
                            <div class="col-12 m-t-20">
                                <a href="#" class="text-muted"><i class="mdi mdi-lock"></i> Esqueceu a password?</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="m-t-40 text-center">
            <p>© {{date('Y')}} Vodacom</p>
        </div>

    </div>

@endsection
