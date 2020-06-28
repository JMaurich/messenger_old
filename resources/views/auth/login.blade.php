@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="6">

            <b-card title="Inicio de sesión">
                <b-alert show>
                    Por favor ingrese sus datos:
                </b-alert>


                <b-form method="POST" action="{{ route('login') }}">
                        @csrf

                <b-form-group 
                    label="Correo electrónico:" label-for="email"
                    description="Nunca compartitemos tu correo. esta seguro con nosotros.">
                    <b-form-input type="email"
                        id="email" name="email"
                        value="{{ old('email') }}" required autofocus
                        placeholder="email@messenger.com">
                    </b-form-input>
                </b-form-group>

                <b-form-group label="Contraseña:" label-for="password">
                    <b-form-input type="password"
                        id="password" name="password"
                        value="password" required
                        placeholder="Ingrese contraseña">
                    </b-form-input>
                </b-form-group>
                <b-form-group>
                    <b-form-checkbox name="remember" {{ old('remember') ? 'checked="true"' : '' }}>
                        Recordar contraseña.
                    </b-form-checkbox>
                 </b-form-group>

                <b-button type="submit" variant="primary">
                    Ingresar
                </b-button>

                <b-button href="{{ route('password.request') }}" variant="link">
                    Olvidaste tu contraseña?
                </b-button>

 
                </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
