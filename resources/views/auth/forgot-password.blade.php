@extends('commonUser.layout.app')

<header>
    <a href="{{ route('homePageOff') }}" class="logo"><i class="fab fa-bitcoin"></i>Coin Manager</a>

</header>
<x-guest-layout>
    <x-auth-card>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />


        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="card-forgot1">
                    <div class="card-header">
                        <h3>Esqueceu sua Senha?</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text icon"><i class="fas fa-at"></i></span>
                                </div>
                                <x-input id="email" class="form-control" type="email" placeholder="Email" name="email" :value="old('email')" required autofocus />
                            </div>

                            <div class="form-group">
                                <a href="{{ route('login') }}">
                                    <x-button class="float-right login_btn glow-button">
                                        Enviar Email
                                    </x-button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </x-auth-card>
</x-guest-layout>
<section class="footer">

    <h1 class="credit"> Desenvolvido por <span> Igor Oliveira, Leonardo Freitas, Marlon Santos </span> | Todos os direitos reservados! </h1>

</section>