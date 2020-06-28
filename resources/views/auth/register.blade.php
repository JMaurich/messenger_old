@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="6">


            <b-card title="Registro" class="my-3">
                 @if ($errors->any())
                    <b-alert show variant="danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </b-alert>
                @else
                   <b-alert show>
                        Por favor ingrese sus datos:
                    </b-alert>
                @endif


                <b-form method="POST" action="{{ route('register') }}">
                        @csrf


                <b-form-group 
                    label="Nombre" label-for="name">
                    <b-form-input type="text"
                        id="name" name="name"
                        value="{{ old('name') }}" required autofocus
                        placeholder="Ingrese nombre">
                    </b-form-input>
                </b-form-group>

                <b-form-group 
                    label="Correo electrónico:" label-for="email"
                    description="Nunca compartitemos tu correo. esta seguro con nosotros.">
                    <b-form-input type="email"
                        id="email" name="email"
                        value="{{ old('email') }}" required
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

                <b-form-group label="Confirmar contraseña:" label-for="password_confirmation">
                    <b-form-input type="password"
                        id="password_confirmation" name="password_confirmation"
                        placeholder="Confirme contraseña">
                    </b-form-input>
                </b-form-group>
 
                <b-button type="submit" variant="primary">
                    Confirmar registro
                </b-button>

                <b-button href="{{ route('login') }}" variant="link">
                    Ya te has registrado?
                </b-button>

 
                </b-form>
            </b-card>
            

                                
        </b-col>
    </b-row>
</b-container>




                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                   
@endsection
