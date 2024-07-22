@extends('layouts.layout')
@section('content')
    <div class="card  mx-auto my-5 pb-5 shadow" style="width: 40rem; height: 35rem; background: #F5F5F5">
        <div class="card-title container row py-3">
            <div class="col-lg-4    mb-3">
                <a href="/"><img src="img/logo.png" class="img-fluid" width="50px" alt=""></a>
            </div>
            <div class="col-lg-8 text-end my-auto fw-semibold">
                <p>Belum mempunyai akun?
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-decoration-none">Daftar</a>
                    @endif
                </p>
            </div>
        </div>
        <div class="card-body">
            <h4 class="text-bold text-center mb-5"><b>SELAMAT DATANG</b></h4>

            <!-- Session Status -->
            <x-auth-session-status class="mb-3" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-3" :errors="$errors" />
            <div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email Address -->
                    <div class="col-lg-6 mx-auto">
                        <label for="" class="form-text">Masukan Email</label>
                        <x-input id="email" class="block mt-1 w-full form-control border-dark" type="email"
                            name="email" :value="old('email')" required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mt-2 col-lg-6 mx-auto">
                        <label for="" class="form-text">Masukan Kata Sandi</label>
                        <x-input id="password" class="block mt-1 w-full form-control border-dark" type="password"
                            name="password" required autocomplete="current-password" />
                    </div>
                        {{-- <div class="col-lg-9 mt-2 text-end fw-semibold">
                            @if (Route::has('password.request'))
                                <a class="text-decoration-none text-sm text-danger" href="{{ route('password.request') }}">
                                    {{ __('Lupa Kata Sandi?') }}
                                </a>
                            @endif
                        </div> --}}
                    </div>

                    <div class=" col-lg-4 my-5 mx-auto justify-end">
                        <x-button class="ml-3 btn btn-dark col-lg-12">
                            {{ __('Masuk') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
