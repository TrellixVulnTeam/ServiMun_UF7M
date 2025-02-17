@extends('layouts.app')


@section('content')

@section('styles')
{{--    <link href="{{ asset('css/servimun.css') }}" rel="stylesheet"  type="text/css">--}}
    <style rel="stylesheet"  type="text/css">
        .bg-registry {
            background: url("{{ asset('/images/web/bg-registry.png') }}") no-repeat center !important;
        }
    </style>

@endsection

<div class="full-height content-full bg-registry" >

<div class="container  ">
    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class="m-2 text-center " >
                <a href="/login"  >
                    <span><img src=" {{ asset('/images/web/bg-logo-registry.png') }} " alt=""></span>
                </a>
            </div>

            <div class="card bg-form">
                <div class="card-header text-darkred">{{ __('REGISTER') }} | Ingrese los datos que se piden</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="curp" class="col-md-4 col-form-label text-md-right text-white">CURP</label>
                            <div class="col-md-6">
                                <input id="curp" type="text" class="form-control {{ $errors->has('curp') ? ' is-invalid' : '' }}" name="curp" value="{{ old('curp') }}" onchange="validaInputCURP(this)" autofocus>
                                <pre class="text-white" id="resultadoCURP"></pre>
                                <span><span class="text-white">Si no conoces tu CURP,</span> <span><a href="https://www.gob.mx/curp/" target="_blank" class="text-info"><strong>Descargala aquí</strong></a></span></span>
                                @if ($errors->has('curp'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('curp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right text-white">E-Mail </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ap_paterno" class="col-md-4 col-form-label text-md-right text-white">Apellido Paterno </label>
                            <div class="col-md-6">
                                <input id="ap_paterno" type="text" class="form-control{{ $errors->has('ap_paterno') ? ' is-invalid' : '' }}" name="ap_paterno" value="{{ old('ap_paterno') }}" required>
                                @if ($errors->has('ap_paterno'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('ap_paterno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ap_materno" class="col-md-4 col-form-label text-md-right text-white">Apellido Materno </label>
                            <div class="col-md-6">
                                <input id="ap_materno" type="text" class="form-control{{ $errors->has('ap_materno') ? ' is-invalid' : '' }}" name="ap_materno" value="{{ old('ap_materno') }}" required>
                                @if ($errors->has('ap_materno'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('ap_materno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right text-white">Nombre </label>
                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required>
                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

{{--                                @if ($errors->has('password'))--}}
{{--                                    <span class="invalid-feedback">--}}
{{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar Password</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger-primary btn-block text-white">
                                    REGISTRAR
                                </button><br><br>
                                <a href="login"  class="btn btn-info btn-block">
                                    INICIAR SESIÓN
                                </a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@include('partials/script_footer')

@endsection

