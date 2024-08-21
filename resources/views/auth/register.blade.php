@extends('layouts.app')

@section('content')
    <style>
        .section-form {
            background-image: url('images/imagen_principal.png');
            background-size: cover;
            /* Ajusta la imagen al tamaño del div */
            background-position: center;
            /* Centra la imagen */
            background-repeat: no-repeat;
            /* Evita que la imagen se repita */
            background-color: rgba(0, 0, 0, 0.5);
            /* Color negro con 50% de opacidad */
            background-blend-mode: overlay;
            /* Mezcla el color y la imagen */
        }
    </style>
    <div class="section-form py-4 flex-fill">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Registrarse') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="lastname"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Apellido') }}</label>

                                    <div class="col-md-6">
                                        <input id="lastname" type="text"
                                            class="form-control @error('lastname') is-invalid @enderror" name="lastname"
                                            value="{{ old('lastname') }}" required autocomplete="lastname">

                                        @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="tipo_doc"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Tipo de Documento') }}</label>

                                    <div class="col-md-6">

                                        <select id="tipo_doc" class="form-control @error('tipo_doc') is-invalid @enderror"
                                            name="tipo_doc" value="{{ old('tipo_doc') }}" required autocomplete="tipo_doc">
                                            <option value="" selected>Selecionar</option>
                                            <option value="CC">Cédula de ciudadania</option>
                                            <option value="TI">Tarjeta de Identidad</option>
                                            <option value="CE">Cédula de Extranjeria</option>
                                            <option value="PEP">Permiso Especial de Permanencia</option>
                                            <option value="DIE">Documento de identificación extranjero</option>
                                        </select>

                                        @error('tipo_doc')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="num_doc"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Número de Documento') }}</label>

                                    <div class="col-md-6">
                                        <input id="num_doc" type="Number"
                                            class="form-control @error('num_doc') is-invalid @enderror" name="num_doc"
                                            value="{{ old('num_doc') }}" required autocomplete="num_doc">

                                        @error('num_doc')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="ciudad"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Ciudad') }}</label>

                                    <div class="col-md-6">

                                        <select id="ciudad" class="form-control @error('ciudad') is-invalid @enderror"
                                            name="ciudad" value="{{ old('ciudad') }}" required autocomplete="ciudad">
                                            <option value="" selected>Selecionar</option>
                                            <option value="Bogotá D.C.">Bogotá D.C.</option>
                                            <option value="Medellín">Medellín</option>
                                            <option value="Cali">Cali</option>
                                            <option value="Barranquilla">Barranquilla</option>
                                            <option value="Cartagena">Cartagena</option>
                                            <option value="Bucaramanga">Bucaramanga</option>
                                            <option value="Pereira">Pereira</option>
                                            <option value="Manizales">Manizales</option>
                                            <option value="Santa Marta">Santa Marta</option>
                                            <option value="Ibagué">Ibagué</option>
                                            <option value="Cúcuta">Cúcuta</option>
                                            <option value="Villavicencio">Villavicencio</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Neiva">Neiva</option>
                                            <option value="Popayán">Popayán</option>
                                            <option value="Valledupar">Valledupar</option>
                                            <option value="Pasto">Pasto</option>
                                            <option value="Montería">Montería</option>
                                            <option value="Quibdó">Quibdó</option>
                                            <option value="Tunja">Tunja</option>

                                        </select>

                                        @error('ciudad')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="direccion"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Dirección') }}</label>

                                    <div class="col-md-6">
                                        <input id="direccion" type="text"
                                            class="form-control @error('direccion') is-invalid @enderror" name="direccion"
                                            value="{{ old('direccion') }}" required autocomplete="direccion">

                                        @error('direccion')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="telefono"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Número de Teléfono') }}</label>

                                    <div class="col-md-6">
                                        <input id="telefono" type="Number"
                                            class="form-control @error('telefono') is-invalid @enderror" name="telefono"
                                            value="{{ old('telefono') }}" required autocomplete="telefono">

                                        @error('telefono')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Correo Electronico') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Contraseña') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Registrarse') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/validaciones/registrar_usuario.js') }}"></script>
@endsection
